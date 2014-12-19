<?php

namespace Metaclass\BandInfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MetaclassBandInfoBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function searchAction(Request $request)
    {
        $form = $this->get('form.factory')->createNamedBuilder(
                '',
                'form',
                array('message' => 'Type band name here'),
                array('csrf_protection' => false)
            )->setMethod('GET')
            ->add('name', 'text')
            ->getForm();

        if ($bandName = $request->query->get('name')) {
            $searchUrl = "https://api.spotify.com/v1/search?q=$bandName&type=artist";

            $client = new GuzzleHttp\Client();
            $data = $client->get($searchUrl)->json();

            $artistName = $data['artists']['items'][0]['name'];
            $artistImgUrl = $data['artists']['items'][0]['images'][0]['url'];

            return $this->render('BandInfo/info.html.twig', array(
                'artist' => $artistName,
                'image_url' => $artistImgUrl
            ));
        }
        
        return $this->render('BandInfo/search.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
