<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgExamenCervicoVaginal
 *
 * @ORM\Table(name="srg_examen_cervico_vaginal", indexes={@ORM\Index(name="IDX_8E2E017530F3FEEA", columns={"id_consulta_gine_pf"})})
 * @ORM\Entity
 */
class SrgExamenCervicoVaginal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_examen_cervico_vaginal_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=200, nullable=true)
     */
    private $observaciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_recepcion", type="date", nullable=true)
     */
    private $fechaRecepcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_reporte", type="date", nullable=true)
     */
    private $fechaReporte;

    /**
     * @var \SrgConsultaGinePf
     *
     * @ORM\ManyToOne(targetEntity="SrgConsultaGinePf")
     *   @ORM\JoinColumn(name="id_consulta_gine_pf", referencedColumnName="id")
     */
    private $idConsultaGinePf;



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
     * Set observaciones
     *
     * @param string $observaciones
     * @return SrgExamenCervicoVaginal
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set fechaRecepcion
     *
     * @param \DateTime $fechaRecepcion
     * @return SrgExamenCervicoVaginal
     */
    public function setFechaRecepcion($fechaRecepcion)
    {
        $this->fechaRecepcion = $fechaRecepcion;

        return $this;
    }

    /**
     * Get fechaRecepcion
     *
     * @return \DateTime 
     */
    public function getFechaRecepcion()
    {
        return $this->fechaRecepcion;
    }

    /**
     * Set fechaReporte
     *
     * @param \DateTime $fechaReporte
     * @return SrgExamenCervicoVaginal
     */
    public function setFechaReporte($fechaReporte)
    {
        $this->fechaReporte = $fechaReporte;

        return $this;
    }

    /**
     * Get fechaReporte
     *
     * @return \DateTime 
     */
    public function getFechaReporte()
    {
        return $this->fechaReporte;
    }

    /**
     * Set idConsultaGinePf
     *
     * @param \Minsal\GinecologiaBundle\Entity\SrgConsultaGinePf $idConsultaGinePf
     * @return SrgExamenCervicoVaginal
     */
    public function setIdConsultaGinePf(\Minsal\GinecologiaBundle\Entity\SrgConsultaGinePf $idConsultaGinePf = null)
    {
        $this->idConsultaGinePf = $idConsultaGinePf;

        return $this;
    }

    /**
     * Get idConsultaGinePf
     *
     * @return \Minsal\GinecologiaBundle\Entity\SrgConsultaGinePf 
     */
    public function getIdConsultaGinePf()
    {
        return $this->idConsultaGinePf;
    }
}
