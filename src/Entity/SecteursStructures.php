<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * SecteursStructures
 *
 * @ORM\Table(name="secteurs_structures", indexes={@ORM\Index(name="ID_SECTEUR", columns={"ID_SECTEUR"}), @ORM\Index(name="ID_STRUCTURE", columns={"ID_STRUCTURE"})})
 * @ORM\Entity
 * @ApiResource
 */
class SecteursStructures
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
     * @var \Secteur
     *
     * @ORM\ManyToOne(targetEntity="Secteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_SECTEUR", referencedColumnName="ID")
     * })
     */
    private $idSecteur;

    /**
     * @var \Structure
     *
     * @ORM\ManyToOne(targetEntity="Structure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_STRUCTURE", referencedColumnName="ID")
     * })
     */
    private $idStructure;

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
     * @return \Secteur
     */
    public function getIdSecteur()
    {
        return $this->idSecteur;
    }

    /**
     * @param \Secteur $idSecteur
     */
    public function setIdSecteur($idSecteur)
    {
        $this->idSecteur = $idSecteur;
    }

    /**
     * @return \Structure
     */
    public function getIdStructure()
    {
        return $this->idStructure;
    }

    /**
     * @param \Structure $idStructure
     */
    public function setIdStructure($idStructure)
    {
        $this->idStructure = $idStructure;
    }


}
