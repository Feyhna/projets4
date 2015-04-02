<?php

namespace mmitv\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tweet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="mmitv\BackBundle\Entity\TweetRepository")
 */
class Tweet
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
     * @ORM\Column(name="tweet_href", type="string", length=255)
     */
    private $tweetHref;


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
     * Set tweetHref
     *
     * @param string $tweetHref
     * @return Tweet
     */
    public function setTweetHref($tweetHref)
    {
        $this->tweetHref = $tweetHref;

        return $this;
    }

    /**
     * Get tweetHref
     *
     * @return string 
     */
    public function getTweetHref()
    {
        return $this->tweetHref;
    }
}
