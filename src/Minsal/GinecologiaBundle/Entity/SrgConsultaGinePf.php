<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgConsultaGinePf
 *
 * @ORM\Table(name="srg_consulta_gine_pf", indexes={@ORM\Index(name="IDX_D676C7BE643FF516", columns={"id_historial_clinico"})})
 * @ORM\Entity
 */
class SrgConsultaGinePf
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_consulta_gine_pf_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_consulta", type="date", nullable=false)
     */
    private $fechaConsulta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_inicio", type="time", nullable=true)
     */
    private $horaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_fin", type="time", nullable=true)
     */
    private $horaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_consulta", type="string", length=1, nullable=false)
     */
    private $estadoConsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="especialidad_consulta", type="string", length=2, nullable=false)
     */
    private $especialidadConsulta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="referencia_recibida", type="boolean", nullable=true)
     */
    private $referenciaRecibida;

    /**
     * @var boolean
     *
     * @ORM\Column(name="retorno_recibido", type="boolean", nullable=true)
     */
    private $retornoRecibido;

    /**
     * @var \SecHistorialClinico
     *
     * @ORM\OneToOne(targetEntity="Minsal\SiapsBundle\Entity\SecHistorialClinico")
     *   @ORM\JoinColumn(name="id_historial_clinico", referencedColumnName="id")
     */
    private $idHistorialClinico;



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
     * Set fechaConsulta
     *
     * @param \DateTime $fechaConsulta
     * @return SrgConsultaGinePf
     */
    public function setFechaConsulta($fechaConsulta)
    {
        $this->fechaConsulta = $fechaConsulta;

        return $this;
    }

    /**
     * Get fechaConsulta
     *
     * @return \DateTime 
     */
    public function getFechaConsulta()
    {
        return $this->fechaConsulta;
    }

    /**
     * Set horaInicio
     *
     * @param \DateTime $horaInicio
     * @return SrgConsultaGinePf
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return \DateTime 
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * Set horaFin
     *
     * @param \DateTime $horaFin
     * @return SrgConsultaGinePf
     */
    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;

        return $this;
    }

    /**
     * Get horaFin
     *
     * @return \DateTime 
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }

    /**
     * Set estadoConsulta
     *
     * @param string $estadoConsulta
     * @return SrgConsultaGinePf
     */
    public function setEstadoConsulta($estadoConsulta)
    {
        $this->estadoConsulta = $estadoConsulta;

        return $this;
    }

    /**
     * Get estadoConsulta
     *
     * @return string 
     */
    public function getEstadoConsulta()
    {
        return $this->estadoConsulta;
    }

    /**
     * Set especialidadConsulta
     *
     * @param string $especialidadConsulta
     * @return SrgConsultaGinePf
     */
    public function setEspecialidadConsulta($especialidadConsulta)
    {
        $this->especialidadConsulta = $especialidadConsulta;

        return $this;
    }

    /**
     * Get especialidadConsulta
     *
     * @return string 
     */
    public function getEspecialidadConsulta()
    {
        return $this->especialidadConsulta;
    }

    /**
     * Set referenciaRecibida
     *
     * @param boolean $referenciaRecibida
     * @return SrgConsultaGinePf
     */
    public function setReferenciaRecibida($referenciaRecibida)
    {
        $this->referenciaRecibida = $referenciaRecibida;

        return $this;
    }

    /**
     * Get referenciaRecibida
     *
     * @return boolean 
     */
    public function getReferenciaRecibida()
    {
        return $this->referenciaRecibida;
    }

    /**
     * Set retornoRecibido
     *
     * @param boolean $retornoRecibido
     * @return SrgConsultaGinePf
     */
    public function setRetornoRecibido($retornoRecibido)
    {
        $this->retornoRecibido = $retornoRecibido;

        return $this;
    }

    /**
     * Get retornoRecibido
     *
     * @return boolean 
     */
    public function getRetornoRecibido()
    {
        return $this->retornoRecibido;
    }

    /**
     * Set idSecHistorialClinico
     *
     * @param \Minsal\SiapsBundle\Entity\SecHistorialClinico $idHistorialClinico
     * @return SrgConsultaGinePf
     */
    public function setIdHistorialClinico(\Minsal\SiapsBundle\Entity\SecHistorialClinico $idHistorialClinico = null)
    {
        $this->idHistorialClinico = $idHistorialClinico;

        return $this;
    }

    /**
     * Get idHistorialClinico
     *
     * @return \Minsal\SiapsBundle\Entity\SecHistorialClinico 
     */
    public function getIdHistorialClinico()
    {
        return $this->idHistorialClinico;
    }

}
