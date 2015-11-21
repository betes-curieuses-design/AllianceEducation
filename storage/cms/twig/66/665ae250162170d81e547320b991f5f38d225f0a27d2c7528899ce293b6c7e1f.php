<?php

/* C:\wamp\www\betes\AllianceEducation/themes/ae110815/partials/blogs/default.htm */
class __TwigTemplate_26f081f7c3e6e86c4acffab9c66e18e08d4a1223a9f1dfe2d57c393da4b3f8e2 extends Twig_Template
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
        $context["posts"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "posts", array());
        // line 2
        echo "
<ul class=\"post-list\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "        <li>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <h4><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h4>

                    <small>
                        Date de parution : ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "d-m-Y"), "html", null, true);
            echo "
                        ";
            // line 12
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                echo " dans : ";
            }
            // line 13
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 15
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
                    </small>
                    ";
            // line 18
            if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                // line 19
                echo "                        <div class=\"featured-images text-center\">
                            <img class=\"img-responsive\"
                                 data-src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array()), "filename", array()), "html", null, true);
                echo "\"
                                 src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array()), "path", array()), "html", null, true);
                echo "\"
                                 alt=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array()), "description", array()), "html", null, true);
                echo "\"/>

                        </div>
                    ";
            }
            // line 27
            echo "                    <p class=\"all-top-buffer\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\"
                       class=\"btn btn-primary btn-sm pull-right\">&nbsp;&nbsp;&nbsp;Lire&nbsp;&nbsp;&nbsp;</a>
                </div>
            </div>

        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "        <li class=\"no-data\">Aucun sujet trouvé</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</ul>

";
        // line 39
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > 1)) {
            // line 40
            echo "    <ul class=\"pagination\">
        ";
            // line 41
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) > 1)) {
                // line 42
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 44
            echo "
        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 46
                echo "            <li class=\"";
                echo ((($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 47
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
        ";
            // line 51
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()))) {
                // line 52
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 54
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/themes/ae110815/partials/blogs/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 54,  186 => 52,  184 => 51,  181 => 50,  170 => 47,  165 => 46,  161 => 45,  158 => 44,  152 => 42,  150 => 41,  147 => 40,  145 => 39,  141 => 37,  134 => 35,  122 => 28,  117 => 27,  110 => 23,  106 => 22,  102 => 21,  98 => 19,  96 => 18,  92 => 16,  78 => 15,  69 => 14,  51 => 13,  47 => 12,  43 => 11,  35 => 8,  30 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set posts = __SELF__.posts %}*/
/* */
/* <ul class="post-list">*/
/*     {% for post in posts %}*/
/*         <li>*/
/*             <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                     <h4><a href="{{ post.url }}">{{ post.title }}</a></h4>*/
/* */
/*                     <small>*/
/*                         Date de parution : {{ post.published_at|date('d-m-Y') }}*/
/*                         {% if post.categories.count %} dans : {% endif %}*/
/*                         {% for category in post.categories %}*/
/*                             <a href="{{ category.url }}">{{ category.name }}</a>{% if not loop.last %}, {% endif %}*/
/*                         {% endfor %}*/
/* */
/*                     </small>*/
/*                     {% if post.featured_images.count %}*/
/*                         <div class="featured-images text-center">*/
/*                             <img class="img-responsive"*/
/*                                  data-src="{{ post.featured_images.0.filename }}"*/
/*                                  src="{{ post.featured_images.0.path }}"*/
/*                                  alt="{{ post.featured_images.0.description }}"/>*/
/* */
/*                         </div>*/
/*                     {% endif %}*/
/*                     <p class="all-top-buffer">{{ post.summary }}</p>*/
/*                     <a href="{{ post.url }}"*/
/*                        class="btn btn-primary btn-sm pull-right">&nbsp;&nbsp;&nbsp;Lire&nbsp;&nbsp;&nbsp;</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </li>*/
/*     {% else %}*/
/*         <li class="no-data">Aucun sujet trouvé</li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
/* {% if posts.lastPage > 1 %}*/
/*     <ul class="pagination">*/
/*         {% if posts.currentPage > 1 %}*/
/*             <li><a href="{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}">&larr; Prev</a></li>*/
/*         {% endif %}*/
/* */
/*         {% for page in 1..posts.lastPage %}*/
/*             <li class="{{ posts.currentPage == page ? 'active' : null }}">*/
/*                 <a href="{{ this.page.baseFileName|page({ (pageParam): page }) }}">{{ page }}</a>*/
/*             </li>*/
/*         {% endfor %}*/
/* */
/*         {% if posts.lastPage > posts.currentPage %}*/
/*             <li><a href="{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}">Next &rarr;</a></li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
