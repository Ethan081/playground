<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParcRepository")
 */
class Parc
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="integer")
     */
    private $zipcode;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Surfaces", inversedBy="parcs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $surface;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Amenities", inversedBy="parcs")
     */
    private $amenities;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Equipments", inversedBy="parcs")
     */
    private $equipments;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Accessibilities", inversedBy="parcs")
     */
    private $accessibility;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\AgeSuitability", inversedBy="parcs")
     */
    private $age_suitability;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="parcs")
     */
    private $fos_user;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pictures", mappedBy="parc")
     */
    private $picture;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rating;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $favoris;



    public function __construct()
    {
        $this->amenities = new ArrayCollection();
        $this->equipments = new ArrayCollection();
        $this->accessibility = new ArrayCollection();
        $this->age_suitability = new ArrayCollection();
        $this->fos_user = new ArrayCollection();
        $this->picture = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getZipcode(): ?int
    {
        return $this->zipcode;
    }

    public function setZipcode(int $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getSurface(): ?Surfaces
    {
        return $this->surface;
    }

    public function setSurface(?Surfaces $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * @return Collection|Amenities[]
     */
    public function getAmenities(): Collection
    {
        return $this->amenities;
    }

    public function addAmenity(Amenities $amenity): self
    {
        if (!$this->amenities->contains($amenity)) {
            $this->amenities[] = $amenity;
        }

        return $this;
    }

    public function removeAmenity(Amenities $amenity): self
    {
        if ($this->amenities->contains($amenity)) {
            $this->amenities->removeElement($amenity);
        }

        return $this;
    }

    /**
     * @return Collection|Equipments[]
     */
    public function getEquipments(): Collection
    {
        return $this->equipments;
    }

    public function addEquipment(Equipments $equipment): self
    {
        if (!$this->equipments->contains($equipment)) {
            $this->equipments[] = $equipment;
        }

        return $this;
    }

    public function removeEquipment(Equipments $equipment): self
    {
        if ($this->equipments->contains($equipment)) {
            $this->equipments->removeElement($equipment);
        }

        return $this;
    }

    /**
     * @return Collection|Accessibilities[]
     */
    public function getAccessibility(): Collection
    {
        return $this->accessibility;
    }

    public function addAccessibility(Accessibilities $accessibility): self
    {
        if (!$this->accessibility->contains($accessibility)) {
            $this->accessibility[] = $accessibility;
        }

        return $this;
    }

    public function removeAccessibility(Accessibilities $accessibility): self
    {
        if ($this->accessibility->contains($accessibility)) {
            $this->accessibility->removeElement($accessibility);
        }

        return $this;
    }

    /**
     * @return Collection|AgeSuitability[]
     */
    public function getAgeSuitability(): Collection
    {
        return $this->age_suitability;
    }

    public function addAgeSuitability(AgeSuitability $ageSuitability): self
    {
        if (!$this->age_suitability->contains($ageSuitability)) {
            $this->age_suitability[] = $ageSuitability;
        }

        return $this;
    }

    public function removeAgeSuitability(AgeSuitability $ageSuitability): self
    {
        if ($this->age_suitability->contains($ageSuitability)) {
            $this->age_suitability->removeElement($ageSuitability);
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getFosUser(): Collection
    {
        return $this->fos_user;
    }

    public function addFosUser(User $fosUser): self
    {
        if (!$this->fos_user->contains($fosUser)) {
            $this->fos_user[] = $fosUser;
        }

        return $this;
    }

    public function removeFosUser(User $fosUser): self
    {
        if ($this->fos_user->contains($fosUser)) {
            $this->fos_user->removeElement($fosUser);
        }

        return $this;
    }

    /**
     * @return Collection|Pictures[]
     */
    public function getPicture(): Collection
    {
        return $this->picture;
    }

    public function addPicture(Pictures $picture): self
    {
        if (!$this->picture->contains($picture)) {
            $this->picture[] = $picture;
            $picture->setParc($this);
        }

        return $this;
    }

    public function removePicture(Pictures $picture): self
    {
        if ($this->picture->contains($picture)) {
            $this->picture->removeElement($picture);
            // set the owning side to null (unless already changed)
            if ($picture->getParc() === $this) {
                $picture->setParc(null);
            }
        }

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getFavoris(): ?bool
    {
        return $this->favoris;
    }

    public function setFavoris(?bool $favoris): self
    {
        $this->favoris = $favoris;

        return $this;
    }

}
