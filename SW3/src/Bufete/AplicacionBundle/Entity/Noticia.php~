<?php

namespace Bufete\AplicacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Ciudad
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Noticia
{
    /**
     * 
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
     /**
     * @ORM\Column(name="titulo", type="string", length=100, nullable=false, unique=true)
     */
    private $titulo;
    

    /**
     * @ORM\Column(name="noticia", type="string", length=2500)
     */
    private $noticia;
    
     /**
     * @ORM\Column(name="fechaIn", type="date")
     */
    private $fecha;
   

     /**
     * @ORM\ManyToOne(targetEntity="Abogado", inversedBy="noticias")
     * @ORM\JoinColumn(name="abogado_id", referencedColumnName="id")
     */
    protected $abogado;
    

    
     public function __toString()
 {
     return $this->titulo;
 }
    
    
    
    
}
