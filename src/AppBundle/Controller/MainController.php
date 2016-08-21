<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $user=$this->getUser();

        $schoolYears=$this->getDoctrine()->getRepository('AppBundle:Year')->findAll();

        $adverts=$this->getDoctrine()->getRepository('AppBundle:Advertisement')->findAll();

        $articles=$this->getDoctrine()->getRepository('AppBundle:Article')->findAll();


        return $this->render("::index.html.twig", array('user'=>$user, 'schoolYears'=>$schoolYears, 'adverts'=>$adverts, 'articles'=>$articles));
    }

/**
 * @Route("/gallery/{yearID}")
 */
public function galleryAction($yearID)
{
    $user=$this->getUser();

    $schoolYears=$this->getDoctrine()->getRepository('AppBundle:Year')->findAll();

    $articles=$this->getDoctrine()->getRepository('AppBundle:Article')->findAll();

    $year=$this->getDoctrine()->getRepository('AppBundle:Year')->find($yearID);


    return $this->render("::gallery.html.twig", array('user'=>$user, 'schoolYears'=>$schoolYears, 'articles'=>$articles, 'year'=>$year));
}

}
