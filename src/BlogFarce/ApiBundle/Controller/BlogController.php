<?php


namespace BlogFarce\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogFarce\BlogBundle\Entity\Blog;

class BlogController extends Controller
{
    public function getBlogsAction()
    {
        $blogs = $this->getDoctrine()->getManager()->getRepository('BlogBundle:Blog')->findAll();
        
        $serializer = $this->get('jms_serializer');
        $data = $serializer->serialize($blogs, 'json');

        return array('blogs' => $data);
    }
    
    public function getBlogAction(Blog $blog)
    {
        return array('blog' => $blog);
    }
}
