<?php

namespace mmitv\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Playlists
 */
class Playlists
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $playlistNom;

    /**
     * @var string
     */
    private $playlistDebut;

    /**
     * @var string
     */
    private $playlistFin;

    /**
     * @var \DateTime
     */
    private $playlistHeureDiff;

    /**
     * @var \DateTime
     */
    private $playlistJourDiff;


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
     * @return Playlists
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
     * Set playlistDebut
     *
     * @param string $playlistDebut
     * @return Playlists
     */
    public function setPlaylistDebut($playlistDebut)
    {
        $this->playlistDebut = $playlistDebut;

        return $this;
    }

    /**
     * Get playlistDebut
     *
     * @return string 
     */
    public function getPlaylistDebut()
    {
        return $this->playlistDebut;
    }

    /**
     * Set playlistFin
     *
     * @param string $playlistFin
     * @return Playlists
     */
    public function setPlaylistFin($playlistFin)
    {
        $this->playlistFin = $playlistFin;

        return $this;
    }

    /**
     * Get playlistFin
     *
     * @return string 
     */
    public function getPlaylistFin()
    {
        return $this->playlistFin;
    }

    /**
     * Set playlistHeureDiff
     *
     * @param \DateTime $playlistHeureDiff
     * @return Playlists
     */
    public function setPlaylistHeureDiff($playlistHeureDiff)
    {
        $this->playlistHeureDiff = $playlistHeureDiff;

        return $this;
    }

    /**
     * Get playlistHeureDiff
     *
     * @return \DateTime 
     */
    public function getPlaylistHeureDiff()
    {
        return $this->playlistHeureDiff;
    }

    /**
     * Set playlistJourDiff
     *
     * @param \DateTime $playlistJourDiff
     * @return Playlists
     */
    public function setPlaylistJourDiff($playlistJourDiff)
    {
        $this->playlistJourDiff = $playlistJourDiff;

        return $this;
    }

    /**
     * Get playlistJourDiff
     *
     * @return \DateTime 
     */
    public function getPlaylistJourDiff()
    {
        return $this->playlistJourDiff;
    }
}
