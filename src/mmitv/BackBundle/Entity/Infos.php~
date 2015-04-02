<?php

namespace mmitv\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="mmitv\BackBundle\Entity\InfosRepository")
 */
class Infos
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
     * @ORM\Column(name="infos_nom", type="string", length=255)
     */
    private $infosNom;

    /**
     * @var string
     *
     * @ORM\Column(name="infos_type", type="string", length=255)
     */
    private $infosType;

    /**
     * @var string
     *
     * @ORM\Column(name="infos_contenu", type="text")
     */
    private $infosContenu;


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
     * Set infosNom
     *
     * @param string $infosNom
     * @return Infos
     */
    public function setInfosNom($infosNom)
    {
        $this->infosNom = $infosNom;

        return $this;
    }

    /**
     * Get infosNom
     *
     * @return string 
     */
    public function getInfosNom()
    {
        return $this->infosNom;
    }

    /**
     * Set infosType
     *
     * @param string $infosType
     * @return Infos
     */
    public function setInfosType($infosType)
    {
        $this->infosType = $infosType;

        return $this;
    }

    /**
     * Get infosType
     *
     * @return string 
     */
    public function getInfosType()
    {
        return $this->infosType;
    }

    /**
     * Set infosContenu
     *
     * @param string $infosContenu
     * @return Infos
     */
    public function setInfosContenu($infosContenu)
    {
        $this->infosContenu = $infosContenu;

        return $this;
    }

    /**
     * Get infosContenu
     *
     * @return string 
     */
    public function getInfosContenu()
    {
        return $this->infosContenu;
    }
}
