<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgCtlAnticonceptivo
 *
 * @ORM\Table(name="srg_ctl_anticonceptivo", indexes={@ORM\Index(name="IDX_B297AADAFF29320", columns={"id_metodo_planificacion"})})
 * @ORM\Entity
 */
class SrgCtlAnticonceptivo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_ctl_anticonceptivo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_anticonceptivo", type="string", length=60, nullable=false)
     */
    private $nombreAnticonceptivo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_anticonceptivo", type="string", length=60, nullable=false)
     */
    private $tipoAnticonceptivo;

    /**
     * @var string
     *
     * @ORM\Column(name="material_anticonceptivo", type="string", length=60, nullable=true)
     */
    private $materialAnticonceptivo;

    /**
     * @var \SrgCtlMetodoPlanificacion
     *
     * @ORM\ManyToOne(targetEntity="SrgCtlMetodoPlanificacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_metodo_planificacion", referencedColumnName="id")
     * })
     */
    private $idMetodoPlanificacion;



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
     * Set nombreAnticonceptivo
     *
     * @param string $nombreAnticonceptivo
     * @return SrgCtlAnticonceptivo
     */
    public function setNombreAnticonceptivo($nombreAnticonceptivo)
    {
        $this->nombreAnticonceptivo = $nombreAnticonceptivo;

        return $this;
    }

    /**
     * Get nombreAnticonceptivo
     *
     * @return string 
     */
    public function getNombreAnticonceptivo()
    {
        return $this->nombreAnticonceptivo;
    }

    /**
     * Set tipoAnticonceptivo
     *
     * @param string $tipoAnticonceptivo
     * @return SrgCtlAnticonceptivo
     */
    public function setTipoAnticonceptivo($tipoAnticonceptivo)
    {
        $this->tipoAnticonceptivo = $tipoAnticonceptivo;

        return $this;
    }

    /**
     * Get tipoAnticonceptivo
     *
     * @return string 
     */
    public function getTipoAnticonceptivo()
    {
        return $this->tipoAnticonceptivo;
    }

    /**
     * Set materialAnticonceptivo
     *
     * @param string $materialAnticonceptivo
     * @return SrgCtlAnticonceptivo
     */
    public function setMaterialAnticonceptivo($materialAnticonceptivo)
    {
        $this->materialAnticonceptivo = $materialAnticonceptivo;

        return $this;
    }

    /**
     * Get materialAnticonceptivo
     *
     * @return string 
     */
    public function getMaterialAnticonceptivo()
    {
        return $this->materialAnticonceptivo;
    }

    /**
     * Set idMetodoPlanificacion
     *
     * @param \Minsal\GinecologiaBundle\Entity\SrgCtlMetodoPlanificacion $idMetodoPlanificacion
     * @return SrgCtlAnticonceptivo
     */
    public function setIdMetodoPlanificacion(\Minsal\GinecologiaBundle\Entity\SrgCtlMetodoPlanificacion $idMetodoPlanificacion = null)
    {
        $this->idMetodoPlanificacion = $idMetodoPlanificacion;

        return $this;
    }

    /**
     * Get idMetodoPlanificacion
     *
     * @return \Minsal\GinecologiaBundle\Entity\SrgCtlMetodoPlanificacion 
     */
    public function getIdMetodoPlanificacion()
    {
        return $this->idMetodoPlanificacion;
    }
}
