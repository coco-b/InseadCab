<?php


namespace CabBundle\Controller;





use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HomeController extends Controller{

    public function homeAction()
    {
        return $this->render('@CabBundle/home.html.twig');
    }
}