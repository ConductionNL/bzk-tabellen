<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Reden ontbinding/nietigverklaring huwelijk/geregistreerd partnerschap.
 *
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}},
 *     collectionOperations={
 *     		"get"={
 *     			"method"="GET",
 *     			"path"="/tabel41"
 *     		}
 *     },
 *     itemOperations={
 *     		"get"={
 *     			"method"="GET",
 *     			"path"="/tabel41/{id}"
 *     		}
 *     }
 * )
 * @ORM\Entity(repositoryClass="App\Repository\Tabel41Repository")
 */
class Tabel41
{
    /**
     * @var UuidInterface The UUID identifier of this object
     *
     * @example e2984465-190a-4562-829e-a8cca81aa35d
     *
     * @Assert\Uuid
     * @Groups({"read"})
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    private $id;

    /**
     * @var string
     *
     * @ApiFilter(SearchFilter::class, strategy="exact")
     * @Groups({"read"})
     * @Assert\Length(
     *      max = 255
     * )
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $reden;

    /**
     * @var string
     *
     * @ApiFilter(SearchFilter::class, strategy="partial")
     * @Groups({"read"})
     * @Assert\Length(
     *      max = 255
     * )
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $omschrijving;

    /**
     * @var string A "Y-m-d" formatted value
     *
     * @Groups({"read"})
     * @Assert\Date
     * @ORM\Column(type="date", nullable=true)
     */
    private $datumIngang;

    /**
     * @var string A "Y-m-d" formatted value
     *
     * @Groups({"read"})
     * @Assert\Date
     * @ORM\Column(type="date", nullable=true)
     */
    private $datumEinde;

    public function getId()
    {
        return $this->id;
    }

    public function getReden(): ?string
    {
        return $this->reden;
    }

    public function setReden(string $reden): self
    {
        $this->reden = $reden;

        return $this;
    }

    public function getOmschrijving(): ?string
    {
        return $this->omschrijving;
    }

    public function setOmschrijving(string $omschrijving): self
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    public function getDatumIngang(): ?\DateTimeInterface
    {
        return $this->datumIngang;
    }

    public function setDatumIngang(?\DateTimeInterface $datumIngang): self
    {
        $this->datumIngang = $datumIngang;

        return $this;
    }

    public function getDatumEinde(): ?\DateTimeInterface
    {
        return $this->datumEinde;
    }

    public function setDatumEinde(?\DateTimeInterface $datumEinde): self
    {
        $this->datumEinde = $datumEinde;

        return $this;
    }
}
