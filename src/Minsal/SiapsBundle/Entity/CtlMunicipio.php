<?php

namespace Minsal\SiapsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlMunicipio
 *
 * @ORM\Table(name="ctl_municipio")
 * @ORM\Entity
 */
class CtlMunicipio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_municipio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_digestyc", type="string", length=5, nullable=true)
     */
    private $codigoDigestyc;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviatura", type="string", length=5, nullable=true)
     */
    private $abreviatura;

    /**
     * @var \CtlDepartamento
     *
     * @ORM\ManyToOne(targetEntity="CtlDepartamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_departamento", referencedColumnName="id")
     * })
     */
    private $idDepartamento;



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
     * @return CtlMunicipio
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
     * Set codigoDigestyc
     *
     * @param string $codigoDigestyc
     * @return CtlMunicipio
     */
    public function setCodigoDigestyc($codigoDigestyc)
    {
        $this->codigoDigestyc = $codigoDigestyc;
    
        return $this;
    }

    /**
     * Get codigoDigestyc
     *
     * @return string 
     */
    public function getCodigoDigestyc()
    {
        return $this->codigoDigestyc;
    }

    /**
     * Set abreviatura
     *
     * @param string $abreviatura
     * @return CtlMunicipio
     */
    public function setAbreviatura($abreviatura)
    {
        $this->abreviatura = $abreviatura;
    
        return $this;
    }

    /**
     * Get abreviatura
     *
     * @return string 
     */
    public function getAbreviatura()
    {
        return $this->abreviatura;
    }

    /**
     * Set idDepartamento
     *
     * @param \Minsal\SiapsBundle\Entity\CtlDepartamento $idDepartamento
     * @return CtlMunicipio
     */
    public function setIdDepartamento(\Minsal\SiapsBundle\Entity\CtlDepartamento $idDepartamento = null)
    {
        $this->idDepartamento = $idDepartamento;
    
        return $this;
    }

    /**
     * Get idDepartamento
     *
     * @return \Minsal\SiapsBundle\Entity\CtlDepartamento 
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }
}