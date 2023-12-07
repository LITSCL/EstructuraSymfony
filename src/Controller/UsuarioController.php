<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils; //Necesario para autenticar usuarios.
use Symfony\Component\Security\Core\User\UserInterface; //Necesario para poder obtener el usuario logeado.

use App\Helper\ValidacionHelper; //Importando Helper.

use App\Entity\Usuario;
use App\Form\CrearUsuarioType;

class UsuarioController extends AbstractController
{
    //Métodos Vista (Retornan vistas).
    public function crearUsuario(): Response
    {
        //1. Crear el formulario.
        $usuario = new Usuario();
        $formulario = $this->createForm(CrearUsuarioType::class, $usuario, array("action" => $this->generateUrl("usuario_accion_save")));
        
        //2. Renderizar la vista y enviar el formulario.
        return $this->render("models/usuario/crear_usuario.html.twig", ["formulario" => $formulario->createView()]);
    }
    
    public function mostrarUsuarios(): Response
    {
        //1. Crear el repositorio del modelo (Permite acceder a datos de la tabla mapeada).
        $repositorioUsuario = $this->getDoctrine()->getRepository(Usuario::class);
        
        //2. Traer y almacenar todos los registros.
        $usuarios = $repositorioUsuario->findAll();
        
        //3. Retornar la vista con sus datos.
        return $this->render("models/usuario/mostrar_usuarios.html.twig", [
            "usuarios" => $usuarios
        ]);
    }
    
    public function panelAdministrador(UserInterface $usuario) 
    {
        $usuario = $this->getUser();
        return $this->render("models/usuario/panel_administrador.html.twig");
    }
    
    public function panelCliente(UserInterface $usuario) 
    {
        $usuario = $this->getUser();
        return $this->render("models/usuario/panel_cliente.html.twig");
    }
    
    public function iniciarSesion()
    {
        return $this->render("models/usuario/iniciar_sesion.html.twig", array("error" => "", "ultimoRutUsuario" => ""));
    }
    
    //Métodos Acción (Procesan datos desde formularios).
    public function save(Request $request, UserPasswordHasherInterface $encoder)
    {
        $errores = array();
        
        //1. Recibir el formulario y crear un instancia de la entidad que representa.
        $formulario = $request->get("crear_usuario");
        $usuario = new Usuario();
        
        //2. Setear la instancia con los datos que llegan desde el formulario.
        $usuario->setRut($formulario["rut"]);
        $usuario->setNombre($formulario["nombre"]);
        $usuario->setApellido($formulario["apellido"]);
        $usuario->setEmail($formulario["email"]);
        
        $claveCifrada = $encoder->hashPassword($usuario, $formulario["clave"]); //El método "hashPassword" cifra un String perteneciente a una Entidad, el primer parámetro es la entidad y el segundo parámetro es el atributo de la entidad a cifrar.
        $usuario->setClave($claveCifrada);
        
        $usuario->setTipo($formulario["tipo"]);
        
        //3. Crear en EntityManager y persistir el objeto en la cache de Symfony.
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($usuario);
        
        //4. Validar los datos (En este caso se esta utilizando un Helper).
        $validador = new ValidacionHelper();
        if ($validador->validarRutChileno($usuario->getRut()) == false) {
            array_push($errores, "El rut ingresado no posee formato válido");
        }
        
        $session = new Session();
        if (sizeof($errores) == 0) {
            //5. Almacenar en la base de datos el objeto.  
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
        }
        else {
            $session->getFlashBag()->add("mensaje", "Fallido");
            $session->getFlashBag()->add("errores", $errores);
        }
        //6. Retornar una vista.
        return $this->redirectToRoute("usuario_vista_crearUsuario");
    }
    
    public function autenticarSesion(AuthenticationUtils $autenticador)
    {
            return $this->render("default.html.twig");
    }
    
    public function errorSesion(AuthenticationUtils $autenticador)
    {
        $error = $autenticador->getLastAuthenticationError();
        $ultimoRutUsuario = $autenticador->getLastUsername();
        
        return $this->render("models/usuario/iniciar_sesion.html.twig", array("error" => $error, "ultimoRutUsuario" => $ultimoRutUsuario));
    }
    
    //Métodos Archivo (Retornan archivos).
}
