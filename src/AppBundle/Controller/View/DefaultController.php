<?php

namespace AppBundle\Controller\View;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function mainAction(Request $request)
    {
        return $this->render('AppBundle:Default:index.html.twig');
    }
}
