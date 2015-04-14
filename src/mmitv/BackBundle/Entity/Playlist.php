<?php

namespace mmitv\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Playlist
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="mmitv\BackBundle\Entity\PlaylistRepository")
 */
class Playlist
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
     * @ORM\Column(name="playlist_nom", type="string", length=255)
     */
    private $playlistNom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="playlist_duree", type="time", nullable=true)
     */
    private $playlistDuree=null;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="playlist_datetime", type="datetime", nullable=true)
     */
    private $playlistDatetime=null;

    /**
     * @ORM\ManyToMany(targetEntity="mmitv\BackBundle\Entity\Video", mappedBy="playlist")
     */
    protected $video;


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
     * Set playlistNom
     *
     * @param string $playlistNom
     * @return Playlist
     */
    public function setPlaylistNom($playlistNom)
    {
        $this->playlistNom = $playlistNom;

        return $this;
    }

    /**
     * Get playlistNom
     *
     * @return string 
     */
    public function getPlaylistNom()
    {
        return $this->playlistNom;
    }

    /**
     * Set playlistDuree
     *
     * @param \DateTime $playlistDuree
     * @return Playlist
     */
    public function setPlaylistDuree($playlistDuree)
    {
        $this->playlistDuree = $playlistDuree;

        return $this;
    }

    /**
     * Get playlistDuree
     *
     * @return \DateTime 
     */
    public function getPlaylistDuree()
    {
        return $this->playlistDuree;
    }

    /**
     * Set playlistDatetime
     *
     * @param \DateTime $playlistDatetime
     * @return Playlist
     */
    public function setPlaylistDatetime($playlistDatetime)
    {
        $this->playlistDatetime = $playlistDatetime;

        return $this;
    }

    /**
     * Get playlistDatetime
     *
     * @return \DateTime 
     */
    public function getPlaylistDatetime()
    {
        return $this->playlistDatetime;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->video = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add video
     *
     * @param \mmitv\BackBundle\Video $video
     * @return Playlist
     */
    public function addVideo(\mmitv\BackBundle\Entity\Video $video)
    {

        $this->video[] = $video;

        return $this;
    }

    /**
     * Remove video
     *
     * @param \mmitv\BackBundle\Video $video
     */
    public function removeVideo(\mmitv\BackBundle\Entity\Video $video)
    {
        $this->video->removeElement($video);
    }

    /**
     * Get video
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVideo()
    {
        return $this->video;
    }
}
