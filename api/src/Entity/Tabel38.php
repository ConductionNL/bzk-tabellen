<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Adellijke titel/predikaat.
 *
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}},
 *     collectionOperations={
 *     		"get"={
 *     			"method"="GET",
 *     			"path"="/tabel38"
 *     		}
 *     },
 *     itemOperations={
 *     		"get"={
 *     			"method"="GET",
 *     			"path"="/tabel38/{id}"
 *     		}
 *     }
 * )
 * @ORM\Entity(repositoryClass="App\Repository\Tabel38Repository")
 */
class Tabel38
{
    /**
     * @var UuidInterface The UUID identifier of this object
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
     * @ORM\Column(type="string", length=255, unique=true, options={"collation":"utf8_bin"})
     */
    private $adellijkeTitelPredikaat;

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
     * @var string
     *
     * @Groups({"read"})
     * @Assert\Length(
     *      max = 255
     * )
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $soort;

    public function getId()
    {
        return $this->id;
    }

    public function getAdellijkeTitelPredikaat(): ?string
    {
        return $this->adellijkeTitelPredikaat;
    }

    public function setAdellijkeTitelPredikaat(string $adellijkeTitelPredikaat): self
    {
        $this->adellijkeTitelPredikaat = $adellijkeTitelPredikaat;

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

    public function getSoort(): ?string
    {
        return $this->soort;
    }

    public function setSoort(string $soort): self
    {
        $this->soort = $soort;

        return $this;
    }
}
