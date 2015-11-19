<?php

/* C:\wamp\www\betes\AllianceEducation/themes/ae110815/partials/header.htm */
class __TwigTemplate_52e2e055697cf3a37b44a7d6124c4dbdda70d5451869faf3a0a48695163352cf extends Twig_Template
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
        echo "<!-- Fixed navbar -->
<div class=\"navbar navbar-default navbar-fixed-top hidden-xs\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <!-- Button for smallest screens -->
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span
                        class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span></button>
            <a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">
                <img src=\"";
        // line 9
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ae-signature.svg");
        echo "\" style=\"width: 250px;\">
            </a>
        </div>
        <div class=\"navbar-collapse collapse pull-right \">
            <ul class=\"nav navbar-nav \">
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('CMS')->pageFilter("about");
        echo "\">À propos</a></li>
                <li><a href=\"#prix\">Services</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
                       aria-expanded=\"false\">
                        Éducation <span class=\"caret\"></span></a>
                    <span class=\"dropdown-arrow\"></span>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Capsules</a></li>
                        <li><a href=\"#\">Formations</a></li>
                        <li><a href=\"#\">Conferences</a></li>
                    </ul>
                </li>
                <li><a href=\"#contact\">Blogue</a></li>
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('CMS')->pageFilter("contact");
        echo "\">Nous joindre</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<div class=\"navbar navbar-default navbar-fixed-top hidden-sm hidden-md hidden-lg\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <!-- Button for smallest screens -->
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span
                        class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span></button>
            <a class=\"navbar-brand\" href=\"";
        // line 41
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">
                <img src=\"";
        // line 42
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ae-signature-mobile.svg");
        echo "\" style=\"width: 120px;margin-top: 25px;\">
            </a>
        </div>
        <div class=\"navbar-collapse collapse pull-left  mobile-menu\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 47
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 48
        echo $this->env->getExtension('CMS')->pageFilter("about");
        echo "\">À propos</a></li>
                <li><a href=\"#prix\">Services</a></li>
                <li><a href=\"#access\">Coaching</a></li>
                <li><a href=\"#contact\">Blogue</a></li>
                <li><a href=\"#\">Nous joindre</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/themes/ae110815/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 48,  88 => 47,  80 => 42,  76 => 41,  61 => 29,  44 => 15,  40 => 14,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!-- Fixed navbar -->*/
/* <div class="navbar navbar-default navbar-fixed-top hidden-xs">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <!-- Button for smallest screens -->*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span*/
/*                         class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>*/
/*             <a class="navbar-brand" href="{{ 'home'|page }}">*/
/*                 <img src="{{ 'assets/images/ae-signature.svg'|theme }}" style="width: 250px;">*/
/*             </a>*/
/*         </div>*/
/*         <div class="navbar-collapse collapse pull-right ">*/
/*             <ul class="nav navbar-nav ">*/
/*                 <li><a href="{{ 'home'|page }}">Accueil</a></li>*/
/*                 <li><a href="{{ 'about'|page }}">À propos</a></li>*/
/*                 <li><a href="#prix">Services</a></li>*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"*/
/*                        aria-expanded="false">*/
/*                         Éducation <span class="caret"></span></a>*/
/*                     <span class="dropdown-arrow"></span>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Capsules</a></li>*/
/*                         <li><a href="#">Formations</a></li>*/
/*                         <li><a href="#">Conferences</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li><a href="#contact">Blogue</a></li>*/
/*                 <li><a href="{{ 'contact'|page }}">Nous joindre</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <!--/.nav-collapse -->*/
/*     </div>*/
/* </div>*/
/* <div class="navbar navbar-default navbar-fixed-top hidden-sm hidden-md hidden-lg">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <!-- Button for smallest screens -->*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span*/
/*                         class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>*/
/*             <a class="navbar-brand" href="{{ 'home'|page }}">*/
/*                 <img src="{{ 'assets/images/ae-signature-mobile.svg'|theme }}" style="width: 120px;margin-top: 25px;">*/
/*             </a>*/
/*         </div>*/
/*         <div class="navbar-collapse collapse pull-left  mobile-menu">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li><a href="{{ 'home'|page }}">Accueil</a></li>*/
/*                 <li><a href="{{ 'about'|page }}">À propos</a></li>*/
/*                 <li><a href="#prix">Services</a></li>*/
/*                 <li><a href="#access">Coaching</a></li>*/
/*                 <li><a href="#contact">Blogue</a></li>*/
/*                 <li><a href="#">Nous joindre</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <!--/.nav-collapse -->*/
/*     </div>*/
/* </div>*/
/* <!-- /.navbar -->*/
