<?php

namespace mmitv\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programme
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="mmitv\BackBundle\Entity\ProgrammeRepository")
 */
class Programme
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="programme_nom", type="string", length=255)
     */
    private $programmeNom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="programme_datetime", type="datetime")
     */
    private $programmeDatetime;

    /**
     * @ORM\ManyToMany(targetEntity="mmitv\BackBundle\Entity\Playlist", mappedBy="programme")
     */
    protected $playlist;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set programmeNom
     *
     * @param string $programmeNom
     * @return Programme
     */
    public function setProgrammeNom($programmeNom)
    {
        $this->programmeNom = $programmeNom;

        return $this;
    }

    /**
     * Get programmeNom
     *
     * @return string 
     */
    public function getProgrammeNom()
    {
        return $this->programmeNom;
    }

    /**
     * Set programmeDatetime
     *
     * @param \DateTime $programmeDatetime
     * @return Programme
     */
    public function setProgrammeDatetime($programmeDatetime)
    {
        $this->programmeDatetime = $programmeDatetime;

        return $this;
    }

    /**
     * Get programmeDatetime
     *
     * @return \DateTime 
     */
    public function getProgrammeDatetime()
    {
        return $this->programmeDatetime;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->playlist = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add playlist
     *
     * @param \mmitv\BackBundle\Entity\Playlist $playlist
     * @return Programme
     */
    public function addPlaylist(\mmitv\BackBundle\Entity\Playlist $playlist)
    {
        $this->playlist[] = $playlist;

        return $this;
    }

    /**
     * Remove playlist
     *
     * @param \mmitv\BackBundle\Entity\Playlist $playlist
     */
    public function removePlaylist(\mmitv\BackBundle\Entity\Playlist $playlist)
    {
        $this->playlist->removeElement($playlist);
    }

    /**
     * Get playlist
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlaylist()
    {
        return $this->playlist;
    }
}
