<?php

namespace Pfa\SistemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filtro
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Filtro
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
     * @ORM\Column(type="string", length=4)
     */
    private $disciplina;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $hora;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $dia;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $vence;





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
     * Set disciplina
     *
     * @param string $disciplina
     *
     * @return Filtro
     */
    public function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;

        return $this;
    }

    /**
     * Get disciplina
     *
     * @return string
     */
    public function getDisciplina()
    {
        return $this->disciplina;
    }

    /**
     * Set hora
     *
     * @param string $hora
     *
     * @return Filtro
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return string
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set dia
     *
     * @param string $dia
     *
     * @return Filtro
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return string
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set vence
     *
     * @param string $vence
     *
     * @return Filtro
     */
    public function setVence($vence)
    {
        $this->vence = $vence;

        return $this;
    }

    /**
     * Get vence
     *
     * @return string
     */
    public function getVence()
    {
        return $this->vence;
    }
}
