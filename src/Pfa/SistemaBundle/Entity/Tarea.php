<?php

namespace Pfa\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarea
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tarea
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $apellidop;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $apellidom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nombre;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $dni;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $telefonoc;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $telefonof;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $sexo;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $disc1;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $disc2;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $disc3;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $disc4;


    /**
     * @ORM\Column(type="date")
     */
    protected $fecha_inicio;

     /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $precio;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $tipodepago;

    /**
     * @ORM\Column(type="integer")
     */
    protected $veces;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $email;

    /**
     * @ORM\Column(type="datetime")
     */
    private $cumple;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $lunes;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $martes;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $miercoles;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $jueves;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $viernes;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $sabado;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $domingo;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $meses;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $agente;


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
     * @return Tarea
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
     * @return Tarea
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
     * @return Tarea
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
     * @param string $dni
     *
     * @return Tarea
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set telefonoc
     *
     * @param string $telefonoc
     *
     * @return Tarea
     */
    public function setTelefonoc($telefonoc)
    {
        $this->telefonoc = $telefonoc;

        return $this;
    }

    /**
     * Get telefonoc
     *
     * @return string
     */
    public function getTelefonoc()
    {
        return $this->telefonoc;
    }

    /**
     * Set telefonof
     *
     * @param string $telefonof
     *
     * @return Tarea
     */
    public function setTelefonof($telefonof)
    {
        $this->telefonof = $telefonof;

        return $this;
    }

    /**
     * Get telefonof
     *
     * @return string
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
     * @return Tarea
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Tarea
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fecha_inicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fecha_inicio;
    }


    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return Tarea
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set tipodepago
     *
     * @param string $tipodepago
     *
     * @return Tarea
     */
    public function setTipodepago($tipodepago)
    {
        $this->tipodepago = $tipodepago;

        return $this;
    }

    /**
     * Get tipodepago
     *
     * @return string
     */
    public function getTipodepago()
    {
        return $this->tipodepago;
    }

    /**
     * Set veces
     *
     * @param integer $veces
     *
     * @return Tarea
     */
    public function setVeces($veces)
    {
        $this->veces = $veces;

        return $this;
    }

    /**
     * Get veces
     *
     * @return integer
     */
    public function getVeces()
    {
        return $this->veces;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Tarea
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
     * @return Tarea
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
     * Set lunes
     *
     * @param string $lunes
     *
     * @return Tarea
     */
    public function setLunes($lunes)
    {
        $this->lunes = $lunes;

        return $this;
    }

    /**
     * Get lunes
     *
     * @return string
     */
    public function getLunes()
    {
        return $this->lunes;
    }

    /**
     * Set martes
     *
     * @param string $martes
     *
     * @return Tarea
     */
    public function setMartes($martes)
    {
        $this->martes = $martes;

        return $this;
    }

    /**
     * Get martes
     *
     * @return string
     */
    public function getMartes()
    {
        return $this->martes;
    }

    /**
     * Set miercoles
     *
     * @param string $miercoles
     *
     * @return Tarea
     */
    public function setMiercoles($miercoles)
    {
        $this->miercoles = $miercoles;

        return $this;
    }

    /**
     * Get miercoles
     *
     * @return string
     */
    public function getMiercoles()
    {
        return $this->miercoles;
    }

    /**
     * Set jueves
     *
     * @param string $jueves
     *
     * @return Tarea
     */
    public function setJueves($jueves)
    {
        $this->jueves = $jueves;

        return $this;
    }

    /**
     * Get jueves
     *
     * @return string
     */
    public function getJueves()
    {
        return $this->jueves;
    }

    /**
     * Set viernes
     *
     * @param string $viernes
     *
     * @return Tarea
     */
    public function setViernes($viernes)
    {
        $this->viernes = $viernes;

        return $this;
    }

    /**
     * Get viernes
     *
     * @return string
     */
    public function getViernes()
    {
        return $this->viernes;
    }

    /**
     * Set sabado
     *
     * @param string $sabado
     *
     * @return Tarea
     */
    public function setSabado($sabado)
    {
        $this->sabado = $sabado;

        return $this;
    }

    /**
     * Get sabado
     *
     * @return string
     */
    public function getSabado()
    {
        return $this->sabado;
    }

    /**
     * Set domingo
     *
     * @param string $domingo
     *
     * @return Tarea
     */
    public function setDomingo($domingo)
    {
        $this->domingo = $domingo;

        return $this;
    }

    /**
     * Get domingo
     *
     * @return string
     */
    public function getDomingo()
    {
        return $this->domingo;
    }

 

    /**
     * Set fechaFinal
     *
     * @param string $fechaFinal
     *
     * @return Tarea
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fecha_final = $fechaFinal;

        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return string
     */
    public function getFechaFinal()
    {
        return $this->fecha_final;
    }

    /**
     * Set meses
     *
     * @param string $meses
     *
     * @return Tarea
     */
    public function setMeses($meses)
    {
        $this->meses = $meses;

        return $this;
    }

    /**
     * Get meses
     *
     * @return string
     */
    public function getMeses()
    {
        return $this->meses;
    }

    /**
     * Set disc1
     *
     * @param string $disc1
     *
     * @return Tarea
     */
    public function setDisc1($disc1)
    {
        $this->disc1 = $disc1;

        return $this;
    }

    /**
     * Get disc1
     *
     * @return string
     */
    public function getDisc1()
    {
        return $this->disc1;
    }

    /**
     * Set disc2
     *
     * @param string $disc2
     *
     * @return Tarea
     */
    public function setDisc2($disc2)
    {
        $this->disc2 = $disc2;

        return $this;
    }

    /**
     * Get disc2
     *
     * @return string
     */
    public function getDisc2()
    {
        return $this->disc2;
    }

    /**
     * Set disc3
     *
     * @param string $disc3
     *
     * @return Tarea
     */
    public function setDisc3($disc3)
    {
        $this->disc3 = $disc3;

        return $this;
    }

    /**
     * Get disc3
     *
     * @return string
     */
    public function getDisc3()
    {
        return $this->disc3;
    }

    /**
     * Set disc4
     *
     * @param string $disc4
     *
     * @return Tarea
     */
    public function setDisc4($disc4)
    {
        $this->disc4 = $disc4;

        return $this;
    }

    /**
     * Get disc4
     *
     * @return string
     */
    public function getDisc4()
    {
        return $this->disc4;
    }

    /**
     * Set agente
     *
     * @param string $agente
     *
     * @return Tarea
     */
    public function setAgente($agente)
    {
        $this->agente = $agente;

        return $this;
    }

    /**
     * Get agente
     *
     * @return string
     */
    public function getAgente()
    {
        return $this->agente;
    }
}
