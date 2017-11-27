<?php

/* layout/ui.twig */
class __TwigTemplate_b5d34799be11c2993218127dc6c90375994c12758c8a19f6d3e64b27508eb8c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        <header id=\"pageIntro\">
            <div class=\"bio_panel\">
                <div class=\"bio_section col-md-6\">
                    <h1>Okeowo Aderemi</h1>
                    <h2>";
        // line 15
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body", array());
        echo "</h2>
                </div>
            </div>
            <div class=\"clearfix\"></div>


        </header>
        <section id=\"page-body\">
            <div class=\"container\">
                <div id=\"intro\" class=\"col-md-7 col-lg-7\">
                    <h1>About me</h1>
                    <h2>
                        ";
        // line 27
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
        echo "
                    </h2>
                </div>
                <div class=\"block_articles col-md-5 col-lg-5\">
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 32
            echo "                    <div class=\"article_listing\">
                        <span class=\"article_date\"> ";
            // line 33
            echo twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published", array()), "F d, Y");
            echo "</span>
                        <h2 class=\"article_title\">
                            <a href=\"";
            // line 35
            echo $this->getAttribute($context["post"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["post"], "title", array());
            echo "</a>
                        </h2>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    
                </div>
                <div class=\"clearfix\"></div>
            </div>

        </section>

    </div>
    <footer>
        <div class=\"header-container headroom headroom--not-top headroom--pinned\" id=\"header-container\">

   ";
        // line 50
        echo twig_include($this->env, $context, "layout/elements/footer.twig");
        echo "           

        </div>
    </footer>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "layout/ui.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 50,  84 => 39,  72 => 35,  67 => 33,  64 => 32,  60 => 31,  53 => 27,  38 => 15,  25 => 5,  19 => 1,);
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
/*  */
/*     <div class="container-fluid" id="minimal">*/
/*         <header id="pageIntro">*/
/*             <div class="bio_panel">*/
/*                 <div class="bio_section col-md-6">*/
/*                     <h1>Okeowo Aderemi</h1>*/
/*                     <h2>{{ page.body }}</h2>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/* */
/* */
/*         </header>*/
/*         <section id="page-body">*/
/*             <div class="container">*/
/*                 <div id="intro" class="col-md-7 col-lg-7">*/
/*                     <h1>About me</h1>*/
/*                     <h2>*/
/*                         {{ page.summary }}*/
/*                     </h2>*/
/*                 </div>*/
/*                 <div class="block_articles col-md-5 col-lg-5">*/
/*                     {% for post in posts %}*/
/*                     <div class="article_listing">*/
/*                         <span class="article_date"> {{post.published|date("F d, Y")}}</span>*/
/*                         <h2 class="article_title">*/
/*                             <a href="{{post.url}}">{{post.title}}</a>*/
/*                         </h2>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*                     */
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/* */
/*         </section>*/
/* */
/*     </div>*/
/*     <footer>*/
/*         <div class="header-container headroom headroom--not-top headroom--pinned" id="header-container">*/
/* */
/*    {{include("layout/elements/footer.twig")}}           */
/* */
/*         </div>*/
/*     </footer>*/
/* </body>*/
/* */
/* </html>*/
