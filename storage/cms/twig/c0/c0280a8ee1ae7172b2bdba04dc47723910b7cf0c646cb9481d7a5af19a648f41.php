<?php

/* C:\wamp\www\allianceeducation.ca\AllianceEducation/themes/martin-flex/layouts/default.htm */
class __TwigTemplate_0d3654b6eebc8fa840bd63a55172466413448977cc36ca631750a4cd746ea769 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\">        <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\">               <![endif]-->
<!--[if gt IE 8]> <!--> <html class=\"no-js\">                 <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
\t<meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">
<!--
Flex Template
http://www.templatemo.com/free-website-templates/406-flex
-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.css", 2 => "assets/css/animate.css", 3 => "assets/css/templatemo_misc.css", 4 => "assets/css/templatemo_style.css"));
        // line 22
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"));
        echo "\"></script>
</head>
<body>
<!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site-main"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "
    ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("services"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("portfolio"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("team"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "
    ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contact"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "
    <script src=\"";
        // line 39
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/vendor/jquery-1.11.0.min.js", 1 => "assets/js/bootstrap.js", 2 => "assets/js/plugins.js", 3 => "assets/js/main.js", 4 => "@framework", 5 => "@framework.extras"));
        // line 45
        echo "\"></script>

    <!-- Google Map -->
    <script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script src=\"";
        // line 49
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/vendor/jquery.gmap3.min.js"));
        echo "\"></script>

    <!-- Google Map Init-->
    <script type=\"text/javascript\">
        jQuery(function(\$){
            \$('#map_canvas').gmap3({
                marker: {
                    address: '16.8496189,96.1288854'
                },
                map:{
                    options:{
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl : true
                    }
                }
            });
        });
    </script>
    ";
        // line 68
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 69
        echo "
    <!-- templatemo 406 flex -->

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\allianceeducation.ca\\AllianceEducation/themes/martin-flex/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 69,  120 => 68,  98 => 49,  92 => 45,  90 => 39,  87 => 38,  82 => 37,  78 => 36,  75 => 35,  70 => 34,  65 => 33,  61 => 32,  58 => 31,  54 => 30,  44 => 23,  41 => 22,  39 => 16,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8">        <![endif]-->*/
/* <!--[if IE 8]>         <html class="no-js lt-ie9">               <![endif]-->*/
/* <!--[if gt IE 8]> <!--> <html class="no-js">                 <!--<![endif]-->*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{{ this.page.title }}</title>*/
/* 	<meta name="description" content="">*/
/*     <meta name="viewport" content="width=device-width">*/
/* <!--*/
/* Flex Template*/
/* http://www.templatemo.com/free-website-templates/406-flex*/
/* -->*/
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>*/
/*     <link href="{{ [*/
/*         'assets/css/bootstrap.min.css',*/
/*         'assets/css/font-awesome.css',*/
/*         'assets/css/animate.css',*/
/*         'assets/css/templatemo_misc.css',*/
/*         'assets/css/templatemo_style.css',*/
/*     ]|theme }}" rel="stylesheet">*/
/*     <script src="{{ ['assets/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js']|theme }}"></script>*/
/* </head>*/
/* <body>*/
/* <!--[if lt IE 7]>*/
/*     <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>*/
/* <![endif]-->*/
/* */
/*     {% partial 'site-main' %}*/
/* */
/*     {% partial 'services'  %}*/
/*     {% partial 'portfolio' %}*/
/*     {% partial 'team'      %}*/
/* */
/*     {% partial 'contact'   %}*/
/*     {% partial 'footer'    %}*/
/* */
/*     <script src="{{ [*/
/*         'assets/js/vendor/jquery-1.11.0.min.js',*/
/*         'assets/js/bootstrap.js',*/
/*         'assets/js/plugins.js',*/
/*         'assets/js/main.js',*/
/*         '@framework',*/
/*         '@framework.extras']|theme }}"></script>*/
/* */
/*     <!-- Google Map -->*/
/*     <script src="http://maps.google.com/maps/api/js?sensor=true"></script>*/
/*     <script src="{{ ['assets/js/vendor/jquery.gmap3.min.js']|theme }}"></script>*/
/* */
/*     <!-- Google Map Init-->*/
/*     <script type="text/javascript">*/
/*         jQuery(function($){*/
/*             $('#map_canvas').gmap3({*/
/*                 marker: {*/
/*                     address: '16.8496189,96.1288854'*/
/*                 },*/
/*                 map:{*/
/*                     options:{*/
/*                         zoom: 15,*/
/*                         scrollwheel: false,*/
/*                         streetViewControl : true*/
/*                     }*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/*     {% scripts %}*/
/* */
/*     <!-- templatemo 406 flex -->*/
/* */
/* </body>*/
/* </html>*/
