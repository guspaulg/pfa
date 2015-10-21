<?php

namespace Pfa\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlumnoPago
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AlumnoPago
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
     * @ORM\Column(type="integer")
     */
    private $idalumno;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $disciplina1;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $disciplina2;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $disciplina3;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $disciplina4;

    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $precio;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $tipodepago;

    /**
     * @ORM\Column(type="date")
     */
    private $fechainicio;

    /**
     * @ORM\Column(type="date")
     */
    private $fechafinal;

    /**
     *
     * @ORM\Column(type="integer")
     */
    private $veces;

    /**
     *
     * @ORM\Column(type="integer")
     */
    private $vecestotales;

    /**
     *
     * @ORM\Column(type="integer")
     */
    private $vecesasistencia;

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
     * @ORM\Column(type="string", length=20)
     */
    protected $apellidop;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $apellidom;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $nombre;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $email;
    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $agente;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $meses;

    /**
     * @ORM\Column(type="string", length=2)
     */
    protected $tipo;

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
     * Set idalumno
     *
     * @param integer $idalumno
     *
     * @return AlumnoPago
     */
    public function setIdalumno($idalumno)
    {
        $this->idalumno = $idalumno;

        return $this;
    }

    /**
     * Get idalumno
     *
     * @return integer
     */
    public function getIdalumno()
    {
        return $this->idalumno;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return AlumnoPago
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
     * @return AlumnoPago
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
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     *
     * @return AlumnoPago
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafinal
     *
     * @param \DateTime $fechafinal
     *
     * @return AlumnoPago
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

    /**
     * Set veces
     *
     * @param integer $veces
     *
     * @return AlumnoPago
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
     * Set vecestotales
     *
     * @param integer $vecestotales
     *
     * @return AlumnoPago
     */
    public function setVecestotales($vecestotales)
    {
        $this->vecestotales = $vecestotales;

        return $this;
    }

    /**
     * Get vecestotales
     *
     * @return integer
     */
    public function getVecestotales()
    {
        return $this->vecestotales;
    }

    /**
     * Set vecesasistencia
     *
     * @param integer $vecesasistencia
     *
     * @return AlumnoPago
     */
    public function setVecesasistencia($vecesasistencia)
    {
        $this->vecesasistencia = $vecesasistencia;

        return $this;
    }

    /**
     * Get vecesasistencia
     *
     * @return integer
     */
    public function getVecesasistencia()
    {
        return $this->vecesasistencia;
    }

    /**
     * Set lunes
     *
     * @param string $lunes
     *
     * @return AlumnoPago
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
     * @return AlumnoPago
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
     * @return AlumnoPago
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
     * @return AlumnoPago
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
     * @return AlumnoPago
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
     * @return AlumnoPago
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
     * @return AlumnoPago
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
     * Set apellidop
     *
     * @param string $apellidop
     *
     * @return AlumnoPago
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
     * @return AlumnoPago
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
     * @return AlumnoPago
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
     * Set email
     *
     * @param string $email
     *
     * @return AlumnoPago
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
     * Set disciplina1
     *
     * @param string $disciplina1
     *
     * @return AlumnoPago
     */
    public function setDisciplina1($disciplina1)
    {
        $this->disciplina1 = $disciplina1;

        return $this;
    }

    /**
     * Get disciplina1
     *
     * @return string
     */
    public function getDisciplina1()
    {
        return $this->disciplina1;
    }

    /**
     * Set disciplina2
     *
     * @param string $disciplina2
     *
     * @return AlumnoPago
     */
    public function setDisciplina2($disciplina2)
    {
        $this->disciplina2 = $disciplina2;

        return $this;
    }

    /**
     * Get disciplina2
     *
     * @return string
     */
    public function getDisciplina2()
    {
        return $this->disciplina2;
    }

    /**
     * Set disciplina3
     *
     * @param string $disciplina3
     *
     * @return AlumnoPago
     */
    public function setDisciplina3($disciplina3)
    {
        $this->disciplina3 = $disciplina3;

        return $this;
    }

    /**
     * Get disciplina3
     *
     * @return string
     */
    public function getDisciplina3()
    {
        return $this->disciplina3;
    }

    /**
     * Set disciplina4
     *
     * @param string $disciplina4
     *
     * @return AlumnoPago
     */
    public function setDisciplina4($disciplina4)
    {
        $this->disciplina4 = $disciplina4;

        return $this;
    }

    /**
     * Get disciplina4
     *
     * @return string
     */
    public function getDisciplina4()
    {
        return $this->disciplina4;
    }

    /**
     * Set agente
     *
     * @param string $agente
     *
     * @return AlumnoPago
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

    /**
     * Set meses
     *
     * @param string $meses
     *
     * @return AlumnoPago
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return AlumnoPago
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
