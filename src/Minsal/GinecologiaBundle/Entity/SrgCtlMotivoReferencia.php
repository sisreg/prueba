<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgCtlMotivoReferencia
 *
 * @ORM\Table(name="srg_ctl_motivo_referencia")
 * @ORM\Entity
 */
class SrgCtlMotivoReferencia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_ctl_motivo_referencia_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo_referencia", type="string", length=30, nullable=false)
     */
    private $motivoReferencia;



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
     * Set motivoReferencia
     *
     * @param string $motivoReferencia
     * @return SrgCtlMotivoReferencia
     */
    public function setMotivoReferencia($motivoReferencia)
    {
        $this->motivoReferencia = $motivoReferencia;

        return $this;
    }

    /**
     * Get motivoReferencia
     *
     * @return string 
     */
    public function getMotivoReferencia()
    {
        return $this->motivoReferencia;
    }
}
