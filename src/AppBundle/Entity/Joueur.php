<?php

namespace AppBundle\Entity;

use AppBundle\Repository\JoueurRepository;
use Doctrine\ORM\Mapping as ORM;
use stdClass;

/**
 * Joueur
 *
 * @ORM\Table(name="joueur")
 * @ORM\Entity(repositoryClass="JoueurRepository")
 */
class Joueur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var stdClass
     * 
     * @ORM\OneToOne(targetEntity="Personnages")
     * @ORM\JoinColumn(name="fk_personnages",referencedColumnName="id",nullable=true)
     * 
     */
    private $personnage;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Joueur
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
     * Set personnage
     *
     * @param stdClass $personnage
     *
     * @return Joueur
     */
    public function setPersonnage($personnage)
    {
        $this->personnage = $personnage;

        return $this;
    }

    /**
     * Get personnage
     *
     * @return stdClass
     */
    public function getPersonnage()
    {
        return $this->personnage;
    }
}

