<?php

namespace HomePageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EventListController extends Controller
{
    /**
     * @Route("/eventList")
     */
    public function indexAction()
    {
        return $this->render('HomePageBundle:Event:eventList.html.twig');
    }
}