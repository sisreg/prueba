<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgProcedimientoRealizado
 *
 * @ORM\Table(name="srg_procedimiento_realizado", indexes={@ORM\Index(name="IDX_E0692D2C35600AAE", columns={"id_procedimiento_esterilizacion"}), @ORM\Index(name="IDX_E0692D2C56558889", columns={"id_esterilizacion"})})
 * @ORM\Entity
 */
class SrgProcedimientoRealizado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_procedimiento_realizado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="column_5", type="boolean", nullable=true)
     */
    private $column5;

    /**
     * @var string
     *
     * @ORM\Column(name="column_6", type="decimal", precision=99, scale=0, nullable=true)
     */
    private $column6;

    /**
     * @var string
     *
     * @ORM\Column(name="column_7", type="string", length=200, nullable=true)
     */
    private $column7;

    /**
     * @var \SrgCtlProcedimientoEsteriliz
     *
     * @ORM\ManyToOne(targetEntity="SrgCtlProcedimientoEsteriliz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_procedimiento_esterilizacion", referencedColumnName="id")
     * })
     */
    private $idProcedimientoEsterilizacion;

    /**
     * @var \SrgEsterilizacion
     *
     * @ORM\OneToOne(targetEntity="SrgEsterilizacion")
     *   @ORM\JoinColumn(name="id_esterilizacion", referencedColumnName="id")
     */
    private $idEsterilizacion;



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
     * Set column5
     *
     * @param boolean $column5
     * @return SrgProcedimientoRealizado
     */
    public function setColumn5($column5)
    {
        $this->column5 = $column5;

        return $this;
    }

    /**
     * Get column5
     *
     * @return boolean 
     */
    public function getColumn5()
    {
        return $this->column5;
    }

    /**
     * Set column6
     *
     * @param string $column6
     * @return SrgProcedimientoRealizado
     */
    public function setColumn6($column6)
    {
        $this->column6 = $column6;

        return $this;
    }

    /**
     * Get column6
     *
     * @return string 
     */
    public function getColumn6()
    {
        return $this->column6;
    }

    /**
     * Set column7
     *
     * @param string $column7
     * @return SrgProcedimientoRealizado
     */
    public function setColumn7($column7)
    {
        $this->column7 = $column7;

        return $this;
    }

    /**
     * Get column7
     *
     * @return string 
     */
    public function getColumn7()
    {
        return $this->column7;
    }

    /**
     * Set idProcedimientoEsterilizacion
     *
     * @param \Minsal\GinecologiaBundle\Entity\SrgCtlProcedimientoEsteriliz $idProcedimientoEsterilizacion
     * @return SrgProcedimientoRealizado
     */
    public function setIdProcedimientoEsterilizacion(\Minsal\GinecologiaBundle\Entity\SrgCtlProcedimientoEsteriliz $idProcedimientoEsterilizacion = null)
    {
        $this->idProcedimientoEsterilizacion = $idProcedimientoEsterilizacion;

        return $this;
    }

    /**
     * Get idProcedimientoEsterilizacion
     *
     * @return \Minsal\GinecologiaBundle\Entity\SrgCtlProcedimientoEsteriliz 
     */
    public function getIdProcedimientoEsterilizacion()
    {
        return $this->idProcedimientoEsterilizacion;
    }

    /**
     * Set idEsterilizacion
     *
     * @param \Minsal\GinecologiaBundle\Entity\SrgEsterilizacion $idEsterilizacion
     * @return SrgProcedimientoRealizado
     */
    public function setIdEsterilizacion(\Minsal\GinecologiaBundle\Entity\SrgEsterilizacion $idEsterilizacion = null)
    {
        $this->idEsterilizacion = $idEsterilizacion;

        return $this;
    }

    /**
     * Get idEsterilizacion
     *
     * @return \Minsal\GinecologiaBundle\Entity\SrgEsterilizacion 
     */
    public function getIdEsterilizacion()
    {
        return $this->idEsterilizacion;
    }
}
