<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgResultadoExploraFisica
 *
 * @ORM\Table(name="srg_resultado_explora_fisica", indexes={@ORM\Index(name="IDX_F10493621B531ED9", columns={"id_resultado_examen_fisico"}), @ORM\Index(name="IDX_F10493628CF23C1F", columns={"id_examen_mama"})})
 * @ORM\Entity
 */
class SrgResultadoExploraFisica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_resultado_explora_fisica_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_especifico_resultado", type="string", length=20, nullable=true)
     */
    private $detalleEspecificoResultado;

    /**
     * @var \SrgCtlResultadoExamenFisico
     *
     * @ORM\ManyToOne(targetEntity="SrgCtlResultadoExamenFisico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_resultado_examen_fisico", referencedColumnName="id")
     * })
     */
    private $idResultadoExamenFisico;

    /**
     * @var \SrgExamenMama
     *
     * @ORM\OneToOne(targetEntity="SrgExamenMama")
     *   @ORM\JoinColumn(name="id_examen_mama", referencedColumnName="id")
     */
    private $idExamenMama;



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
     * Set detalleEspecificoResultado
     *
     * @param string $detalleEspecificoResultado
     * @return SrgResultadoExploraFisica
     */
    public function setDetalleEspecificoResultado($detalleEspecificoResultado)
    {
        $this->detalleEspecificoResultado = $detalleEspecificoResultado;

        return $this;
    }

    /**
     * Get detalleEspecificoResultado
     *
     * @return string 
     */
    public function getDetalleEspecificoResultado()
    {
        return $this->detalleEspecificoResultado;
    }

    /**
     * Set idResultadoExamenFisico
     *
     * @param \Minsal\GinecologiaBundle\Entity\SrgCtlResultadoExamenFisico $idResultadoExamenFisico
     * @return SrgResultadoExploraFisica
     */
    public function setIdResultadoExamenFisico(\Minsal\GinecologiaBundle\Entity\SrgCtlResultadoExamenFisico $idResultadoExamenFisico = null)
    {
        $this->idResultadoExamenFisico = $idResultadoExamenFisico;

        return $this;
    }

    /**
     * Get idResultadoExamenFisico
     *
     * @return \Minsal\GinecologiaBundle\Entity\SrgCtlResultadoExamenFisico 
     */
    public function getIdResultadoExamenFisico()
    {
        return $this->idResultadoExamenFisico;
    }

    /**
     * Set idExamenMama
     *
     * @param \Minsal\GinecologiaBundle\Entity\SrgExamenMama $idExamenMama
     * @return SrgResultadoExploraFisica
     */
    public function setIdExamenMama(\Minsal\GinecologiaBundle\Entity\SrgExamenMama $idExamenMama = null)
    {
        $this->idExamenMama = $idExamenMama;

        return $this;
    }

    /**
     * Get idExamenMama
     *
     * @return \Minsal\GinecologiaBundle\Entity\SrgExamenMama 
     */
    public function getIdExamenMama()
    {
        return $this->idExamenMama;
    }
}
