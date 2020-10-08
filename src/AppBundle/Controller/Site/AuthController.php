<?php

namespace AppBundle\Controller\Site;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class AuthController extends Controller
{    
    public function registerAction(){
        return $this->render('site/auth/register.html.twig', [
        ]);
    }

    public function registerPostAction(){

    }

    public function loginAction(){
    return $this->render('site/auth/login.html.twig',[
            
        ]);
    }

    public function loginPost(){

    }

    public function logout(){

    }

    public function profileAction(){
        return $this->render('site/auth/profile.html.twig',[
            
        ]);
    }
}
