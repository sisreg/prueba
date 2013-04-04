<?php

namespace Minsal\SiapsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntServicioEstab
 *
 * @ORM\Table(name="mnt_servicio_estab")
 * @ORM\Entity
 */
class MntServicioEstab
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_servicio_estab_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=80, nullable=false)
     */
    private $nombre;

    /**
     * @var \MntEspAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntEspAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_esp_area_mod_estab", referencedColumnName="id")
     * })
     */
    private $idEspAreaModEstab;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return MntServicioEstab
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set idEspAreaModEstab
     *
     * @param \Minsal\SiapsBundle\Entity\MntEspAreaModEstab $idEspAreaModEstab
     * @return MntServicioEstab
     */
    public function setIdEspAreaModEstab(\Minsal\SiapsBundle\Entity\MntEspAreaModEstab $idEspAreaModEstab = null)
    {
        $this->idEspAreaModEstab = $idEspAreaModEstab;
    
        return $this;
    }

    /**
     * Get idEspAreaModEstab
     *
     * @return \Minsal\SiapsBundle\Entity\MntEspAreaModEstab 
     */
    public function getIdEspAreaModEstab()
    {
        return $this->idEspAreaModEstab;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\SiapsBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return MntServicioEstab
     */
    public function setIdEstablecimiento(\Minsal\SiapsBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;
    
        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\SiapsBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }
}