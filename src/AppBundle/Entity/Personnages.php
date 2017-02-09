<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnages
 *
 * @ORM\Table(name="personnages")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonnagesRepository")
 */
class Personnages {

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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \stdClass
     *
     * @ORM\OneToOne(targetEntity="Stats")
     * @ORM\JoinColumn(name="fk_stats", referencedColumnName="id")
     * 
     */
    private $stats;

    /**
     * @var \stdClass
     *
     * @ORM\OneToOne(targetEntity="Race")
     * @ORM\JoinColumn(name="fk_race", referencedColumnName="id")
     * 
     */
    private $race;

    /**
     * @var \stdClass
     *
     * @ORM\OneToOne(targetEntity="Classe")
     * @ORM\JoinColumn(name="fk_classe", referencedColumnName="id")
     * 
     */
    private $classe;

    /**
     *
     * @var int
     * 
     * @ORM\Column(name="pa", type="integer")
     */
    private $pa;
    
    private $positionH;
    
    private $positionV;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Personnages
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set stats
     *
     * @param string $stats
     *
     * @return Personnages
     */
    public function setStats($stats) {
        $this->stats = $stats;

        return $this;
    }

    /**
     * Get stats
     *
     * @return string
     */
    public function getStats() {
        return $this->stats;
    }

    /**
     * Set race
     *
     * @param \stdClass $race
     *
     * @return Personnages
     */
    public function setRace($race) {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return \stdClass
     */
    public function getRace() {
        return $this->race;
    }

    /**
     * Set classe
     *
     * @param \stdClass $classe
     *
     * @return Personnages
     */
    public function setClasse($classe) {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return \stdClass
     */
    public function getClasse() {
        return $this->classe;
    }

    /**
     * @return typeGet pa
     * 
     * @return int
     */
    function getPa() {
        return $this->pa;
    }

    /**
     * Set pa
     * 
     * @param integer $pa
     * 
     * @return Personnages
     * 
     */
    function setPa($pa) {
        $this->pa = $pa;
        return $this;
    }
    /**
     * attaque le personnage ciblé en paramètre
     * 
     * @param \AppBundle\Entity\Personnage $cible
     * 
     */
    public function attaquer(Personnage $cible){
        
    }
    /**
     * Changer sa position initiale par les nouvelles coordonnées
     * 
     * @param int $ligne
     * @param int $colonne
     * 
     */
    public function seDeplacer(int $ligne, int $colonne) {
        $this->positionH = $ligne;
        $this->positionV = $colonne;
        
    }
    
    /**
     * 
     * méthode pour mourir
     */
    public function mourir() {
        var_dump("You are dead !");
    }

}
