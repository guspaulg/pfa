<?php

namespace Pfa\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarea2
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tarea2
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
     * Set disc1
     *
     * @param string $disc1
     *
     * @return Tarea2
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
     * @return Tarea2
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
     * @return Tarea2
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
     * @return Tarea2
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Tarea2
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
     * @return Tarea2
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
     * @return Tarea2
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
     * @return Tarea2
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
     * @return Tarea2
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
     * @return Tarea2
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
     * @return Tarea2
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
     * @return Tarea2
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
     * @return Tarea2
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
     * @return Tarea2
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
     * @return Tarea2
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
     * @return Tarea2
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
     * @return Tarea2
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
     * Set meses
     *
     * @param string $meses
     *
     * @return Tarea2
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
     * Set agente
     *
     * @param string $agente
     *
     * @return Tarea2
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
