<?php

namespace Minsal\GinecologiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrgCtlProcedimientoEsteriliz
 *
 * @ORM\Table(name="srg_ctl_procedimiento_esteriliz")
 * @ORM\Entity
 */
class SrgCtlProcedimientoEsteriliz
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="srg_ctl_procedimiento_esteriliz_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="procedimiento_esterilizacion", type="string", length=30, nullable=false)
     */
    private $procedimientoEsterilizacion;



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
     * Set procedimientoEsterilizacion
     *
     * @param string $procedimientoEsterilizacion
     * @return SrgCtlProcedimientoEsteriliz
     */
    public function setProcedimientoEsterilizacion($procedimientoEsterilizacion)
    {
        $this->procedimientoEsterilizacion = $procedimientoEsterilizacion;

        return $this;
    }

    /**
     * Get procedimientoEsterilizacion
     *
     * @return string 
     */
    public function getProcedimientoEsterilizacion()
    {
        return $this->procedimientoEsterilizacion;
    }
}
