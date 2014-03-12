<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('EdahiraDahiraBundle:Index:index.html.twig', array('name' => 'moi'));
    }
}
