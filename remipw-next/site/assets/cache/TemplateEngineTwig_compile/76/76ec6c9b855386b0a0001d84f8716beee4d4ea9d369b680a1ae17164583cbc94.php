<?php

/* layout/notes.twig */
class __TwigTemplate_a5c78fc00fceaa89b6150a3bc5ce3aa8417b438c897e8049d739908bc5412599 extends Twig_Template
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
        // line 5
        echo twig_include($this->env, $context, "layout/elements/header.twig");
        echo "
</head>

<body>

    <div class=\"container-fluid\" id=\"minimal\">
        <header class=\"article-pages\">
       ";
        // line 12
        $this->displayBlock('nav', $context, $blocks);
        // line 13
        echo "        </header>
       ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "

    </div>
    <footer>
        <div class=\"header-container headroom headroom--not-top headroom--pinned\" id=\"header-container\">

        ";
        // line 21
        echo twig_include($this->env, $context, "layout/elements/footer.twig");
        echo "


        </div>
    </footer>
</body>

</html>";
    }

    // line 12
    public function block_nav($context, array $blocks = array())
    {
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout/notes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  64 => 12,  52 => 21,  44 => 15,  42 => 14,  39 => 13,  37 => 12,  27 => 5,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*    {{include("layout/elements/header.twig")}}*/
/* </head>*/
/* */
/* <body>*/
/* */
/*     <div class="container-fluid" id="minimal">*/
/*         <header class="article-pages">*/
/*        {% block nav %}{% endblock %}*/
/*         </header>*/
/*        {% block content %}{% endblock %}*/
/* */
/* */
/*     </div>*/
/*     <footer>*/
/*         <div class="header-container headroom headroom--not-top headroom--pinned" id="header-container">*/
/* */
/*         {{include("layout/elements/footer.twig")}}*/
/* */
/* */
/*         </div>*/
/*     </footer>*/
/* </body>*/
/* */
/* </html>*/
