<?php
namespace BlogFarce\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use BlogFarce\BlogBundle\Entity\Comment;
use BlogFarce\BlogBundle\Form\CommentType;


class CommentController extends Controller
{
    
    public function createAction($id)
    {
        $blog = $this->getBlog($id);
        
        $comment = new Comment();
        $comment->setBlog($blog);
        $form = $this->createForm(new CommentType(), $comment);
        $form->submit($form);
        
        if ($form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();
            
            return new Response(json_encode('success'));
        }
        
        return new Response(json_encode($form->getErrors()));
    }
    
    protected function getBlog($id)
    {
        $blog = $this->getDoctrine()->getEntityManager()->getRepository('BlogBundle:Blog')->find($id);
        if (!$blog) {
            throw new HttpException(500);
        }
        
        return $blog;
    }
}
