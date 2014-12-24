<?php

namespace BlogFarce\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Blog
{
    protected $id;
    
    protected $title;
    
    protected $author;
    
    protected $body;
    
    protected $imageFile;
    
    protected $tags;
    
    protected $comments;
    
    protected $created;
    
    protected $updated;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }
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
     * Set title
     *
     * @param string $title
     * @return Blog
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Blog
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Blog
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set imageFile
     *
     * @param string $imageFile
     * @return Blog
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;

        return $this;
    }

    /**
     * Get imageFile
     *
     * @return string 
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return Blog
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Blog
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Blog
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
    
    public function updateTimestamps()
    {
        $this->setUpdated(new \DateTime('now'));
        
        if ($this->getCreated() == null) {
            $this->setCreated(new \DateTime('now'));
        }
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Comments;


    /**
     * Add Comments
     *
     * @param \BlogFarce\BlogBundle\Entity\comment $comments
     * @return Blog
     */
    public function addComment(\BlogFarce\BlogBundle\Entity\comment $comments)
    {
        $this->Comments[] = $comments;

        return $this;
    }

    /**
     * Remove Comments
     *
     * @param \BlogFarce\BlogBundle\Entity\comment $comments
     */
    public function removeComment(\BlogFarce\BlogBundle\Entity\comment $comments)
    {
        $this->Comments->removeElement($comments);
    }

    /**
     * Get Comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->Comments;
    }
    
    public function __toString()
    {
        return 'Blog';
    }
}
