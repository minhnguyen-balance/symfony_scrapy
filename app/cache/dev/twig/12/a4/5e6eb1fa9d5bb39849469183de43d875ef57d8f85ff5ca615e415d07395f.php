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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/balancescrapy/css/bootstrap.icon-large.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/balancescrapy/css/bwizard.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
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
        <div id=\"spider-controls\">
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["currentUrl"]) ? $context["currentUrl"] : $this->getContext($context, "currentUrl")), "html", null, true);
        echo "\" onClick=\"window.location.reload\"><i class=\"icon-large icon-refresh\"></i></a>
            <br />
            List of running spiders
            <ul id=\"running_spiders\"></ul>
            List of finished spiders (First is latest)
            <ul id=\"finished_spiders\"></ul>
            List of available spiders
            <ul id=\"available_spiders\"></ul>
        </div>
    </form>
";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/balancescrapy/js/bwizard.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(\"#wizard\").bwizard();
        // Scrapyd URL, i.e. http://localhost:6800/
        var scrapyd_url = 'http://localhost:6800/';
        // Your scrapyd project name
        var project_name = 'australia_wine';

        var all_spiders = new Array();
        var running_spiders = new Array();
        var finished_spiders = new Array();

        \$(document).ready(function() {
            \$(\".start_spider\").live('click', function() {
                spider_name = \$(this).attr('rel');
                \$.post(scrapyd_url + 'schedule.json', {
                    project : project_name,
                    spider : spider_name
                });
                location.href = \"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["currentUrl"]) ? $context["currentUrl"] : $this->getContext($context, "currentUrl")), "html", null, true);
        echo "\";
            });

            \$(\".stop_spider\").live('click', function() {
                job_id = \$(this).attr('rel');
                \$.post(scrapyd_url + 'cancel.json', {
                    project : project_name,
                    job : job_id
                });
                location.href = \"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["currentUrl"]) ? $context["currentUrl"] : $this->getContext($context, "currentUrl")), "html", null, true);
        echo "\";
            });
            \$(\".delete_spider\").live('click', function() {
                \$.post(scrapyd_url + 'delproject.json', {
                    project : project_name
                });
                location.href = \"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["currentUrl"]) ? $context["currentUrl"] : $this->getContext($context, "currentUrl")), "html", null, true);
        echo "\";
            });
            function listjobs() {
                \$.getJSON(scrapyd_url + 'listjobs.json?project=' + project_name, function(data) {
                    var finished_items = [];
                    \$.each(data.finished, function(key, val) {
                        finished_spiders.push(val.spider);
                        finished_items.push('<li>' + val.spider + '&nbsp;&nbsp;<a href=\"' + scrapyd_url + 'logs/' + project_name + '/' + val.spider + '/' + val.id + '.log\">log</a>' + '&nbsp;&nbsp;<a href=\"' + scrapyd_url + 'items/' + project_name + '/' + val.spider + '/' + val.id + '.jl\">items</a></li>');
                    });
                    \$('#finished_spiders').append(finished_items.join(''));

                    if (data.running.length > 0) {
                        var running_items = [];
                        \$.each(data.running, function(key, val) {
                            running_spiders.push(val.spider);
                            running_items.push('<li>' + val.spider + '&nbsp;&nbsp;<a href=\"' + scrapyd_url + 'logs/' + project_name + '/' + val.spider + '/' + val.id + '.log\">log</a>&nbsp;&nbsp|&nbsp;&nbsp<a href=\"#\" class=\"stop_spider\" rel=\"' + val.id + '\">stop</a></li>');
                        });
                        \$('#running_spiders').append(running_items.join(''));
                    } else {
                        \$('#running_spiders').append('<li>No Running spiders</li>');
                    }

                });
            }

            listjobs();
            /*listitems();
            function listitems() {
                \$.get('http://127.0.0.1/symfony_scrapy/web/app_dev.php/spider/content', function( data ) {
                    var json = \$.parseJSON(data);
                    \$.each(json, function(key, val) {
                        //console.log(val.name);
                    });
                });

            }*/
            // Get spiders list
            \$.getJSON(scrapyd_url + 'listspiders.json?project=' + project_name, function(data) {
                var items = [];
                //console.log(data);
                \$.each(data.spiders, function(key, val) {
                    items.push('<li id=\"' + val + '\">' + val + '&nbsp;&nbsp;<a href=\"#\" class=\"start_spider\" rel=\"'+ val + '\">start</a>&nbsp;&nbsp;<a href=\"#\" class=\"delete_spider\" rel=\"'+ val + '\">delete</a></li>');
                });

                \$('#available_spiders').append(items.join(''));
            });

        });
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
        return array (  166 => 99,  157 => 93,  145 => 84,  123 => 65,  118 => 64,  115 => 63,  100 => 52,  55 => 9,  52 => 8,  46 => 6,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}
