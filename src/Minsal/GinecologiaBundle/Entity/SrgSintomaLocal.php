<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgSintomaLocal
 *
 * @ORM\Table(name="srg_sintoma_local", indexes={@ORM\Index(name="idx_14bb60348cf23c1f", columns={"id_examen_mama"})})
 * @ORM\Entity
 */
class SrgSintomaLocal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_sintoma_local_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_primer_sintoma", type="date", nullable=true)
     */
    private $fechaPrimerSintoma;

    /**
     * @var string
     *
     * @ORM\Column(name="otro", type="string", length=50, nullable=true)
     */
    private $otro;

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
     * Set fechaPrimerSintoma
     *
     * @param \DateTime $fechaPrimerSintoma
     * @return SrgSintomaLocal
     */
    public function setFechaPrimerSintoma($fechaPrimerSintoma)
    {
        $this->fechaPrimerSintoma = $fechaPrimerSintoma;

        return $this;
    }

    /**
     * Get fechaPrimerSintoma
     *
     * @return \DateTime 
     */
    public function getFechaPrimerSintoma()
    {
        return $this->fechaPrimerSintoma;
    }

    /**
     * Set otro
     *
     * @param string $otro
     * @return SrgSintomaLocal
     */
    public function setOtro($otro)
    {
        $this->otro = $otro;

        return $this;
    }

    /**
     * Get otro
     *
     * @return string 
     */
    public function getOtro()
    {
        return $this->otro;
    }

    /**
     * Set idExamenMama
     *
     * @param \Minsal\GinecologiaBundle\Entity\SrgExamenMama $idExamenMama
     * @return SrgSintomaLocal
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
