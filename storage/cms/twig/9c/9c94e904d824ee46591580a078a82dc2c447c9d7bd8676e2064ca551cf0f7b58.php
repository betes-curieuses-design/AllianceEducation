<?php

/* C:\wamp\www\betes\AllianceEducation/plugins/rainlab/blog/components/categories/default.htm */
class __TwigTemplate_e748d1b21cdfeb5c8ba9dd455625d275fa3daaf71f5d6cbb7509555d2bded2e1 extends Twig_Template
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
        $context["categories"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "categories", array());
        // line 2
        $context["currentCategorySlug"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "currentCategorySlug", array());
        // line 3
        echo "
<ul class=\"category-list\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "        ";
            $context["postCount"] = $this->getAttribute($context["category"], "post_count", array());
            // line 7
            echo "        <li ";
            if (($this->getAttribute($context["category"], "slug", array()) == (isset($context["currentCategorySlug"]) ? $context["currentCategorySlug"] : null))) {
                echo "class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a> 
            ";
            // line 9
            if ((isset($context["postCount"]) ? $context["postCount"] : null)) {
                // line 10
                echo "                <span class=\"badge\">";
                echo twig_escape_filter($this->env, (isset($context["postCount"]) ? $context["postCount"] : null), "html", null, true);
                echo "</span>
            ";
            }
            // line 12
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/plugins/rainlab/blog/components/categories/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  55 => 12,  49 => 10,  47 => 9,  41 => 8,  34 => 7,  31 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set categories = __SELF__.categories %}*/
/* {% set currentCategorySlug = __SELF__.currentCategorySlug %}*/
/* */
/* <ul class="category-list">*/
/*     {% for category in categories %}*/
/*         {% set postCount = category.post_count %}*/
/*         <li {% if category.slug == currentCategorySlug %}class="active"{% endif %}>*/
/*             <a href="{{ category.url }}">{{ category.name }}</a> */
/*             {% if postCount %}*/
/*                 <span class="badge">{{ postCount }}</span>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
