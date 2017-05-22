<?php


namespace CabBundle\Controller;





use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HomeController extends Controller{

    public function homeAction()
    {
        return $this->render('@Cab/home.html.twig');
    }


    public function peopleAction()
    {
        return $this->render('@Cab/people.html.twig');
    }

    public function communityAction()
    {
        return $this->render('@Cab/community.html.twig');
    }

    public function newtripAction()
    {
        return $this->render('@Cab/newtrip.html.twig');
    }

    public function tripAction()
    {
        return $this->render('@Cab/trip.html.twig');
    }

    public function newcommunityAction()
    {
        return $this->render('@Cab/newcommunity.html.twig');
    }
}