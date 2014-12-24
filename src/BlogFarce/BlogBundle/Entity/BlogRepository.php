<?php

namespace BlogFarce\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;

class BlogRepository extends EntityRepository
{
    public function findAll()
    {
        return $this->createQueryBuilder('b')
                ->addOrderBy('b.created', 'ASC')
                ->getQuery()
                ->getResult();
    }
    
    public function getLatestBlogs()
    {
        return $this->createQueryBuilder('b')
                ->addOrderBy('b.created', 'DESC')
                ->getQuery()
                ->getResult();                
    }
}

