<?php

/* blog-category.twig */
class __TwigTemplate_f9d8429981c26d54a4f1368738cc18586f3c76ca66f7941d7e960b9b1d4b8c4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/notes.twig", "blog-category.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/notes.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container archive-container\">
    <section>
        <div class=\"article-archives col-md-8 col-xs-12 col-sm-12\">
            <h2>
                Articles - (";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo ")
            </h2>
            <h3 style=\"line-height: 1.5\">
                <em>
                    These are most of my ramblings and notes I have scribbled so far
                    <br/>
                    Most are based on researchs or pure interest and my represent only my opinions
                </em>
            </h3>
        </div>
        <div class=\"clearfix\">
        </div>

        <div class=\"col-md-12 archives col-xs-12 col-sm-12\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 22
            echo "            <div class=\"article_listing\">
                <span class=\"article_date\">
                    ";
            // line 24
            echo twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published", array()), "F d, Y");
            echo "
                </span>
                <h2 class=\"article_title\">
                    <a href=\"";
            // line 27
            echo $this->getAttribute($context["post"], "url", array());
            echo "\">
                        ";
            // line 28
            echo $this->getAttribute($context["post"], "title", array());
            echo "
                    </a>
                </h2>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "           
        </div>
        <div class=\"clearfix\">
        </div>
        <div class=\"pagination\">
            ";
        // line 38
        echo $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "renderPager", array(), "method");
        echo "
        </div>
    </section>
  
</div>
  ";
    }

    // line 45
    public function block_nav($context, array $blocks = array())
    {
        // line 46
        echo "         <a href=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "get", array(0 => "/notes"), "method"), "url", array());
        echo "\" class=\"nav-header\">
                <span class=\"picker-upper\">←</span> Back</a>
  ";
    }

    public function getTemplateName()
    {
        return "blog-category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 46,  101 => 45,  91 => 38,  84 => 33,  73 => 28,  69 => 27,  63 => 24,  59 => 22,  55 => 21,  38 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/notes.twig' %}*/
/* {% block content %}*/
/* <div class="container archive-container">*/
/*     <section>*/
/*         <div class="article-archives col-md-8 col-xs-12 col-sm-12">*/
/*             <h2>*/
/*                 Articles - ({{page.title}})*/
/*             </h2>*/
/*             <h3 style="line-height: 1.5">*/
/*                 <em>*/
/*                     These are most of my ramblings and notes I have scribbled so far*/
/*                     <br/>*/
/*                     Most are based on researchs or pure interest and my represent only my opinions*/
/*                 </em>*/
/*             </h3>*/
/*         </div>*/
/*         <div class="clearfix">*/
/*         </div>*/
/* */
/*         <div class="col-md-12 archives col-xs-12 col-sm-12">*/
/*         {% for post in posts %}*/
/*             <div class="article_listing">*/
/*                 <span class="article_date">*/
/*                     {{post.published|date("F d, Y")}}*/
/*                 </span>*/
/*                 <h2 class="article_title">*/
/*                     <a href="{{post.url}}">*/
/*                         {{post.title}}*/
/*                     </a>*/
/*                 </h2>*/
/*             </div>*/
/*         {% endfor %}*/
/*            */
/*         </div>*/
/*         <div class="clearfix">*/
/*         </div>*/
/*         <div class="pagination">*/
/*             {{posts.renderPager()}}*/
/*         </div>*/
/*     </section>*/
/*   */
/* </div>*/
/*   {% endblock %}*/
/* */
/*   {% block nav %}*/
/*          <a href="{{pages.get("/notes").url}}" class="nav-header">*/
/*                 <span class="picker-upper">←</span> Back</a>*/
/*   {% endblock %}*/
