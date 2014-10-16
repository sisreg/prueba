<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgCtlCriterioElegibilidad
 *
 * @ORM\Table(name="srg_ctl_criterio_elegibilidad")
 * @ORM\Entity
 */
class SrgCtlCriterioElegibilidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_ctl_criterio_elegibilidad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="criterio", type="string", length=100, nullable=false)
     */
    private $criterio;



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
     * Set criterio
     *
     * @param string $criterio
     * @return SrgCtlCriterioElegibilidad
     */
    public function setCriterio($criterio)
    {
        $this->criterio = $criterio;

        return $this;
    }

    /**
     * Get criterio
     *
     * @return string 
     */
    public function getCriterio()
    {
        return $this->criterio;
    }
}
