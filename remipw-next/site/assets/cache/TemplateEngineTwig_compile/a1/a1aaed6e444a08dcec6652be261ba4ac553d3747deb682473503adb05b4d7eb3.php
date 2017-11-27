<?php

/* blog-posts.twig */
class __TwigTemplate_b28421e3e0e9696d22364570844b11935109ff9266fe1dc70af088693282d1e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/notes.twig", "blog-posts.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
                Articles
            </h2>
            <h3 style=\"line-height: 1.5\">
                <em>
                    This is all of the writing I’ve published on this domain.
                    <br/>
                    One day there will be enough for a search
                            bar.
                </em>
            </h3>
        </div>
        <div class=\"clearfix\">
        </div>
        <div class=\"col-md-2 col-sm-12 col-xs-12 article-category visible-md-block visible-lg-block\">
            <h2>
                <em>
                    Category
                </em>
            </h2>
            <ul>
                 ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 28
            echo "                <li>

                    <a href=\"";
            // line 30
            echo $this->getAttribute($context["category"], "url", array());
            echo "\">
                        ";
            // line 31
            echo $this->getAttribute($context["category"], "title", array());
            echo "
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "               
            </ul>
        </div>
        <div class=\"col-md-8 archives col-xs-12 col-sm-12\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 40
            echo "            <div class=\"article_listing\">
                <span class=\"article_date\">
                    ";
            // line 42
            echo twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published", array()), "F d, Y");
            echo "
                </span>
                <h2 class=\"article_title\">
                    <a href=\"";
            // line 45
            echo $this->getAttribute($context["post"], "url", array());
            echo "\">
                        ";
            // line 46
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
        // line 51
        echo "           
        </div>
        <div class=\"clearfix\">
        </div>
        <div class=\"pagination\">
            ";
        // line 56
        echo $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "renderPager", array(), "method");
        echo "
        </div>
    </section>
  
</div>
  ";
    }

    public function getTemplateName()
    {
        return "blog-posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 56,  114 => 51,  103 => 46,  99 => 45,  93 => 42,  89 => 40,  85 => 39,  79 => 35,  69 => 31,  65 => 30,  61 => 28,  57 => 27,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/notes.twig' %}*/
/* {% block content %}*/
/* <div class="container archive-container">*/
/*     <section>*/
/*         <div class="article-archives col-md-8 col-xs-12 col-sm-12">*/
/*             <h2>*/
/*                 Articles*/
/*             </h2>*/
/*             <h3 style="line-height: 1.5">*/
/*                 <em>*/
/*                     This is all of the writing I’ve published on this domain.*/
/*                     <br/>*/
/*                     One day there will be enough for a search*/
/*                             bar.*/
/*                 </em>*/
/*             </h3>*/
/*         </div>*/
/*         <div class="clearfix">*/
/*         </div>*/
/*         <div class="col-md-2 col-sm-12 col-xs-12 article-category visible-md-block visible-lg-block">*/
/*             <h2>*/
/*                 <em>*/
/*                     Category*/
/*                 </em>*/
/*             </h2>*/
/*             <ul>*/
/*                  {% for category in categories %}*/
/*                 <li>*/
/* */
/*                     <a href="{{category.url}}">*/
/*                         {{category.title}}*/
/*                     </a>*/
/*                 </li>*/
/*             {% endfor %}*/
/*                */
/*             </ul>*/
/*         </div>*/
/*         <div class="col-md-8 archives col-xs-12 col-sm-12">*/
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
