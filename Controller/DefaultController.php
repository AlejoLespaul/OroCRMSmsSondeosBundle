<?php

namespace SyMetal\Bundle\SondeosBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/sondeos")
 */
class DefaultController extends Controller {

    /**
     * @Route("/test", name="sondeos")
     */
    public function indexAction(Request $request) {

        // replace this example code with whatever you need
        return $this->render('SyMetalSondeosBundle:default:index.html.twig');
    }

}
