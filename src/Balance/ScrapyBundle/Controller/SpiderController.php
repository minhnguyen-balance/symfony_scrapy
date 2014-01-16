<?php

namespace Balance\ScrapyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SpiderController extends Controller
{
    public function indexAction()
    {
        return $this->render('BalanceScrapyBundle:Spider:index.html.twig', array('currentUrl'=>$this->getRequest()->getUri()));
    }
    public function contentAction()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost:6800/items/australia_wine/winespider/87c4f62a7e9311e397dc70188b03423a.json");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return new Response(($response));
    }
}
