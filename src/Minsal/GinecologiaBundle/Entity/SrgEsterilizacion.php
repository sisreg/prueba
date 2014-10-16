<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgEsterilizacion
 *
 * @ORM\Table(name="srg_esterilizacion", indexes={@ORM\Index(name="IDX_505CC6C630F3FEEA", columns={"id_consulta_gine_pf"})})
 * @ORM\Entity
 */
class SrgEsterilizacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_esterilizacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_responsable_esterilizaci", type="string", length=80, nullable=true)
     */
    private $nombreResponsableEsterilizaci;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_esterilizacion", type="date", nullable=true)
     */
    private $fechaEsterilizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones_responsable_ester", type="text", nullable=true)
     */
    private $observacionesResponsableEster;

    /**
     * @var \SrgConsultaGinePf
     *
     * @ORM\OneToOne(targetEntity="SrgConsultaGinePf")
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
     * Set nombreResponsableEsterilizaci
     *
     * @param string $nombreResponsableEsterilizaci
     * @return SrgEsterilizacion
     */
    public function setNombreResponsableEsterilizaci($nombreResponsableEsterilizaci)
    {
        $this->nombreResponsableEsterilizaci = $nombreResponsableEsterilizaci;

        return $this;
    }

    /**
     * Get nombreResponsableEsterilizaci
     *
     * @return string 
     */
    public function getNombreResponsableEsterilizaci()
    {
        return $this->nombreResponsableEsterilizaci;
    }

    /**
     * Set fechaEsterilizacion
     *
     * @param \DateTime $fechaEsterilizacion
     * @return SrgEsterilizacion
     */
    public function setFechaEsterilizacion($fechaEsterilizacion)
    {
        $this->fechaEsterilizacion = $fechaEsterilizacion;

        return $this;
    }

    /**
     * Get fechaEsterilizacion
     *
     * @return \DateTime 
     */
    public function getFechaEsterilizacion()
    {
        return $this->fechaEsterilizacion;
    }

    /**
     * Set observacionesResponsableEster
     *
     * @param string $observacionesResponsableEster
     * @return SrgEsterilizacion
     */
    public function setObservacionesResponsableEster($observacionesResponsableEster)
    {
        $this->observacionesResponsableEster = $observacionesResponsableEster;

        return $this;
    }

    /**
     * Get observacionesResponsableEster
     *
     * @return string 
     */
    public function getObservacionesResponsableEster()
    {
        return $this->observacionesResponsableEster;
    }

    /**
     * Set idConsultaGinePf
     *
     * @param \Minsal\GinecologiaBundle\Entity\SrgConsultaGinePf $idConsultaGinePf
     * @return SrgEsterilizacion
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
