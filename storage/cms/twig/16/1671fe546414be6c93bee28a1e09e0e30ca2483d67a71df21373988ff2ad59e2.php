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

<section id=\"dynamic-blog\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    ";
        // line 23
        echo "                    <div class=\"col-sm-8\">
                        <div class=\"row home-capsules\">
                            <div class=\"col-sm-12\">
                                <h1 class=\"text-center\">
                                    Dernière capsule
                                </h1>
                                ";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("Lastcapsule"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "                            </div>
                        </div>
                        <div class=\"row home-formations\">
                            <h1 class=\"text-center\">
                                Dernière formation
                            </h1>
                            <div class=\"col-sm-12\">
                                ";
        // line 37
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("Lastformation"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 38
        echo "                            </div>
                        </div>
                        <div class=\"row home-formations\">
                            <h1 class=\"text-center\">
                                Dernière conference
                            </h1>
                            <div class=\"col-sm-12\">
                                ";
        // line 45
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("Lastconference"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 46
        echo "                            </div>
                        </div>
                    </div>
                    ";
        // line 50
        echo "                    <div class=\"col-sm-4 home-blog\">
                        <div class=\"panel panel-sidebar\">
                            <div class=\"panel-heading\">
                                <h3 class=\"text-center\">Blogue</h3>
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 56
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("Homeblog"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 57
        echo "                            </div>
                        </div>

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
        return array (  117 => 57,  113 => 56,  105 => 50,  100 => 46,  96 => 45,  87 => 38,  83 => 37,  74 => 30,  70 => 29,  62 => 23,  53 => 15,  49 => 14,  44 => 11,  40 => 10,  35 => 7,  31 => 6,  26 => 3,  22 => 2,  19 => 1,);
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
/* <section id="dynamic-blog">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="row">*/
/*                     {#Components#}*/
/*                     <div class="col-sm-8">*/
/*                         <div class="row home-capsules">*/
/*                             <div class="col-sm-12">*/
/*                                 <h1 class="text-center">*/
/*                                     Dernière capsule*/
/*                                 </h1>*/
/*                                 {% component 'Lastcapsule' %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row home-formations">*/
/*                             <h1 class="text-center">*/
/*                                 Dernière formation*/
/*                             </h1>*/
/*                             <div class="col-sm-12">*/
/*                                 {% component 'Lastformation' %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row home-formations">*/
/*                             <h1 class="text-center">*/
/*                                 Dernière conference*/
/*                             </h1>*/
/*                             <div class="col-sm-12">*/
/*                                 {% component 'Lastconference' %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {#Blog#}*/
/*                     <div class="col-sm-4 home-blog">*/
/*                         <div class="panel panel-sidebar">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="text-center">Blogue</h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 {% component 'Homeblog' %}*/
/*                             </div>*/
/*                         </div>*/
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
