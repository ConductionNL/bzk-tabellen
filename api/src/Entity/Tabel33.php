<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Gemeentecodes
 *
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}},
 *     collectionOperations={
 *     		"get"={
 *     			"method"="GET",
 *     			"path"="/tabel33"
 *     		}
 *     },
 *     itemOperations={
 *     		"get"={
 *     			"method"="GET",
 *     			"path"="/tabel33/{gemeentecodes}"
 *     		}
 *     }
 * )
 * @ORM\Entity(repositoryClass="App\Repository\Tabel33Repository")
 */
class Tabel33
{
    /**
     *
     * @var string
     *
     * @ApiFilter(SearchFilter::class, strategy="exact")
     * @Groups({"read"})
	 * @ApiProperty(identifier=true)
	 * @ORM\Id
     * @Assert\Length(
     *      min = 4,
     *      max = 4,
     * )
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=4, unique=true)
     */
	private $gemeentecode;

    /**
     *
     * @var string
     *
     * @ApiFilter(SearchFilter::class, strategy="partial")
     * @Groups({"read"})
     * @Assert\Length(
     *      max = 255,
     * )
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
	private $omschrijving;

	/**
	 *
	 * @var string
	 *
     * @Groups({"read"})
	 * @Assert\Length(
	 *      min = 4,
	 *      max = 4,
	 * )
	 * @ORM\Column(type="string", length=4, nullable=true)
	 */
	private $nieuweCode;


    /**
     * @var string A "Y-m-d" formatted value
     *
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

    public function getId(): ?string
    {
        return $this->gemeentecode;
    }

    public function getGemeentecode(): ?string
    {
        return $this->gemeentecode;
    }

    public function setGemeentecode(string $gemeentecode): self
    {
        $this->gemeentecode = $gemeentecode;

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

    public function getNieuweCode(): ?string
    {
        return $this->nieuweCode;
    }

    public function setNieuweCode(?string $nieuweCode): self
    {
        $this->nieuweCode = $nieuweCode;

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
