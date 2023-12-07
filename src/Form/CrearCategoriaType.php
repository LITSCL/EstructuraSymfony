<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CrearCategoriaType extends AbstractType
{
    public function buildForm($builder, $options)
    {
        $builder->setMethod("POST")
        ->add("nombre", TextType::class, ["label" => "Nombre"])
        ->add("boton", SubmitType::class, ["label" => "Crear"]);
    }
}