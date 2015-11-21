<?php

/* C:\wamp\www\betes\AllianceEducation/plugins/betescurieuses/ae110815/components/homeblog/default.htm */
class __TwigTemplate_e8f78903ba2d965b4881b45c8aa028fa346163b0d17cfcb26c06cf9d765104b6 extends Twig_Template
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
                    <h4 class=\"bold\"><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h4>
                    <small>
                        Posted
                        ";
            // line 11
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 12
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
                // line 13
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 14
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
            // line 15
            echo "                        on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "
                    </small>
                    ";
            // line 17
            if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                // line 18
                echo "                        <img class=\"img-responsive\"
                             data-src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array()), "filename", array()), "html", null, true);
                echo "\"
                             src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array()), "path", array()), "html", null, true);
                echo "\"
                             alt=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array()), "description", array()), "html", null, true);
                echo "\"/>
                    ";
            }
            // line 23
            echo "                    <p class=\"small all-top-buffer\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 text-right\">
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\"
                       class=\"btn btn-primary btn-sm \">Lire</a>
                </div>
            </div>
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, (isset($context["noPostsMessage"]) ? $context["noPostsMessage"] : null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/plugins/betescurieuses/ae110815/components/homeblog/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 36,  132 => 34,  121 => 28,  112 => 23,  107 => 21,  103 => 20,  99 => 19,  96 => 18,  94 => 17,  88 => 15,  74 => 14,  65 => 13,  47 => 12,  43 => 11,  35 => 8,  30 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set posts = __SELF__.posts %}*/
/* */
/* <ul class="post-list">*/
/*     {% for post in posts %}*/
/*         <li>*/
/*             <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                     <h4 class="bold"><a href="{{ post.url }}">{{ post.title }}</a></h4>*/
/*                     <small>*/
/*                         Posted*/
/*                         {% if post.categories.count %} in {% endif %}*/
/*                         {% for category in post.categories %}*/
/*                             <a href="{{ category.url }}">{{ category.name }}</a>{% if not loop.last %}, {% endif %}*/
/*                         {% endfor %}*/
/*                         on {{ post.published_at|date('M d, Y') }}*/
/*                     </small>*/
/*                     {% if post.featured_images.count %}*/
/*                         <img class="img-responsive"*/
/*                              data-src="{{ post.featured_images.0.filename }}"*/
/*                              src="{{ post.featured_images.0.path }}"*/
/*                              alt="{{ post.featured_images.0.description }}"/>*/
/*                     {% endif %}*/
/*                     <p class="small all-top-buffer">{{ post.summary }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-12 text-right">*/
/*                     <a href="{{ post.url }}"*/
/*                        class="btn btn-primary btn-sm ">Lire</a>*/
/*                 </div>*/
/*             </div>*/
/*         </li>*/
/*     {% else %}*/
/*         <li class="no-data">{{ noPostsMessage }}</li>*/
/*     {% endfor %}*/
/* </ul>*/
