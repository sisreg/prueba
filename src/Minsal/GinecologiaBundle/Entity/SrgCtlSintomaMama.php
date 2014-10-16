<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgCtlSintomaMama
 *
 * @ORM\Table(name="srg_ctl_sintoma_mama")
 * @ORM\Entity
 */
class SrgCtlSintomaMama
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_ctl_sintoma_mama_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sintoma", type="string", length=50, nullable=false)
     */
    private $sintoma;



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
     * Set sintoma
     *
     * @param string $sintoma
     * @return SrgCtlSintomaMama
     */
    public function setSintoma($sintoma)
    {
        $this->sintoma = $sintoma;

        return $this;
    }

    /**
     * Get sintoma
     *
     * @return string 
     */
    public function getSintoma()
    {
        return $this->sintoma;
    }
}
