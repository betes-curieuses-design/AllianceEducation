<?php

/* C:\wamp\www\betes\AllianceEducation/themes/ae110815/partials/site-slider.htm */
class __TwigTemplate_ebe6fec903b841494bece4d42a88adff4bf4b13e4890d2100c1050dd2aa6c094 extends Twig_Template
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
        echo "<div class=\"site-slider\">
    <div class=\"slider\">
        <div class=\"flexslider\">
            <ul class=\"slides\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 6
            echo "                <li>
                    <div class=\"overlay\"></div>
                    <img src=\"";
            // line 8
            echo $this->env->getExtension('CMS')->themeFilter(("assets/images/" . $this->getAttribute($context["slide"], "image", array(), "array")));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "title ", array(), "array"), "html", null, true);
            echo "\">
                    <div class=\"slider-caption visible-md visible-lg\">
                        <h2>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "title", array(), "array"), "html", null, true);
            echo "</h2>
                        <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "caption", array(), "array"), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "link", array(), "array"), "html", null, true);
            echo "\" class=\"slider-btn\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "button", array(), "array"), "html", null, true);
            echo "</a>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/themes/ae110815/partials/site-slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  48 => 12,  44 => 11,  40 => 10,  33 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="site-slider">*/
/*     <div class="slider">*/
/*         <div class="flexslider">*/
/*             <ul class="slides">*/
/*             {% for slide in slides %}*/
/*                 <li>*/
/*                     <div class="overlay"></div>*/
/*                     <img src="{{ ('assets/images/' ~ slide['image']) |theme }}" alt="{{ slide['title '] }}">*/
/*                     <div class="slider-caption visible-md visible-lg">*/
/*                         <h2>{{ slide['title']   }}</h2>*/
/*                         <p>{{  slide['caption'] }}</p>*/
/*                         <a href="{{ slide['link'] }}" class="slider-btn">{{ slide['button'] }}</a>*/
/*                     </div>*/
/*                 </li>*/
/*             {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
