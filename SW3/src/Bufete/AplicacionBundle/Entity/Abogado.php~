<?php

namespace Bufete\AplicacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * abogado
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Abogado
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
     * @ORM\Column(name="nombre", type="string", length=45)
     */
    private $nombre;

     /**
     * @ORM\Column(name="apellido", type="string", length=45)
     */
    private $apellido;

    /**
     * @ORM\Column(name="correo", type="string", length=145)
     */
    private $correo;
    
     /**
     * @ORM\Column(name="celular", type="string", length=45)
     */
    private $celular;
    
     /**
     * @ORM\Column(name="contrasena", type="string", length=255)
     */
    private $contrasena;

    
    /**
     * @ORM\OneToMany(targetEntity="ProcesoJudicial", mappedBy="abogado")
     */
    protected $procesos;
 
    public function __construct()
    {
        $this->procesos = new ArrayCollection();
    }
    
    //esto sirve para al agregar un objeto aparecesca un combo con los abogados q hay     
     public function __toString()
 {
     return $this->nombre;
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
     * Set nombre
     *
     * @param string $nombre
     * @return Abogado
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Abogado
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Abogado
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return Abogado
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     * @return Abogado
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string 
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Add procesos
     *
     * @param \Bufete\AplicacionBundle\Entity\ProcesoJudicial $procesos
     * @return Abogado
     */
    public function addProceso(\Bufete\AplicacionBundle\Entity\ProcesoJudicial $procesos)
    {
        $this->procesos[] = $procesos;

        return $this;
    }

    /**
     * Remove procesos
     *
     * @param \Bufete\AplicacionBundle\Entity\ProcesoJudicial $procesos
     */
    public function removeProceso(\Bufete\AplicacionBundle\Entity\ProcesoJudicial $procesos)
    {
        $this->procesos->removeElement($procesos);
    }

    /**
     * Get procesos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProcesos()
    {
        return $this->procesos;
    }
}
