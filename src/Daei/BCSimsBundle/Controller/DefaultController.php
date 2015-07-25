<?php

namespace Daei\BCSimsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BCSimsBundle:Default:index.html.twig', array('name' => $name));
    }
}
