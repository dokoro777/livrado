<?php

namespace GR\RestaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/restaurant")
     */
    public function indexAction()
    {
        return $this->render('@GRRestaurant/Default/index.html.twig');
    }
}
