<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminPanelController extends Controller
{
    /**
     * @Route("/admin_panel", name="admin_panel")
     */
    public function adminPanelAction()
    {
        $user=$this->getUser();

        return $this->render("::layout.html.twig", array('user'=>$user));
    }
}
