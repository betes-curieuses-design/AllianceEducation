<?php

/* C:\wamp\www\betes\AllianceEducation/themes/ae110815/partials/contact/default.htm */
class __TwigTemplate_59ce8660b52cbab7c771be1d3546dfc802169ca139f0cf58a382ccec20b32a5d extends Twig_Template
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
<h3>Formulaire pour me contacter</h3>
<form class=\"flexiContactForm\" role=\"form\"
      data-request=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onMailSent\"
      data-request-update=\"'";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::confirm': '.confirm-container'\">
    <div class=\"form-groups\">
        <div class=\"row all-top-buffer\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>Votre nom et prénom</label>
                    <input type=\"text\" class=\"form-control\" value=\"\" name=\"name\" required
                           placeholder=\"Nom et prénom\">
                </div>
                <div class=\"form-group\">
                    <label>Votre courriel</label>
                    <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" required
                           placeholder=\"courriel\">
                </div>
                <div class=\"form-group\">
                    <label>Sujet</label>
                    <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" required
                           placeholder=\"Enter Sujet\">
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label>Votre message</label>
            <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"Message\" required
                      rows=\"8\"></textarea>
                </div>
                <button type=\"submit\" class=\"btn btn-primary pull-right\">Soumettre</button>
            </div>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/themes/ae110815/partials/contact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="confirm-container">*/
/*     <!--This will contain the confirmation when the email is successfully sent-->*/
/* </div>*/
/* <h3>Formulaire pour me contacter</h3>*/
/* <form class="flexiContactForm" role="form"*/
/*       data-request="{{ __SELF__ }}::onMailSent"*/
/*       data-request-update="'{{ __SELF__ }}::confirm': '.confirm-container'">*/
/*     <div class="form-groups">*/
/*         <div class="row all-top-buffer">*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label>Votre nom et prénom</label>*/
/*                     <input type="text" class="form-control" value="" name="name" required*/
/*                            placeholder="Nom et prénom">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label>Votre courriel</label>*/
/*                     <input type="text" class="form-control" value="" name="email" required*/
/*                            placeholder="courriel">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label>Sujet</label>*/
/*                     <input type="text" class="form-control" value="" name="subject" required*/
/*                            placeholder="Enter Sujet">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-6">*/
/*                 <div class="form-group">*/
/*                     <label>Votre message</label>*/
/*             <textarea class="form-control" value="" name="body" placeholder="Message" required*/
/*                       rows="8"></textarea>*/
/*                 </div>*/
/*                 <button type="submit" class="btn btn-primary pull-right">Soumettre</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
