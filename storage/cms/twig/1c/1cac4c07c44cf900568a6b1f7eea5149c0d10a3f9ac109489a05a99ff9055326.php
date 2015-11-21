<?php

/* C:\wamp\www\betes\AllianceEducation/themes/ae110815/pages/blog/blogList.htm */
class __TwigTemplate_596fc026222ba63e088141679a6360827756d16fb0a74a38141e1fce00c8cb37 extends Twig_Template
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
        echo "<div class=\"page-blog-list wrap-page\">
    <div id=\"header-contact\" class=\"section-header\">
        <div class=\"jumbotron\">
            <div class=\"container\">
                <h1>Le blogue d'Alliance Éducation</h1>
            </div>
        </div>
    </div>
    <section class=\"default-section\">
        <div class=\"container\">
            <div class=\"row top-buffer-lg\">
                <div class=\"col-sm-9\">

                    ";
        // line 14
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "                </div>
                <div class=\"col-sm-3\">

                    <div class=\"row all-top-buffer\">
                        <div class=\"col-sm-12\">
                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title text-center\">
                                        <i class=\"fa fa-folder\"></i>&nbsp;
                                        Catégories
                                    </h3>
                                </div>

                                ";
        // line 28
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("listcategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 29
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"top-buffer-lg\"></div>
        </div>
    </section>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/themes/ae110815/pages/blog/blogList.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 29,  53 => 28,  38 => 15,  34 => 14,  19 => 1,);
    }
}
/* <div class="page-blog-list wrap-page">*/
/*     <div id="header-contact" class="section-header">*/
/*         <div class="jumbotron">*/
/*             <div class="container">*/
/*                 <h1>Le blogue d'Alliance Éducation</h1>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <section class="default-section">*/
/*         <div class="container">*/
/*             <div class="row top-buffer-lg">*/
/*                 <div class="col-sm-9">*/
/* */
/*                     {% component 'blogs' %}*/
/*                 </div>*/
/*                 <div class="col-sm-3">*/
/* */
/*                     <div class="row all-top-buffer">*/
/*                         <div class="col-sm-12">*/
/*                             <div class="panel panel-primary">*/
/*                                 <div class="panel-heading">*/
/*                                     <h3 class="panel-title text-center">*/
/*                                         <i class="fa fa-folder"></i>&nbsp;*/
/*                                         Catégories*/
/*                                     </h3>*/
/*                                 </div>*/
/* */
/*                                 {% component 'listcategories' %}*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="top-buffer-lg"></div>*/
/*         </div>*/
/*     </section>*/
/* */
/* </div>*/
