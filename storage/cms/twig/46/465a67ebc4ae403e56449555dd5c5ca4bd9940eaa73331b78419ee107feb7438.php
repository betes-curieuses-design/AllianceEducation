<?php

/* C:\wamp\www\betes\AllianceEducation/plugins/laminsanneh/flexicontact/components/contactform/default.htm */
class __TwigTemplate_0519ab473fd74bd30a7a7e7a785625f4a7cc8e31c067cf4f07765c32acf464d6 extends Twig_Template
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
        echo "<div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
</div>
<form class=\"flexiContactForm\" role=\"form\"
      data-request=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onMailSent\"
      data-request-update=\"'";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::confirm': '.confirm-container'\">

    <div class=\"form-groups\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"Enter name\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"Enter Email\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"Enter Subject\">
        </div>
        <div class=\"form-group\">
            <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"Enter Message\" cols=\"30\" rows=\"10\"></textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">Send</button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/plugins/laminsanneh/flexicontact/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="confirm-container">*/
/*     <!--This will contain the confirmation when the email is successfully sent-->*/
/* </div>*/
/* <form class="flexiContactForm" role="form"*/
/*       data-request="{{ __SELF__ }}::onMailSent"*/
/*       data-request-update="'{{ __SELF__ }}::confirm': '.confirm-container'">*/
/* */
/*     <div class="form-groups">*/
/*         <div class="form-group">*/
/*             <input type="text" class="form-control" value=""  name="name" placeholder="Enter name">*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <input type="text" class="form-control" value="" name="email" placeholder="Enter Email">*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <input type="text" class="form-control" value="" name="subject" placeholder="Enter Subject">*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <textarea class="form-control" value="" name="body" placeholder="Enter Message" cols="30" rows="10"></textarea>*/
/*         </div>*/
/*         <button type="submit" class="btn btn-primary btn-lg pull-right">Send</button>*/
/*     </div>*/
/* </form>*/
