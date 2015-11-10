<?php

namespace Bufete\AplicacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Documento
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
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @ORM\Column(name="documento", type="string", length=255)
     */
    private $documento;
    

     /**
     * @ORM\ManyToOne(targetEntity="ProcesoJudicial", inversedBy="documentos")
     * @ORM\JoinColumn(name="proceso_id", referencedColumnName="id")
     */
    protected $procesoJudicial;
    

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
     * @return Documento
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Documento
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
     * Set documento
     *
     * @param string $documento
     * @return Documento
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set proceso
     *
     * @param \Bufete\AplicacionBundle\Entity\ProcesoJudicial $proceso
     * @return Documento
     */
    public function setProceso(\Bufete\AplicacionBundle\Entity\ProcesoJudicial $proceso = null)
    {
        $this->proceso = $proceso;

        return $this;
    }

    /**
     * Get proceso
     *
     * @return \Bufete\AplicacionBundle\Entity\ProcesoJudicial 
     */
    public function getProceso()
    {
        return $this->proceso;
    }
}
