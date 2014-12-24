<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/user')) {
            // metaclass_user_login
            if ($pathinfo === '/user/login') {
                return array (  '_controller' => 'Metaclass\\UserBundle\\Controller\\DefaultController::loginAction',  '_route' => 'metaclass_user_login',);
            }

            // metaclass_user_register
            if ($pathinfo === '/user/register') {
                return array (  '_controller' => 'Metaclass\\UserBundle\\Controller\\DefaultController::registerAction',  '_route' => 'metaclass_user_register',);
            }

        }

        if (0 === strpos($pathinfo, '/bandinfo')) {
            // metaclass_band_info_homepage
            if ($pathinfo === '/bandinfo') {
                return array (  '_controller' => 'Metaclass\\BandInfoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'metaclass_band_info_homepage',);
            }

            // metaclass_band_info_search
            if ($pathinfo === '/bandinfo/search') {
                return array (  '_controller' => 'Metaclass\\BandInfoBundle\\Controller\\DefaultController::searchAction',  '_route' => 'metaclass_band_info_search',);
            }

            // metaclass_band_info_info
            if ($pathinfo === '/bandinfo/info') {
                return array (  '_controller' => 'Metaclass\\BandInfoBundle\\Controller\\DefaultController::infoAction',  '_route' => 'metaclass_band_info_info',);
            }

        }

        // BlogBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BlogBundle_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'BlogBundle_homepage');
            }

            return array (  '_controller' => 'BlogFarce\\BlogBundle\\Controller\\PageController::indexAction',  '_route' => 'BlogBundle_homepage',);
        }
        not_BlogBundle_homepage:

        // BlogBundle_contact
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_BlogBundle_contact;
            }

            return array (  '_controller' => 'BlogFarce\\BlogBundle\\Controller\\PageController::contactAction',  '_route' => 'BlogBundle_contact',);
        }
        not_BlogBundle_contact:

        // BlogBundle_about
        if ($pathinfo === '/about') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BlogBundle_about;
            }

            return array (  '_controller' => 'BlogFarce\\BlogBundle\\Controller\\PageController::aboutAction',  '_route' => 'BlogBundle_about',);
        }
        not_BlogBundle_about:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
