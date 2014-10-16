<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgCtlHallazgoMama
 *
 * @ORM\Table(name="srg_ctl_hallazgo_mama")
 * @ORM\Entity
 */
class SrgCtlHallazgoMama
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_ctl_hallazgo_mama_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="hallazo_mama", type="string", length=60, nullable=false)
     */
    private $hallazoMama;



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
     * Set hallazoMama
     *
     * @param string $hallazoMama
     * @return SrgCtlHallazgoMama
     */
    public function setHallazoMama($hallazoMama)
    {
        $this->hallazoMama = $hallazoMama;

        return $this;
    }

    /**
     * Get hallazoMama
     *
     * @return string 
     */
    public function getHallazoMama()
    {
        return $this->hallazoMama;
    }
}
