<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria", uniqueConstraints={@ORM\UniqueConstraint(name="nombre_UNIQUE", columns={"nombre"})})
 * @ORM\Entity
 */
class Categoria
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Producto", mappedBy="categoria");
     */
    private $allProducto;

    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function setId(int $id): self
    {
        $this->id = $id;
        
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
    
    /**
     * @return Collection|Producto[]
     */
    public function getAllProducto(): Collection
    {
        return $this->allProducto;
    }


}
