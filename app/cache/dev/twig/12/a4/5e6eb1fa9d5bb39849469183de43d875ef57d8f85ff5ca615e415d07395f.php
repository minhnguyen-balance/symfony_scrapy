<?php

/* BalanceScrapyBundle:Spider:index.html.twig */
class __TwigTemplate_12a45e6eb1fa9d5bb39849469183de43d875ef57d8f85ff5ca615e415d07395f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BalanceScrapyBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BalanceScrapyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/balancescrapy/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/balancescrapy/css/bwizard.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h2>Spider Settings</h2>
    <form class=\"form-horizontal\" role=\"form\">
        <div id=\"wizard\">

            <ol>
                <li>URL Settings</li>
                <li>Category Settings</li>
                <li>Product Settings</li>
            </ol>
            <div>
                <div class=\"form-group\">
                    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">URL spider site</label>
                    <div class=\"col-sm-10\">
                        <input type=\"email\" class=\"form-control\" id=\"inputEmail3\">
                    </div>
                </div>
            </div>
            <div>
                <div class=\"form-group\">
                    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Category Pattern</label>
                    <div class=\"col-sm-10\">
                        <input type=\"email\" class=\"form-control\" id=\"inputEmail3\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Product Pattern</label>
                    <div class=\"col-sm-10\">
                        <input type=\"email\" class=\"form-control\" id=\"inputEmail3\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Next URL Pattern</label>
                    <div class=\"col-sm-10\">
                        <input type=\"email\" class=\"form-control\" id=\"inputEmail3\">
                    </div>
                </div>
            </div>
            <div>
                <p>Product Settings</p>
            </div>

        </div>
    </form>
";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/balancescrapy/js/bwizard.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(\"#wizard\").bwizard();
    </script>
";
    }

    public function getTemplateName()
    {
        return "BalanceScrapyBundle:Spider:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 54,  101 => 53,  98 => 52,  51 => 8,  48 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}
