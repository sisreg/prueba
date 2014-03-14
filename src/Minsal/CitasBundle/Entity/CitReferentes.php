<?php

namespace Minsal\CitasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CitReferentes
 *
 * @ORM\Table(name="cit_referentes")
 * @ORM\Entity
 */
class CitReferentes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idreferente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cit_referentes_idreferente_seq", allocationSize=1, initialValue=1)
     */
    private $idreferente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablecimiento", type="integer", nullable=true)
     */
    private $idestablecimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="referente", type="string", length=100, nullable=true)
     */
    private $referente;

    /**
     * @var string
     *
     * @ORM\Column(name="tel1", type="string", length=30, nullable=true)
     */
    private $tel1;

    /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="string", length=30, nullable=true)
     */
    private $tel2;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado;


}
