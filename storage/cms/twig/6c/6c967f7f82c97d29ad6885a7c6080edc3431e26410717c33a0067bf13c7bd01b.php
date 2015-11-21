<?php

/* C:\wamp\www\betes\AllianceEducation/themes/ae110815/layouts/default.htm */
class __TwigTemplate_3011ff6d7219e72a8cbbef9ca6319639df92a4b4128c5e1424e378c9d8de1d57 extends Twig_Template
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
        echo "<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\">        <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\">               <![endif]-->
<!--[if gt IE 8]> <!--> <html class=\"no-js\">                 <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
\t<meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">
<!--
Flex Template
http://www.templatemo.com/free-website-templates/406-flex
-->
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>-->
    <link href=\"";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/theme.css"));
        // line 17
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 18
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"));
        echo "\"></script>
</head>
<body class=\"page-";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()), "html", null, true);
        echo " layout-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "id", array()), "html", null, true);
        echo "\">
<!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

<!-- Header -->
<header id=\"layout-header\" class=\"header-navbar\">
    <!-- Nav -->
    ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "</header>

<!-- Content -->
<main id=\"layout-content\">
    ";
        // line 33
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 34
        echo "</main>

<!-- Footer -->
<footer id=\"layout-footer\">
    ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "</footer>



    <script src=\"";
        // line 43
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/vendor/jquery-1.11.0.min.js", 1 => "assets/vendor/bootstrap/js/bootstrap.min.js", 2 => "assets/js/app.js", 3 => "@framework", 4 => "@framework.extras"));
        // line 48
        echo "\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/themes/ae110815/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 48,  89 => 43,  83 => 39,  79 => 38,  73 => 34,  71 => 33,  65 => 29,  61 => 28,  48 => 20,  43 => 18,  40 => 17,  38 => 15,  27 => 7,  19 => 1,);
    }
}
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
/*     <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>-->*/
/*     <link href="{{ [*/
/*         'assets/css/theme.css',*/
/*     ]|theme }}" rel="stylesheet">*/
/*     <script src="{{ ['assets/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js']|theme }}"></script>*/
/* </head>*/
/* <body class="page-{{ this.page.id }} layout-{{ this.layout.id }}">*/
/* <!--[if lt IE 7]>*/
/*     <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>*/
/* <![endif]-->*/
/* */
/* <!-- Header -->*/
/* <header id="layout-header" class="header-navbar">*/
/*     <!-- Nav -->*/
/*     {% partial "header" %}*/
/* </header>*/
/* */
/* <!-- Content -->*/
/* <main id="layout-content">*/
/*     {% page %}*/
/* </main>*/
/* */
/* <!-- Footer -->*/
/* <footer id="layout-footer">*/
/*     {% partial "footer" %}*/
/* </footer>*/
/* */
/* */
/* */
/*     <script src="{{ [*/
/*         'assets/js/vendor/jquery-1.11.0.min.js',*/
/*         'assets/vendor/bootstrap/js/bootstrap.min.js',*/
/*         'assets/js/app.js',*/
/*         '@framework',*/
/*         '@framework.extras']|theme }}"></script>*/
/* */
/* </body>*/
/* </html>*/
