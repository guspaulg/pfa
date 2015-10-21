<?php

namespace Pfa\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vip
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Vip
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
    protected $sexo;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $veces;

    /**
     * @ORM\Column(type="integer")
     */
    protected $idpago;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Vip
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
     * @return Vip
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
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Vip
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
     * Set veces
     *
     * @param string $veces
     *
     * @return Vip
     */
    public function setVeces($veces)
    {
        $this->veces = $veces;

        return $this;
    }

    /**
     * Get veces
     *
     * @return string
     */
    public function getVeces()
    {
        return $this->veces;
    }

    /**
     * Set idpago
     *
     * @param integer $idpago
     *
     * @return Vip
     */
    public function setIdpago($idpago)
    {
        $this->idpago = $idpago;

        return $this;
    }

    /**
     * Get idpago
     *
     * @return integer
     */
    public function getIdpago()
    {
        return $this->idpago;
    }

    /**
     * Set lunes
     *
     * @param string $lunes
     *
     * @return Vip
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
     * @return Vip
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
     * @return Vip
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
     * @return Vip
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
     * @return Vip
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
     * @return Vip
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
     * @return Vip
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
}
