<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgCtlMicroorganismo
 *
 * @ORM\Table(name="srg_ctl_microorganismo")
 * @ORM\Entity
 */
class SrgCtlMicroorganismo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_ctl_microorganismo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_microorganismo", type="string", length=100, nullable=false)
     */
    private $tipoMicroorganismo;



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
     * Set tipoMicroorganismo
     *
     * @param string $tipoMicroorganismo
     * @return SrgCtlMicroorganismo
     */
    public function setTipoMicroorganismo($tipoMicroorganismo)
    {
        $this->tipoMicroorganismo = $tipoMicroorganismo;

        return $this;
    }

    /**
     * Get tipoMicroorganismo
     *
     * @return string 
     */
    public function getTipoMicroorganismo()
    {
        return $this->tipoMicroorganismo;
    }
}
