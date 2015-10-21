<?php

namespace Pfa\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumno
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Alumno
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $apellidop;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $apellidom;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $nombre;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $dni;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $email;

    /**
     * @ORM\Column(type="datetime")
     */
    private $cumple;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $telefonoc;

    /**
     * @ORM\Column(type="integer")
     */
    protected $telefonof;

    /**
     * @ORM\Column(type="string", length=1)
     */
    protected $sexo;

    /**
     * @ORM\Column(type="date")
     */
    private $fechafinal;


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
     * Set apellidop
     *
     * @param string $apellidop
     *
     * @return Alumno
     */
    public function setApellidop($apellidop)
    {
        $this->apellidop = $apellidop;

        return $this;
    }

    /**
     * Get apellidop
     *
     * @return string
     */
    public function getApellidop()
    {
        return $this->apellidop;
    }

    /**
     * Set apellidom
     *
     * @param string $apellidom
     *
     * @return Alumno
     */
    public function setApellidom($apellidom)
    {
        $this->apellidom = $apellidom;

        return $this;
    }

    /**
     * Get apellidom
     *
     * @return string
     */
    public function getApellidom()
    {
        return $this->apellidom;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Alumno
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
     * Set dni
     *
     * @param integer $dni
     *
     * @return Alumno
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return integer
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Alumno
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set cumple
     *
     * @param \DateTime $cumple
     *
     * @return Alumno
     */
    public function setCumple($cumple)
    {
        $this->cumple = $cumple;

        return $this;
    }

    /**
     * Get cumple
     *
     * @return \DateTime
     */
    public function getCumple()
    {
        return $this->cumple;
    }

    /**
     * Set telefonoc
     *
     * @param integer $telefonoc
     *
     * @return Alumno
     */
    public function setTelefonoc($telefonoc)
    {
        $this->telefonoc = $telefonoc;

        return $this;
    }

    /**
     * Get telefonoc
     *
     * @return integer
     */
    public function getTelefonoc()
    {
        return $this->telefonoc;
    }

    /**
     * Set telefonof
     *
     * @param integer $telefonof
     *
     * @return Alumno
     */
    public function setTelefonof($telefonof)
    {
        $this->telefonof = $telefonof;

        return $this;
    }

    /**
     * Get telefonof
     *
     * @return integer
     */
    public function getTelefonof()
    {
        return $this->telefonof;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Alumno
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set fechafinal
     *
     * @param \DateTime $fechafinal
     *
     * @return Alumno
     */
    public function setFechafinal($fechafinal)
    {
        $this->fechafinal = $fechafinal;

        return $this;
    }

    /**
     * Get fechafinal
     *
     * @return \DateTime
     */
    public function getFechafinal()
    {
        return $this->fechafinal;
    }
}
