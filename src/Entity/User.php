<?php
// src/Entity/User.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Parc", mappedBy="fos_user")
     */
    private $parcs;

    public function __construct()
    {
        parent::__construct();
        $this->parcs = new ArrayCollection();
        // your own logic
    }

    /**
     * @return Collection|Parc[]
     */
    public function getParcs(): Collection
    {
        return $this->parcs;
    }

    public function addParc(Parc $parc): self
    {
        if (!$this->parcs->contains($parc)) {
            $this->parcs[] = $parc;
            $parc->addFosUser($this);
        }

        return $this;
    }

    public function removeParc(Parc $parc): self
    {
        if ($this->parcs->contains($parc)) {
            $this->parcs->removeElement($parc);
            $parc->removeFosUser($this);
        }

        return $this;
    }
}
