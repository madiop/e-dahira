<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('EdahiraDahiraBundle:Index:index.html.twig');
    }

    public function headerAction()
    {
        return $this->render('EdahiraDahiraBundle:Index:header.html.twig');
    }

    public function homeAction()
    {
        return $this->render('EdahiraDahiraBundle:Index:home.html.twig');
    }
}
