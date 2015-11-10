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
class ProcesoJudicial
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
     * @ORM\Column(name="descripcion", type="string", length=750)
     */
    private $descripcion;
    
    
     /**
     * @ORM\Column(name="titulo", type="string", length=100, nullable=false, unique=true)
     */
    private $titulo;
    

     /**
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;

    /**
     * @ORM\Column(name="codigoConsulta", type="string", length=45, unique=true)
     */
    private $codigoConsulta;
    
     /**
     * @ORM\Column(name="fechaIn", type="date")
     */
    private $fechaIn;
    
     /**
     * @ORM\Column(name="fechaVencimiento", type="date")
     */
    private $fechaVencimiento;
    
    
     /**
     * @ORM\Column(name="prioridad", type="integer")
     */
    private $prioridad;

    
     /**
     * @ORM\ManyToOne(targetEntity="Abogado", inversedBy="procesos")
     * @ORM\JoinColumn(name="abogado_id", referencedColumnName="id")
     */
    protected $abogado;
    
    
     /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="procesos")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     */
    protected $cliente;
    
    
    
     
     /**
     * @ORM\OneToMany(targetEntity="Documento", mappedBy="procesoJudicial")
     */
    protected $documentos;
 
    public function __construct()
    {
        $this->documentos = new ArrayCollection();
    }
    
    
    
     public function __toString()
 {
     return $this->descripcion;
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return ProcesoJudicial
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return ProcesoJudicial
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set codigoConsulta
     *
     * @param string $codigoConsulta
     * @return ProcesoJudicial
     */
    public function setCodigoConsulta($codigoConsulta)
    {
        $this->codigoConsulta = $codigoConsulta;

        return $this;
    }

    /**
     * Get codigoConsulta
     *
     * @return string 
     */
    public function getCodigoConsulta()
    {
        return $this->codigoConsulta;
    }

    /**
     * Set fechaIn
     *
     * @param \DateTime $fechaIn
     * @return ProcesoJudicial
     */
    public function setFechaIn($fechaIn)
    {
        $this->fechaIn = $fechaIn;

        return $this;
    }

    /**
     * Get fechaIn
     *
     * @return \DateTime 
     */
    public function getFechaIn()
    {
        return $this->fechaIn;
    }

    /**
     * Set fechaVencimiento
     *
     * @param \DateTime $fechaVencimiento
     * @return ProcesoJudicial
     */
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;

        return $this;
    }

    /**
     * Get fechaVencimiento
     *
     * @return \DateTime 
     */
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /**
     * Set prioridad
     *
     * @param integer $prioridad
     * @return ProcesoJudicial
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return integer 
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set abogado
     *
     * @param \Bufete\AplicacionBundle\Entity\Abogado $abogado
     * @return ProcesoJudicial
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

    /**
     * Set cliente
     *
     * @param \Bufete\AplicacionBundle\Entity\Cliente $cliente
     * @return ProcesoJudicial
     */
    public function setCliente(\Bufete\AplicacionBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Bufete\AplicacionBundle\Entity\Cliente 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Add documentos
     *
     * @param \Bufete\AplicacionBundle\Entity\Documento $documentos
     * @return ProcesoJudicial
     */
    public function addDocumento(\Bufete\AplicacionBundle\Entity\Documento $documentos)
    {
        $this->documentos[] = $documentos;

        return $this;
    }

    /**
     * Remove documentos
     *
     * @param \Bufete\AplicacionBundle\Entity\Documento $documentos
     */
    public function removeDocumento(\Bufete\AplicacionBundle\Entity\Documento $documentos)
    {
        $this->documentos->removeElement($documentos);
    }

    /**
     * Get documentos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocumentos()
    {
        return $this->documentos;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return ProcesoJudicial
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
}
