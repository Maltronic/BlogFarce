<?php

namespace BlogFarce\BlogBundle\Entity;

use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\MaxLength;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class Enquiry {
    protected $name;
    
    protected $email;
    
    protected $subject;
    
    protected $body;
    
    protected $attachedCsv;
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }
 
    public function loadValidatorMetaData(ClassMetadata $meta)
    {
        $meta->addPropertyConstraint('name', new NotBlank());
        
        $meta->addPropertyConstraint('email', new Email());
        
        $meta->addPropertyConstraint('subject', new NotBlank());
        $meta->addPropertyConstraint('name', new MaxLength(82));
        
    }
}
