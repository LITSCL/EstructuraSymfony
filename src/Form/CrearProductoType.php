<?php

namespace App\Form;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use App\Entity\Categoria;

class CrearProductoType extends AbstractType
{
    private $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager; //Iniciando el Entity Manager (Necesario para poder utilizar los métodos de repositorio).
    }
    
    public function buildForm($builder, $options)
    {  
        $repositorioCategoria = $this->entityManager->getRepository(Categoria::class);
        $categorias = $repositorioCategoria->findAll();
        
        $array = array();
        foreach ($categorias as $c) {
            $array[$c->getNombre()] = $c->getId();
        }
        
        $builder->setMethod("POST")
            ->add("codigo", TextType::class, ["label" => "Codigo"])
            ->add("nombre", TextType::class, ["label" => "Nombre"])
            ->add("precio", TextType::class, ["label" => "Precio"])
            ->add("categoria", ChoiceType::class, ["label" => "Categoria", "choices" => $array])
            ->add("boton", SubmitType::class, ["label" => "Crear"]);
    }
}