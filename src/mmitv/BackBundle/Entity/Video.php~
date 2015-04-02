<?php

namespace mmitv\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="mmitv\BackBundle\Entity\VideoRepository")
 */
class Video
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
     * @ORM\Column(name="video_href", type="string", length=255)
     */
    private $videoHref;

    /**
     * @var string
     *
     * @ORM\Column(name="video_nom", type="string", length=255)
     */
    private $videoNom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="video_duree", type="time")
     */
    private $videoDuree;

    /**
     * @var string
     *
     * @ORM\Column(name="video_plateforme", type="string", length=255)
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
     * @return Video
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
     * @return Video
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
     * Set videoDuree
     *
     * @param \DateTime $videoDuree
     * @return Video
     */
    public function setVideoDuree($videoDuree)
    {
        $this->videoDuree = $videoDuree;

        return $this;
    }

    /**
     * Get videoDuree
     *
     * @return \DateTime 
     */
    public function getVideoDuree()
    {
        return $this->videoDuree;
    }

    /**
     * Set videoPlateforme
     *
     * @param string $videoPlateforme
     * @return Video
     */
    public function setVideoPlateforme($videoPlateforme)
    {
        $this->videoPlateforme = $videoPlateforme;

        return $this;
    }

    /**
     * Get videoPlateforme
     *
     * @return string 
     */
    public function getVideoPlateforme()
    {
        return $this->videoPlateforme;
    }
}
