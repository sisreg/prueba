<?php

namespace Minsal\SiapsBundle\Entity;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\GroupInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user_user")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \Minsal\SiapsBundle\Entity\CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="Minsal\SiapsBundle\Entity\CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    protected $idEstablecimiento;

    /**
     * @var \Minsal\SiapsBundle\Entity\MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="Minsal\SiapsBundle\Entity\MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empleado", referencedColumnName="id")
     * })
     */
    protected $idEmpleado;
    
      /**
     * @var \Minsal\SiapsBundle\Entity\MntModalidadEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="Minsal\SiapsBundle\Entity\MntModalidadEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modalidad_estab", referencedColumnName="id")
     * })
     */
    protected $idModalidadEstab;
    
      /**
     * @var \Minsal\SiapsBundle\Entity\MntAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="Minsal\SiapsBundle\Entity\MntAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area_mod_estab", referencedColumnName="id")
     * })
     */
    protected $idAreaModEstab;
    
      /**
     * @var \Minsal\SiapsBundle\Entity\MntAtenAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="Minsal\SiapsBundle\Entity\MntAtenAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_aten_area_mod_estab", referencedColumnName="id")
     * })
     */
    protected $idAtenAreaModEstab;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\SiapsBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return User
     */
    public function setIdEstablecimiento(\Minsal\SiapsBundle\Entity\CtlEstablecimiento $idEstablecimiento = null) {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\SiapsBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento() {
        return $this->idEstablecimiento;
    }

    /* Método __toString */

    public function __toString() {
        return $this->firstname . ' ' . $this->lastname ? : '';
    }

     /**
     * @var \Doctrine\Common\Collections\Collection
     * @Assert\NotBlank()
     */
    protected $groups;

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
    }
   
    /**
     * Add groups
     *
     * @param GroupInterface $groups
     * @return User
     */
    public function addGroup(GroupInterface $groups) {
        $this->groups[] = $groups;

        return $this;
    }

    /**
     * Remove groups
     *
     * @param GroupInterface $groups
     */
    public function removeGroup(GroupInterface $groups) {
        $this->groups->removeElement($groups);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroups() {
        return $this->groups;
    }


    /**
     * Set idEmpleado
     *
     * @param \Minsal\SiapsBundle\Entity\MntEmpleado $idEmpleado
     * @return User
     */
    public function setIdEmpleado(\Minsal\SiapsBundle\Entity\MntEmpleado $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \Minsal\SiapsBundle\Entity\MntEmpleado 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set idModalidadEstab
     *
     * @param \Minsal\SiapsBundle\Entity\MntModalidadEstablecimiento $idModalidadEstab
     * @return User
     */
    public function setIdModalidadEstab(\Minsal\SiapsBundle\Entity\MntModalidadEstablecimiento $idModalidadEstab = null)
    {
        $this->idModalidadEstab = $idModalidadEstab;

        return $this;
    }

    /**
     * Get idModalidadEstab
     *
     * @return \Minsal\SiapsBundle\Entity\MntModalidadEstablecimiento 
     */
    public function getIdModalidadEstab()
    {
        return $this->idModalidadEstab;
    }

    /**
     * Set idAreaModEstab
     *
     * @param \Minsal\SiapsBundle\Entity\MntAreaModEstab $idAreaModEstab
     * @return User
     */
    public function setIdAreaModEstab(\Minsal\SiapsBundle\Entity\MntAreaModEstab $idAreaModEstab = null)
    {
        $this->idAreaModEstab = $idAreaModEstab;

        return $this;
    }

    /**
     * Get idAreaModEstab
     *
     * @return \Minsal\SiapsBundle\Entity\MntAreaModEstab 
     */
    public function getIdAreaModEstab()
    {
        return $this->idAreaModEstab;
    }

    /**
     * Set idAtenAreaModEstab
     *
     * @param \Minsal\SiapsBundle\Entity\MntAtenAreaModEstab $idAtenAreaModEstab
     * @return User
     */
    public function setIdAtenAreaModEstab(\Minsal\SiapsBundle\Entity\MntAtenAreaModEstab $idAtenAreaModEstab = null)
    {
        $this->idAtenAreaModEstab = $idAtenAreaModEstab;

        return $this;
    }

    /**
     * Get idAtenAreaModEstab
     *
     * @return \Minsal\SiapsBundle\Entity\MntAtenAreaModEstab 
     */
    public function getIdAtenAreaModEstab()
    {
        return $this->idAtenAreaModEstab;
    }
}
