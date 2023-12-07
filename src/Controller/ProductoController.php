<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use App\Entity\Producto;
use App\Entity\Categoria;

use App\Form\CrearProductoType;

class ProductoController extends AbstractController
{
    //Métodos Vista (Retornan vistas).
    public function crearProducto(): Response
    {
        //1. Crear el formulario.
        $producto = new Producto();
        $formulario = $this->createForm(CrearProductoType::class, $producto, array("action" => $this->generateUrl("producto_accion_save")));
        
        //2. Renderizar la vista y enviar el formulario.
        return $this->render("models/producto/crear_producto.html.twig", ["formulario" => $formulario->createView()]);
    }
    
    public function mostrarProductos(): Response
    {
        //1. Crear el repositorio del modelo (Permite acceder a datos de la tabla mapeada).
        $repositorioProducto = $this->getDoctrine()->getRepository(Producto::class);
        
        //2. Traer y almacenar todos los registros.
        $productos = $repositorioProducto->findAll();
        
        //3. Retornar la vista con sus datos.
        return $this->render("models/producto/mostrar_productos.html.twig", [
            "productos" => $productos
        ]);
    }
    
    //Métodos Acción (Procesan datos desde formularios).
    public function save(Request $request)
    {
        //1. Recibir el formulario y crear un instancia de la entidad que representa.
        $formulario = $request->get("crear_producto"); //NOTA: Los formularios siempre tienen el nombre de su Type (Ejemplo: CrearProductoType = crear_producto).
        $producto = new Producto();
        
        //2. Setear la instancia con los datos que llegan.
        $producto->setCodigo($formulario["codigo"]);
        $producto->setNombre($formulario["nombre"]);
        $producto->setPrecio($formulario["precio"]);
        
        $repositorioCategoria = $this->getDoctrine()->getRepository(Categoria::class);
        $categoria = $repositorioCategoria->find($formulario["categoria"]);
        
        $producto->setCategoria($categoria);
        
        //3. Crear en EntityManager y persistir el objeto en la cache de Symfony.
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($producto);
        
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
        return $this->redirectToRoute("producto_vista_crearProducto");
    }
    
    //Métodos Archivo (Retornan archivos).
}
