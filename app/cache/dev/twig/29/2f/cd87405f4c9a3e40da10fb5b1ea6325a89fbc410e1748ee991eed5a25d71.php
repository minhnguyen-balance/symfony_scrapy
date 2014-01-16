<?php

/* BalanceScrapyBundle::layout.html.twig */
class __TwigTemplate_292fcd87405f4c9a3e40da10fb5b1ea6325a89fbc410e1748ee991eed5a25d71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>
        ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 14
        echo "    </title>

    <!-- Bootstrap core CSS -->

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
</head>

<body>
<div id=\"wrap\">
    <!-- Fixed navbar -->
    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">Balance Spider</a>
            </div>
            <div class=\"\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">Home</a></li>
                    <li><a href=\"#about\">List Sites</a></li>
                    <li><a href=\"#contact\">List Products</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Settings <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li class=\"divider\"></li>
                            <li class=\"dropdown-header\">Nav header</li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"container\">
        ";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "
    </div> <!-- /container -->

</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "
</body>
</html>
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "            Balance - Scrapy Spider
        ";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/balancescrapy/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Custom styles for this template -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/balancescrapy/css/navbar-fixed-top.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
        // line 64
        echo "        ";
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/balancescrapy/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "BalanceScrapyBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 74,  138 => 73,  134 => 64,  131 => 63,  125 => 21,  119 => 19,  116 => 18,  111 => 12,  108 => 11,  101 => 76,  99 => 73,  89 => 65,  87 => 63,  45 => 23,  43 => 18,  37 => 14,  35 => 11,  23 => 1,);
    }
}
