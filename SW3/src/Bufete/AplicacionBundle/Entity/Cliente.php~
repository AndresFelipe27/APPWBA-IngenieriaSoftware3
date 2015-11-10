<?php

namespace Bufete\AplicacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Ciudad
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cliente
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
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

     /**
     * @ORM\Column(name="apellido", type="string", length=45, nullable=false)
     */
    private $apellido;

    /**
     * @ORM\Column(name="correo", type="string", length=145)
     */
    private $correo;
    
     /**
     * @ORM\Column(name="celular", type="string", length=45, nullable=false)
     */
    private $celular;
    

     /**
     * @ORM\Column(name="direccion", type="string", length=45)
     */
    private $direccion;

    
    
    
      /**
     * @ORM\OneToMany(targetEntity="ProcesoJudicial", mappedBy="cliente")
     */
    protected $procesos;
 
    public function __construct()
    {
        $this->procesos = new ArrayCollection();
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
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * Set direccion
     *
     * @param string $direccion
     * @return Cliente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Add procesos
     *
     * @param \Bufete\AplicacionBundle\Entity\ProcesoJudicial $procesos
     * @return Cliente
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
