<?php

/* C:\wamp\www\betes\AllianceEducation/themes/ae110815/pages/home.htm */
class __TwigTemplate_2f1b04a922f70865c0db308fab9450783d1f522f5e39ae5a82161c3bc40ff774 extends Twig_Template
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
        echo "<section id=\"slider\">
    ";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("ShowImages"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</section>

<section id=\"featured\">
    ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("home/featured"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</section>

<section id=\"services\">
    ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("home/services"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "</section>

<section id=\"quotes\">
    ";
        // line 14
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("Quotes"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "</section>

<section id=\"home-blog\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    ";
        // line 23
        echo "                    <div class=\"col-sm-8\">

                    </div>
                    ";
        // line 27
        echo "                    <div class=\"col-sm-4\">

                    </div>
                </div>
                <div class=\"top-buffer-lg\"></div>
            </div>
        </div>
    </div>


</section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/themes/ae110815/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 27,  62 => 23,  53 => 15,  49 => 14,  44 => 11,  40 => 10,  35 => 7,  31 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <section id="slider">*/
/*     {% component 'ShowImages' %}*/
/* </section>*/
/* */
/* <section id="featured">*/
/*     {% partial "home/featured" %}*/
/* </section>*/
/* */
/* <section id="services">*/
/*     {% partial "home/services" %}*/
/* </section>*/
/* */
/* <section id="quotes">*/
/*     {% component 'Quotes' %}*/
/* </section>*/
/* */
/* <section id="home-blog">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="row">*/
/*                     {#Components#}*/
/*                     <div class="col-sm-8">*/
/* */
/*                     </div>*/
/*                     {#Blog#}*/
/*                     <div class="col-sm-4">*/
/* */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="top-buffer-lg"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* </section>*/
