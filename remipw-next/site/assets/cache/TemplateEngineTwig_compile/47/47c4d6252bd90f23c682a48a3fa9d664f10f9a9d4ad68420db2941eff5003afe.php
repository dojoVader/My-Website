<?php

/* layout/elements/footer.twig */
class __TwigTemplate_4f4ecc11bf1ea7d88dcc89699976c553fdcc5800d8bd1667156b526e1158e50a extends Twig_Template
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
        echo "<!-- Site navigation -->
            <nav class=\"site-nav pull-right\">
                <div class=\"trigger\">
                    <a class=\"page-link\" href=\"";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "get", array(0 => "/about"), "method"), "url", array());
        echo "\">
                        <span>{</span> About
                        <span>}</span>
                    </a>
                    <a class=\"page-link\" href=\"";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "get", array(0 => "/notes"), "method"), "url", array());
        echo "\">
                        <span>{</span> Journals
                        <span>}</span>
                    </a>
               
                    <a class=\"page-link\" target=\"_blank\" href=\"https://ng.linkedin.com/in/okeowo-aderemi-82b75730\">
                        <span>{</span> Linkedin
                        <span>}</span>
                    </a>
                    <a class=\"twitter page-link\" target=\"_blank\" href=\"https://twitter.com/qtguru\">
                        <span>{</span> Twitter
                        <span>}</span>

                    </a>
                </div>
            </nav>";
    }

    public function getTemplateName()
    {
        return "layout/elements/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  24 => 4,  19 => 1,);
    }
}
/* <!-- Site navigation -->*/
/*             <nav class="site-nav pull-right">*/
/*                 <div class="trigger">*/
/*                     <a class="page-link" href="{{pages.get('/about').url}}">*/
/*                         <span>{</span> About*/
/*                         <span>}</span>*/
/*                     </a>*/
/*                     <a class="page-link" href="{{pages.get('/notes').url}}">*/
/*                         <span>{</span> Journals*/
/*                         <span>}</span>*/
/*                     </a>*/
/*                */
/*                     <a class="page-link" target="_blank" href="https://ng.linkedin.com/in/okeowo-aderemi-82b75730">*/
/*                         <span>{</span> Linkedin*/
/*                         <span>}</span>*/
/*                     </a>*/
/*                     <a class="twitter page-link" target="_blank" href="https://twitter.com/qtguru">*/
/*                         <span>{</span> Twitter*/
/*                         <span>}</span>*/
/* */
/*                     </a>*/
/*                 </div>*/
/*             </nav>*/
