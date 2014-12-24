<?php

namespace BlogFarce\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use BlogFarce\BlogBundle\Entity\Comment;
use BlogFarce\BlogBundle\Form\CommentType;

class BlogController extends Controller
{
    public function showAction($id)
    {
        $blog = $this->getDoctrine()->getEntityManager()->getRepository('BlogBundle:Blog')->find($id);
        if (!$blog) {
            throw $this->createNotFoundException();
        }
        
        $comments = $this->getDoctrine()->getEntityManager()->getRepository('BlogBundle:Comment')->getBlogComments($id, false);
        $numComments = count($comments);
        
        $comment = new Comment();
        $form = $this->createForm(new CommentType(), $comment);
        
        return $this->render('Blog/show.html.twig', array(
            'blog' => $blog,
            'num_comments' => $numComments,
            'form'    => $form->createView(),
        ));
    }
    
    public function showCommentsAction($id)
    {
        $comments = $this->getDoctrine()->getEntityManager()->getRepository('BlogBundle:Comment')->getBlogComments($id, false);
        if (!$comments) {
            throw $this->createNotFoundException('tt');
        }
        
        return new Response(json_encode($comments));
    }
}