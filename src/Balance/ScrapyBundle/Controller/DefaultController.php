<?php

namespace Balance\ScrapyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BalanceScrapyBundle:Default:index.html.twig', array());
    }
    public function spiderAction($name)
    {
        return $this->render('BalanceScrapyBundle:Default:index.html.twig', array('name' => $name));
    }
}
