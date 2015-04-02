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
     * @ORM\Column(name="playlist_duree", type="time")
     */
    private $playlistDuree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="playlist_datetime", type="datetime")
     */
    private $playlistDatetime;


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
}
