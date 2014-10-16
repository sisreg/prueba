<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgCtlMetodoPlanificacion
 *
 * @ORM\Table(name="srg_ctl_metodo_planificacion")
 * @ORM\Entity
 */
class SrgCtlMetodoPlanificacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_ctl_metodo_planificacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_metodo", type="string", length=60, nullable=false)
     */
    private $tipoMetodo;



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
     * Set tipoMetodo
     *
     * @param string $tipoMetodo
     * @return SrgCtlMetodoPlanificacion
     */
    public function setTipoMetodo($tipoMetodo)
    {
        $this->tipoMetodo = $tipoMetodo;

        return $this;
    }

    /**
     * Get tipoMetodo
     *
     * @return string 
     */
    public function getTipoMetodo()
    {
        return $this->tipoMetodo;
    }
}
