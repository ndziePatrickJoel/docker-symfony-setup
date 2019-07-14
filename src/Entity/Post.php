<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This class represents a Post in database
 */

/**
 * @author ndziePatrickJoel
 * 
 * @ORM\Entity
 * @ORM\Table
 */
class Post{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    private $id;


    /**
     * @ORM\Column(type="datetime")
     *
     * @var string
     */
    private $dateCreation;



    /**
     * @ORM\Column(type="string", length=1024)
     * @var string
     */
    private $titre;


    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    private $contenu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

}