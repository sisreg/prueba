<?php

namespace Minsal\LaboratorioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntAreaModEstab
 *
 * @ORM\Table(name="mnt_area_mod_estab")
 * @ORM\Entity
 */
class MntAreaModEstab
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_area_mod_estab_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \CtlAreaAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAreaAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area_atencion", referencedColumnName="id")
     * })
     */
    private $idAreaAtencion;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;

    /**
     * @var \MntModalidadEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="MntModalidadEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modalidad_estab", referencedColumnName="id")
     * })
     */
    private $idModalidadEstab;



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
     * Set idAreaAtencion
     *
     * @param \Minsal\LaboratorioBundle\Entity\CtlAreaAtencion $idAreaAtencion
     * @return MntAreaModEstab
     */
    public function setIdAreaAtencion(\Minsal\LaboratorioBundle\Entity\CtlAreaAtencion $idAreaAtencion = null)
    {
        $this->idAreaAtencion = $idAreaAtencion;
    
        return $this;
    }

    /**
     * Get idAreaAtencion
     *
     * @return \Minsal\LaboratorioBundle\Entity\CtlAreaAtencion 
     */
    public function getIdAreaAtencion()
    {
        return $this->idAreaAtencion;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\LaboratorioBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return MntAreaModEstab
     */
    public function setIdEstablecimiento(\Minsal\LaboratorioBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;
    
        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\LaboratorioBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Set idModalidadEstab
     *
     * @param \Minsal\LaboratorioBundle\Entity\MntModalidadEstablecimiento $idModalidadEstab
     * @return MntAreaModEstab
     */
    public function setIdModalidadEstab(\Minsal\LaboratorioBundle\Entity\MntModalidadEstablecimiento $idModalidadEstab = null)
    {
        $this->idModalidadEstab = $idModalidadEstab;
    
        return $this;
    }

    /**
     * Get idModalidadEstab
     *
     * @return \Minsal\LaboratorioBundle\Entity\MntModalidadEstablecimiento 
     */
    public function getIdModalidadEstab()
    {
        return $this->idModalidadEstab;
    }
}