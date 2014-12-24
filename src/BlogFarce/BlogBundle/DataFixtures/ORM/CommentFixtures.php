<?php

namespace BlogFarce\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogFarce\BlogBundle\Entity\Comment;

class CommentFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $comment1 = new Comment();
        $comment1->setComment('wow, what insightful information!');
        $comment1->setUser('Dr. Groll');
        $comment1->setApproved('true');
        $comment1->setBlog($manager->merge($this->getReference('blog-1')));
        $manager->persist($comment1);
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 2;
    }
}
