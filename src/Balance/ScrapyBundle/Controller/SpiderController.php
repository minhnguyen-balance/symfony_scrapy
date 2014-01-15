<?php

namespace Balance\ScrapyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SpiderController extends Controller
{
    public function indexAction()
    {
        return $this->render('BalanceScrapyBundle:Spider:index.html.twig', array());
    }
}
