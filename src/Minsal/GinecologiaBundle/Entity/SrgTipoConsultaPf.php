<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgTipoConsultaPf
 *
 * @ORM\Table(name="srg_tipo_consulta_pf")
 * @ORM\Entity
 */
class SrgTipoConsultaPf
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_tipo_consulta_pf_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_consulta_pf", type="string", length=20, nullable=true)
     */
    private $tipoConsultaPf;



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
     * Set tipoConsultaPf
     *
     * @param string $tipoConsultaPf
     * @return SrgTipoConsultaPf
     */
    public function setTipoConsultaPf($tipoConsultaPf)
    {
        $this->tipoConsultaPf = $tipoConsultaPf;

        return $this;
    }

    /**
     * Get tipoConsultaPf
     *
     * @return string 
     */
    public function getTipoConsultaPf()
    {
        return $this->tipoConsultaPf;
    }
}
