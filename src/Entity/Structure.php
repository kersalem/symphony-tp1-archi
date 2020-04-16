<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Structure
 *
 * @ORM\Table(name="structure")
 * @ORM\Entity
 * @ApiResource
 */
class Structure
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="RUE", type="string", length=200, nullable=false)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="CP", type="string", length=5, nullable=false)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="VILLE", type="string", length=100, nullable=false)
     */
    private $ville;

    /**
     * @var bool
     *
     * @ORM\Column(name="ESTASSO", type="boolean", nullable=false)
     */
    private $estasso;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NB_DONATEURS", type="integer", nullable=true)
     */
    private $nbDonateurs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NB_ACTIONNAIRES", type="integer", nullable=true)
     */
    private $nbActionnaires;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * @param string $rue
     */
    public function setRue($rue)
    {
        $this->rue = $rue;
    }

    /**
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param string $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return bool
     */
    public function isEstasso()
    {
        return $this->estasso;
    }

    /**
     * @param bool $estasso
     */
    public function setEstasso($estasso)
    {
        $this->estasso = $estasso;
    }

    /**
     * @return int|null
     */
    public function getNbDonateurs()
    {
        return $this->nbDonateurs;
    }

    /**
     * @param int|null $nbDonateurs
     */
    public function setNbDonateurs($nbDonateurs)
    {
        $this->nbDonateurs = $nbDonateurs;
    }

    /**
     * @return int|null
     */
    public function getNbActionnaires()
    {
        return $this->nbActionnaires;
    }

    /**
     * @param int|null $nbActionnaires
     */
    public function setNbActionnaires($nbActionnaires)
    {
        $this->nbActionnaires = $nbActionnaires;
    }


}
