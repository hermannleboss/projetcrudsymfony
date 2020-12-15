<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RendezVousRepository::class)
 */
class RendezVous
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateRV;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $detailsRV;

    /**
     * @ORM\ManyToOne(targetEntity=Medecin::class, inversedBy="rendezVouses")
     */
    private $medecin;

    /**
     * @ORM\ManyToOne(targetEntity=Patient::class, inversedBy="rendezVouses")
     */
    private $patient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRV(): ?\DateTimeInterface
    {
        return $this->dateRV;
    }

    public function setDateRV(?\DateTimeInterface $dateRV): self
    {
        $this->dateRV = $dateRV;

        return $this;
    }

    public function getDetailsRV(): ?string
    {
        return $this->detailsRV;
    }

    public function setDetailsRV(?string $detailsRV): self
    {
        $this->detailsRV = $detailsRV;

        return $this;
    }

    public function getMedecin(): ?Medecin
    {
        return $this->medecin;
    }

    public function setMedecin(?Medecin $medecin): self
    {
        $this->medecin = $medecin;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(?Patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }
}
