<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgCtlEventoObstetrico
 *
 * @ORM\Table(name="srg_ctl_evento_obstetrico")
 * @ORM\Entity
 */
class SrgCtlEventoObstetrico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_ctl_evento_obstetrico_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="evento_obstetrico", type="string", length=25, nullable=false)
     */
    private $eventoObstetrico;



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
     * Set eventoObstetrico
     *
     * @param string $eventoObstetrico
     * @return SrgCtlEventoObstetrico
     */
    public function setEventoObstetrico($eventoObstetrico)
    {
        $this->eventoObstetrico = $eventoObstetrico;

        return $this;
    }

    /**
     * Get eventoObstetrico
     *
     * @return string 
     */
    public function getEventoObstetrico()
    {
        return $this->eventoObstetrico;
    }
}
