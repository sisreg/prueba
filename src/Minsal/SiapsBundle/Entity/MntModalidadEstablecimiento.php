<?php

namespace Minsal\SiapsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntModalidadEstablecimiento
 *
 * @ORM\Table(name="mnt_modalidad_establecimiento")
 * @ORM\Entity
 */
class MntModalidadEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_modalidad_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_establecimiento", type="integer", nullable=false)
     */
    private $idEstablecimiento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tiene_bodega", type="boolean", nullable=false)
     */
    private $tieneBodega;

    /**
     * @var boolean
     *
     * @ORM\Column(name="repetitiva", type="boolean", nullable=false)
     */
    private $repetitiva;

    /**
     * @var \CtlModalidad
     *
     * @ORM\ManyToOne(targetEntity="CtlModalidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modalidad", referencedColumnName="id")
     * })
     */
    private $idModalidad;



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
     * Set idEstablecimiento
     *
     * @param integer $idEstablecimiento
     * @return MntModalidadEstablecimiento
     */
    public function setIdEstablecimiento($idEstablecimiento)
    {
        $this->idEstablecimiento = $idEstablecimiento;
    
        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return integer 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Set tieneBodega
     *
     * @param boolean $tieneBodega
     * @return MntModalidadEstablecimiento
     */
    public function setTieneBodega($tieneBodega)
    {
        $this->tieneBodega = $tieneBodega;
    
        return $this;
    }

    /**
     * Get tieneBodega
     *
     * @return boolean 
     */
    public function getTieneBodega()
    {
        return $this->tieneBodega;
    }

    /**
     * Set repetitiva
     *
     * @param boolean $repetitiva
     * @return MntModalidadEstablecimiento
     */
    public function setRepetitiva($repetitiva)
    {
        $this->repetitiva = $repetitiva;
    
        return $this;
    }

    /**
     * Get repetitiva
     *
     * @return boolean 
     */
    public function getRepetitiva()
    {
        return $this->repetitiva;
    }

    /**
     * Set idModalidad
     *
     * @param \Minsal\SiapsBundle\Entity\CtlModalidad $idModalidad
     * @return MntModalidadEstablecimiento
     */
    public function setIdModalidad(\Minsal\SiapsBundle\Entity\CtlModalidad $idModalidad = null)
    {
        $this->idModalidad = $idModalidad;
    
        return $this;
    }

    /**
     * Get idModalidad
     *
     * @return \Minsal\SiapsBundle\Entity\CtlModalidad 
     */
    public function getIdModalidad()
    {
        return $this->idModalidad;
    }
}