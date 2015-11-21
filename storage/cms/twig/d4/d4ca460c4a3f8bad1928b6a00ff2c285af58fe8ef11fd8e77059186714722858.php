<?php

/* C:\wamp\www\betes\AllianceEducation/plugins/betescurieuses/ae110815/components/quotes/default.htm */
class __TwigTemplate_b7f921271d9a923288e20f8aafa039bff5ee02ba1f5c51c0fc90f2414e0749c7 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"row\">
                <div class=\"col-xs-2 col-md-1\">
                    <i class=\"fa fa-quote-right\"></i>
                </div>
                <div class=\"col-xs-10 col-md-11\">
                    <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quotes"]) ? $context["quotes"] : null), 0, array()), "description", array()), "html", null, true);
        echo "</h2>
                    <h3>- ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quotes"]) ? $context["quotes"] : null), 0, array()), "author", array()), "html", null, true);
        echo "</h3>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/plugins/betescurieuses/ae110815/components/quotes/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  29 => 9,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-sm-12">*/
/*             <div class="row">*/
/*                 <div class="col-xs-2 col-md-1">*/
/*                     <i class="fa fa-quote-right"></i>*/
/*                 </div>*/
/*                 <div class="col-xs-10 col-md-11">*/
/*                     <h2>{{ quotes.0.description }}</h2>*/
/*                     <h3>- {{ quotes.0.author }}</h3>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
