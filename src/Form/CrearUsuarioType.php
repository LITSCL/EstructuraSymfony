<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class CrearUsuarioType extends AbstractType
{
    public function buildForm($builder, $options)
    {
        $builder->setMethod("POST")
        ->add("rut", TextType::class, ["label" => "Rut", "attr" => ["placeholder" => "19.757.106-3"]])
        ->add("nombre", TextType::class, ["label" => "Nombre"])
        ->add("apellido", TextType::class, ["label" => "Apellido"])
        ->add("email", EmailType::class, ["label" => "Email"])
        ->add("clave", PasswordType::class, ["label" => "Clave"])
        ->add("tipo", TextType::class, ["label" => "Tipo"])
        ->add("boton", SubmitType::class, ["label" => "Crear"]);
    }
}