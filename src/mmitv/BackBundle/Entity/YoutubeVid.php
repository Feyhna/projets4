<?php

namespace mmitv\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * YoutubeVid
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class YoutubeVid
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
     * @ORM\Column(name="idlink", type="string", length=255)
     */
    private $idlink;

    /**
     * @var string
     *
     * @ORM\Column(name="prog", type="string", length=255)
     */
    private $prog;


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
     * Set idlink
     *
     * @param string $idlink
     * @return YoutubeVid
     */
    public function setIdlink($idlink)
    {
        $this->idlink = $idlink;

        return $this;
    }

    /**
     * Get idlink
     *
     * @return string 
     */
    public function getIdlink()
    {
        return $this->idlink;
    }

    /**
     * Set prog
     *
     * @param string $prog
     * @return YoutubeVid
     */
    public function setProg($prog)
    {
        $this->prog = $prog;

        return $this;
    }

    /**
     * Get prog
     *
     * @return string 
     */
    public function getProg()
    {
        return $this->prog;
    }
}
