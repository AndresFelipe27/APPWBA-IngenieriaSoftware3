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
     * @ORM\Column(name="fecha", type="date")
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
    
    
    
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Noticia
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set noticia
     *
     * @param string $noticia
     * @return Noticia
     */
    public function setNoticia($noticia)
    {
        $this->noticia = $noticia;

        return $this;
    }

    /**
     * Get noticia
     *
     * @return string 
     */
    public function getNoticia()
    {
        return $this->noticia;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Noticia
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set abogado
     *
     * @param \Bufete\AplicacionBundle\Entity\Abogado $abogado
     * @return Noticia
     */
    public function setAbogado(\Bufete\AplicacionBundle\Entity\Abogado $abogado = null)
    {
        $this->abogado = $abogado;

        return $this;
    }

    /**
     * Get abogado
     *
     * @return \Bufete\AplicacionBundle\Entity\Abogado 
     */
    public function getAbogado()
    {
        return $this->abogado;
    }
}
