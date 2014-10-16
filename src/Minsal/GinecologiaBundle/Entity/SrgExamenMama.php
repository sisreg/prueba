<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgExamenMama
 *
 * @ORM\Table(name="srg_examen_mama", indexes={@ORM\Index(name="IDX_9FB9DA530F3FEEA", columns={"id_consulta_gine_pf"})})
 * @ORM\Entity
 */
class SrgExamenMama
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_examen_mama_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * Set idConsultaGinePf
     *
     * @param \Minsal\GinecologiaBundle\Entity\SrgConsultaGinePf $idConsultaGinePf
     * @return SrgExamenMama
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
