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

        /*$prod=[];
        for($i=0; $i<sizeof($products);$i++)
        {
            if($products[$i]->getCategory() == $category)
                $prod[$i]=$products[$i];
        }*/

        return $this->render("::layout.html.twig", array('user'=>$user, 'schoolYears'=>$schoolYears, 'adverts'=>$adverts, 'articles'=>$articles));
    }
}
