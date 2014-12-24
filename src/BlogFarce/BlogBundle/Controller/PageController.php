<?php
// src/BlogFarce/BlogBundle/Controller/PageController.php

namespace BlogFarce\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogFarce\BlogBundle\Entity\Enquiry;
use BlogFarce\BlogBundle\Form\EnquiryType;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    public function indexAction()
    {
        $blogs = $this->getDoctrine()->getRepository('BlogBundle:Blog')->getLatestBlogs();
        return $this->render('Page/index.html.twig', array(
            'blogs' => $blogs
        ));
    }
    
    public function contactAction(Request $request)
    {
        $session = $request->getSession();
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);
        $submittedNotice = null;
        if ($request->getMethod() == 'POST') {
            $submittedNotice = 'it been submitted yo';
            $form->bind($request);
            
            if($form->isValid()) {
                $session->set('submittedNotice', $submittedNotice);
                return $this->redirect($this->generateUrl('BlogBundle_contact'));
            }
        }
        if ($submittedNotice = $session->get('submittedNotice', null)) {
            $session->remove('submittedNotice');
        }
        return $this->render('Page/contact.html.twig', array(
            'form' => $form->createView(),
            'submittedNotice' => $submittedNotice,
        ));
    }
    
    public function aboutAction()
    {
        return $this->render('Page/about.html.twig');
    }
}
