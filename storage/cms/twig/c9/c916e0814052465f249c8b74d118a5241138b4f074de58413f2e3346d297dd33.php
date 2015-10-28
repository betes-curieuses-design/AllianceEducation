<?php

/* C:\wamp\www\allianceeducation.ca\AllianceEducation/themes/martin-flex/partials/services.htm */
class __TwigTemplate_1224398fa62efb8bbd12a997ac0a6eaa022df8088502d63fdd3e1c2e032ab285 extends Twig_Template
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
        echo "<div class=\"content-section\" id=\"services\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"heading-section col-md-12 text-center\">
                <h2>Our Services</h2>
                <p>Let us help you to create professional websites</p>
            </div>
        </div>

        <div class=\"row\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 13
            echo "            <div class=\"col-md-3 col-sm-6\">
                <div class=\"service-item\" id=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "id", array(), "array"), "html", null, true);
            echo "\">
                    <div class=\"service-icon\">
                        <i class=\"fa ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "icon", array(), "array"), "html", null, true);
            echo "\"></i>
                    </div>
                    <div class=\"service-content\">
                        <div class=\"inner-service\">
                           <h3>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", array(), "array"), "html", null, true);
            echo "</h3>
                           <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "caption", array(), "array"), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\allianceeducation.ca\\AllianceEducation/themes/martin-flex/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 27,  55 => 21,  51 => 20,  44 => 16,  39 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }
}
/* <div class="content-section" id="services">*/
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="heading-section col-md-12 text-center">*/
/*                 <h2>Our Services</h2>*/
/*                 <p>Let us help you to create professional websites</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*         {% for service in services %}*/
/*             <div class="col-md-3 col-sm-6">*/
/*                 <div class="service-item" id="{{ service['id'] }}">*/
/*                     <div class="service-icon">*/
/*                         <i class="fa {{ service['icon'] }}"></i>*/
/*                     </div>*/
/*                     <div class="service-content">*/
/*                         <div class="inner-service">*/
/*                            <h3>{{ service['title'] }}</h3>*/
/*                            <p>{{ service['caption'] }}</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
