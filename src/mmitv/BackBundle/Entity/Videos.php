<?php

namespace mmitv\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Videos
 */
class Videos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $videoHref;

    /**
     * @var string
     */
    private $videoNom;

    /**
     * @var string
     */
    private $videoDebut;

    /**
     * @var string
     */
    private $videoFin;

    /**
     * @var boolean
     */
    private $videoPlateforme;


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
     * Set videoHref
     *
     * @param string $videoHref
     * @return Videos
     */
    public function setVideoHref($videoHref)
    {
        $this->videoHref = $videoHref;

        return $this;
    }

    /**
     * Get videoHref
     *
     * @return string 
     */
    public function getVideoHref()
    {
        return $this->videoHref;
    }

    /**
     * Set videoNom
     *
     * @param string $videoNom
     * @return Videos
     */
    public function setVideoNom($videoNom)
    {
        $this->videoNom = $videoNom;

        return $this;
    }

    /**
     * Get videoNom
     *
     * @return string 
     */
    public function getVideoNom()
    {
        return $this->videoNom;
    }

    /**
     * Set videoDebut
     *
     * @param string $videoDebut
     * @return Videos
     */
    public function setVideoDebut($videoDebut)
    {
        $this->videoDebut = $videoDebut;

        return $this;
    }

    /**
     * Get videoDebut
     *
     * @return string 
     */
    public function getVideoDebut()
    {
        return $this->videoDebut;
    }

    /**
     * Set videoFin
     *
     * @param string $videoFin
     * @return Videos
     */
    public function setVideoFin($videoFin)
    {
        $this->videoFin = $videoFin;

        return $this;
    }

    /**
     * Get videoFin
     *
     * @return string 
     */
    public function getVideoFin()
    {
        return $this->videoFin;
    }

    /**
     * Set videoPlateforme
     *
     * @param boolean $videoPlateforme
     * @return Videos
     */
    public function setVideoPlateforme($videoPlateforme)
    {
        $this->videoPlateforme = $videoPlateforme;

        return $this;
    }

    /**
     * Get videoPlateforme
     *
     * @return boolean 
     */
    public function getVideoPlateforme()
    {
        return $this->videoPlateforme;
    }
}
