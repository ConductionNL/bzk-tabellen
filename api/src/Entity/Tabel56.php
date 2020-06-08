<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Verblijfstitel.
 *
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}},
 *     collectionOperations={
 *     		"get"={
 *     			"method"="GET",
 *     			"path"="/tabel56"
 *     		}
 *     },
 *     itemOperations={
 *     		"get"={
 *     			"method"="GET",
 *     			"path"="/tabel56/{id}"
 *     		}
 *     }
 * )
 * @ORM\Entity(repositoryClass="App\Repository\Tabel56Repository")
 */
class Tabel56
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
     * @ORM\Column(type="string", length=255)
     */
    private $verblijfstitel;

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
     * @var DateTime A "Y-m-d" formatted value
     *
     * @Groups({"read"})
     * @Assert\DateTime
     * @ORM\Column(type="date", nullable=true)
     */
    private $datumIngang;

    /**
     * @var DateTime A "Y-m-d" formatted value
     *
     * @Groups({"read"})
     * @Assert\DateTime
     * @ORM\Column(type="date", nullable=true)
     */
    private $datumEinde;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getVerblijfstitel(): ?string
    {
        return $this->verblijfstitel;
    }

    public function setVerblijfstitel(string $verblijfstitel): self
    {
        $this->verblijfstitel = $verblijfstitel;

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
