<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario implements UserInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="rut", type="string", length=45, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=45, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=255, nullable=false)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=45, nullable=false)
     */
    private $tipo;

    public function getRut(): ?string
    {
        return $this->rut;
    }
    
    public function setRut(string $rut): self
    {
        $this->rut = $rut;
        
        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getClave(): ?string
    {
        return $this->clave;
    }

    public function setClave(string $clave): self
    {
        $this->clave = $clave;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
    
    public function getUsername()
    {
        return $this->rut;
    }
    
    public function getUserIdentifier()
    {
        return $this->rut;
    }
    
    public function getPassword()
    {
        return $this->clave;
    }
    
    public function getSalt()
    {
        return null;
    }
    
    public function getRoles()
    {
        return array("ROLE_" . $this->getTipo());
    }
    
    public function eraseCredentials()
    {
        
    }

}
