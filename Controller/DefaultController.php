<?php

namespace Zertz\BugBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZertzBugBundle:Default:index.html.twig', array('name' => $name));
    }
}
