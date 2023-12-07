<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use App\Entity\Categoria;
use App\Form\CrearCategoriaType;

class CategoriaController extends AbstractController
{
    //Métodos Vista (Retornan vistas).
    public function crearCategoria(): Response
    {
        //1. Crear el formulario.
        $categoria = new Categoria();
        $formulario = $this->createForm(CrearCategoriaType::class, $categoria, array("action" => $this->generateUrl("categoria_accion_save")));
        
        //2. Renderizar la vista y enviar el formulario.
        return $this->render("models/categoria/crear_categoria.html.twig", ["formulario" => $formulario->createView()]);
    }
    
    public function mostrarCategorias(): Response
    {
        //1. Crear el repositorio del modelo (Permite acceder a datos de la tabla mapeada).
        $repositorioCategoria = $this->getDoctrine()->getRepository(Categoria::class);
        
        //2. Traer y almacenar todos los registros.
        $categorias = $repositorioCategoria->findAll();
        
        //3. Retornar la vista con sus datos.
        return $this->render("models/categoria/mostrar_categorias.html.twig", [
            "categorias" => $categorias
        ]);
    }
    
    //Métodos Acción (Procesan datos desde formularios).
    public function save(Request $request)
    {
        //1. Recibir el formulario y crear un instancia de la entidad que representa.
        $formulario = $request->get("crear_categoria"); //NOTA: Los formularios siempre tienen el nombre de su Type (Ejemplo: CrearCategoriaType = crear_categoria).
        $categoria = new Categoria();
        
        //2. Setear la instancia con los datos que llegan.
        $categoria->setNombre($formulario["nombre"]);
        
        //3. Crear en EntityManager y persistir el objeto en la cache de Symfony.
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($categoria);
        
        //4. Almacenar en la base de datos el objeto.
        $session = new Session();
        try {
            if ($entityManager->flush() == null) { //Retorna nulo si todo va bien.
                $session->getFlashBag()->add("mensaje", "Exitoso"); //Generando una sesión flash.
            }
            else {
                $session->getFlashBag()->add("mensaje", "Fallido"); //Generando una sesión flash.
            }
        } catch (\Exception $ex) {
            $session->getFlashBag()->add("mensaje", "Fallido"); //Generando una sesión flash.
        }
        
        //5. Retornar una vista.
        return $this->redirectToRoute("categoria_vista_crearCategoria");
    }
    
    //Métodos Archivo (Retornan archivos).
}
