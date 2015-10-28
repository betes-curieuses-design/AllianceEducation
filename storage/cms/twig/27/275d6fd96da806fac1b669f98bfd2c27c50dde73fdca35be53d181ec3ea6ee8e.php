<?php

/* C:\wamp\www\allianceeducation.ca\AllianceEducation/themes/martin-flex/partials/site-main.htm */
class __TwigTemplate_75db582bf4bd5467586eab89a74c8ec64328b2d90c749be7db4464c75601a4be extends Twig_Template
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
        echo "<div class=\"site-main\" id=\"sTop\">
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site-header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site-slider"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\allianceeducation.ca\\AllianceEducation/themes/martin-flex/partials/site-main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="site-main" id="sTop">*/
/*     {% partial 'site-header' %}*/
/*     {% partial 'site-slider' %}*/
/* </div>*/
