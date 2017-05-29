<?php

namespace Acme\UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
	 //test APL 29052017
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
}
