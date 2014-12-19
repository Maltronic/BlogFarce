<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('metaclass_band_info_homepage', new Route('/bandinfo', array(
    '_controller' => 'MetaclassBandInfoBundle:Default:index',
)));

$collection->add('metaclass_band_info_search', new Route('/bandinfo/search', array(
    '_controller' => 'MetaclassBandInfoBundle:Default:search',
)));

$collection->add('metaclass_band_info_info', new Route('/bandinfo/info', array(
    '_controller' => 'MetaclassBandInfoBundle:Default:info',
)));

return $collection;
