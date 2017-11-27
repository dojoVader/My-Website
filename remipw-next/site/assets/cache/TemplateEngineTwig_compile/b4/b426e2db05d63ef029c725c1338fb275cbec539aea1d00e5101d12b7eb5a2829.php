<?php

/* basic-page.twig */
class __TwigTemplate_c3857150df74a4aaba506c97479c4fb9ac54fe481ee0dd95e5ea5c34d475eb9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/blog.twig", "basic-page.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/blog.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container blog-container\">
    <section class=\"blog\">
        <header class=\"blog-header\">
            <h1>
                ";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "
            </h1>
            <h5 class=\"blog_date\">
                ";
        // line 10
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "published", array()), "F d, Y");
        echo " •  design
            </h5>
            <br>
            </br>
        </header>
        <div class=\"blog_content\">
            <hr class=\"small\" />
             ";
        // line 17
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body", array());
        echo "
             <hr class=\"small\" />

        </div>
    </section>
</div>
";
    }

    // line 25
    public function block_nav($context, array $blocks = array())
    {
        // line 26
        echo " <div class=\"col-md-4 col-xs-4 col-sm-4 prev-nav\">
                        <a href=\"";
        // line 27
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prev", array()), "url", array());
        echo "\">
                            ← Prev
                        </a>
                    </div>
                    <div class=\"col-md-4 col-xs-4 col-sm-4 home-nav\">
                        <a href=\"";
        // line 32
        echo $this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "url", array());
        echo "\">
                            Home
                        </a>
                    </div>
                    <div class=\"col-md-4 col-xs-4 col-sm-4 next-nav\">
                        <a href=\"";
        // line 37
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "next", array()), "url", array());
        echo "\">
                            Next →
                        </a>
                    </div>
";
    }

    public function getTemplateName()
    {
        return "basic-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 37,  79 => 32,  71 => 27,  68 => 26,  65 => 25,  54 => 17,  44 => 10,  38 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/blog.twig' %}*/
/* {% block content %}*/
/* <div class="container blog-container">*/
/*     <section class="blog">*/
/*         <header class="blog-header">*/
/*             <h1>*/
/*                 {{page.title}}*/
/*             </h1>*/
/*             <h5 class="blog_date">*/
/*                 {{page.published|date("F d, Y")}} •  design*/
/*             </h5>*/
/*             <br>*/
/*             </br>*/
/*         </header>*/
/*         <div class="blog_content">*/
/*             <hr class="small" />*/
/*              {{page.body}}*/
/*              <hr class="small" />*/
/* */
/*         </div>*/
/*     </section>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block nav %}*/
/*  <div class="col-md-4 col-xs-4 col-sm-4 prev-nav">*/
/*                         <a href="{{page.prev.url}}">*/
/*                             ← Prev*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-4 col-sm-4 home-nav">*/
/*                         <a href="{{homepage.url}}">*/
/*                             Home*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-4 col-sm-4 next-nav">*/
/*                         <a href="{{page.next.url}}">*/
/*                             Next →*/
/*                         </a>*/
/*                     </div>*/
/* {% endblock %}*/
/* */
