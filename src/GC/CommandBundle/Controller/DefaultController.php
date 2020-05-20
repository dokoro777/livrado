<?php

namespace GC\CommandBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/commande")
     */
    public function indexAction()
    {
        return $this->render('@GCCommand/Default/index.html.twig');
    }
}
