<?php

namespace BlogFarce\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogFarce\BlogBundle\Entity\Blog;

class BlogFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blog1 = new Blog();
        $blog1->setTitle('The first farcical blog post');
        $blog1->setImageFile('blog1.jpg');
        $blog1->setAuthor('Mr Farce');
        $blog1->setBody('This is a blog entry about farcical nonsense. Enjoy it.');
        $blog1->setTags('blogFarce farce nonsense');
        $manager->persist($blog1);
        
        $blog2 = new Blog();
        $blog2->setTitle('Something about dolphins');
        $blog2->setImageFile('dolphin1.jpg');
        $blog2->setAuthor('Mrs Reynolds');
        $blog2->setBody('Ever seen a dolphin? They are majestic creatures, far less threatening than a killer whale or shark.');
        $blog2->setTags('dolphins');
        $manager->persist($blog2);
        
        $blog3 = new Blog();
        $blog3->setTitle('What rhymes with farce?');
        $blog3->setImageFile('blog2.jpg');
        $blog3->setAuthor('Mr Farce');
        $blog3->setBody('Parse of course. A great word that aptly earns its place as name for the act of syntactic analysis.');
        $blog3->setTags('farce');
        $manager->persist($blog3);
        
        $manager->flush();
        
        $this->addReference('blog-1', $blog1);
        $this->addReference('blog-2', $blog2);
        $this->addReference('blog-3', $blog3);
    }
    
    public function getOrder()
    {
        return 1;
    }
}