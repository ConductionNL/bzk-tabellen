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
 * PK Afnemers.
 *
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}},
 *     collectionOperations={
 *     		"get"={
 *     			"method"="GET",
 *     			"path"="/tabel55"
 *     		}
 *     },
 *     itemOperations={
 *     		"get"={
 *     			"method"="GET",
 *     			"path"="/tabel55/{id}"
 *     		}
 *     }
 * )
 * @ORM\Entity(repositoryClass="App\Repository\Tabel55Repository")
 */
class Tabel55
{
    /**
     * @var string
     *
     * @ApiFilter(SearchFilter::class, strategy="exact")
     * @Groups({"read"})
     * @ApiProperty(identifier=true)
     * @ORM\Id
     * @Assert\Length(
     *      max = 255
     * )
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255, unique=true, options={"collation":"utf8_bin"})
     */
    private $afnemersaanduiding;

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

    public function getId(): ?string
    {
        return $this->afnemersaanduiding;
    }

    public function getAfnemersaanduiding(): ?string
    {
        return $this->afnemersaanduiding;
    }

    public function setAfnemersaanduiding(string $afnemersaanduiding): self
    {
        $this->afnemersaanduiding = $afnemersaanduiding;

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
}
