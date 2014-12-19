<?php

namespace Metaclass\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Metaclass\UserBundle\Form\Type\RegistrationType;
use Metaclass\UserBundle\Form\Model\Registration;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MetaclassUserBundle:Default:index.html.twig');
    }

    public function loginAction()
    {
        return $this->render('MetaclassUserBundle:Default:index.html.twig');
    }

    public function registerAction()
    {
        $registration = new Registration();
        $form = $this->createForm(new RegistrationType(), $registration, array(
            'action' => $this->generateUrl('metaclass_user_register'),
        ));
        return $this->render('User/register.html.twig',
            array('form' => $form->createView())
        );
    }
}
