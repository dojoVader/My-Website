<?php

/* layout/blog.twig */
class __TwigTemplate_bff287a711a857e4991c5dc152ea176cec04f6dca8bf202cde35ea9e87e0b252 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        echo twig_include($this->env, $context, "layout/elements/header.twig");
        echo "
    </head>
    <body>
        <div class=\"container-fluid\" id=\"minimal\">
            <header class=\"blog-pages\">
                <div class=\"col-md-12 col-xs-12 col-sm-12 nav-link\">
                   ";
        // line 10
        $this->displayBlock('nav', $context, $blocks);
        // line 11
        echo "                </div>
            </header>
            ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "        </div>
        <footer>
            <div class=\"header-container headroom headroom--not-top headroom--pinned\" id=\"header-container\">
           
   ";
        // line 18
        echo twig_include($this->env, $context, "layout/elements/footer.twig");
        echo "    
            </div>
        </footer>
    </body>
</html>";
    }

    // line 10
    public function block_nav($context, array $blocks = array())
    {
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout/blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  58 => 10,  49 => 18,  43 => 14,  41 => 13,  37 => 11,  35 => 10,  26 => 4,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         {{ include("layout/elements/header.twig") }}*/
/*     </head>*/
/*     <body>*/
/*         <div class="container-fluid" id="minimal">*/
/*             <header class="blog-pages">*/
/*                 <div class="col-md-12 col-xs-12 col-sm-12 nav-link">*/
/*                    {% block nav %}{% endblock %}*/
/*                 </div>*/
/*             </header>*/
/*             {% block content %}{% endblock %}*/
/*         </div>*/
/*         <footer>*/
/*             <div class="header-container headroom headroom--not-top headroom--pinned" id="header-container">*/
/*            */
/*    {{include("layout/elements/footer.twig")}}    */
/*             </div>*/
/*         </footer>*/
/*     </body>*/
/* </html>*/
