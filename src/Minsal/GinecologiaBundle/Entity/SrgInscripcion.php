<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgInscripcion
 *
 * @ORM\Table(name="srg_inscripcion", indexes={@ORM\Index(name="IDX_E45F5BD30F3FEEA", columns={"id_consulta_gine_pf"})})
 * @ORM\Entity
 */
class SrgInscripcion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_inscripcion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="inscripcion_primera_vez", type="boolean", nullable=true)
     */
    private $inscripcionPrimeraVez;

    /**
     * @var boolean
     *
     * @ORM\Column(name="primera_vez_institucion", type="boolean", nullable=true)
     */
    private $primeraVezInstitucion;

    /**
     * @var string
     *
     * @ORM\Column(name="anyos_escolaridad", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $anyosEscolaridad;

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
     * Set inscripcionPrimeraVez
     *
     * @param boolean $inscripcionPrimeraVez
     * @return SrgInscripcion
     */
    public function setInscripcionPrimeraVez($inscripcionPrimeraVez)
    {
        $this->inscripcionPrimeraVez = $inscripcionPrimeraVez;

        return $this;
    }

    /**
     * Get inscripcionPrimeraVez
     *
     * @return boolean 
     */
    public function getInscripcionPrimeraVez()
    {
        return $this->inscripcionPrimeraVez;
    }

    /**
     * Set primeraVezInstitucion
     *
     * @param boolean $primeraVezInstitucion
     * @return SrgInscripcion
     */
    public function setPrimeraVezInstitucion($primeraVezInstitucion)
    {
        $this->primeraVezInstitucion = $primeraVezInstitucion;

        return $this;
    }

    /**
     * Get primeraVezInstitucion
     *
     * @return boolean 
     */
    public function getPrimeraVezInstitucion()
    {
        return $this->primeraVezInstitucion;
    }

    /**
     * Set anyosEscolaridad
     *
     * @param string $anyosEscolaridad
     * @return SrgInscripcion
     */
    public function setAnyosEscolaridad($anyosEscolaridad)
    {
        $this->anyosEscolaridad = $anyosEscolaridad;

        return $this;
    }

    /**
     * Get anyosEscolaridad
     *
     * @return string 
     */
    public function getAnyosEscolaridad()
    {
        return $this->anyosEscolaridad;
    }

    /**
     * Set idConsultaGinePf
     *
     * @param \Minsal\GinecologiaBundle\Entity\SrgConsultaGinePf $idConsultaGinePf
     * @return SrgInscripcion
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
