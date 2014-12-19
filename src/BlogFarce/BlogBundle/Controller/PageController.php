<?php
// src/BlogFarce/BlogBundle/Controller/PageController.php

namespace BlogFarce\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogFarce\BlogBundle\Entity\Enquiry;
use BlogFarce\BlogBundle\Form\EnquiryType;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogBundle:Page:index.html.twig');
    }
    
    public function contactAction()
    {
        $session = $this->getRequest()->getSession();
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);
        $submittedNotice = null;
        $request = $this->getRequest();
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
