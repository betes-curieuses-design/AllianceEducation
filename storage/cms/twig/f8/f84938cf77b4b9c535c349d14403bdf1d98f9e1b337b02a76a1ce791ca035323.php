<?php

/* C:\wamp\www\betes\AllianceEducation/plugins/betescurieuses/ae110815/components/lastformation/default.htm */
class __TwigTemplate_d2207dbf4c8f669c868dcd068e607f712da1d14666f43ceaaa459c86001cac92 extends Twig_Template
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
        echo "<h3 class=\"title-blog\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "title", array()), "html", null, true);
        echo "</h3>

<p class=\"info\">
    Date de parution: ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "published_at", array()), "d-m-Y"), "html", null, true);
        echo "
</p>
<div id=\"blog_post_body\">
    ";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "featured_images", array()), 0, array(), "array"), "path", array(), "array")) {
            // line 8
            echo "        <p><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "featured_images", array()), 0, array(), "array"), "path", array(), "array"), "html", null, true);
            echo "\" alt=\"blog_post_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "id", array()), "html", null, true);
            echo "\" width=\"100%\"/></p>
    ";
        }
        // line 10
        echo "
    <div class=\"embed-responsive embed-responsive-16by9\">
        ";
        // line 12
        echo $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "video", array());
        echo "
    </div>
    <br>
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : null), "excerpt", array()), "html", null, true);
        echo "
</div>

<div id=\"problog_post_social\">
    ";
        // line 19
        if (((isset($context["sharethis"]) ? $context["sharethis"] : null) > 0)) {
            // line 20
            echo "    ";
            if (((isset($context["twitter"]) ? $context["twitter"] : null) > 0)) {
                echo "<span class='st_twitter_hcount' displayText='Tweet'></span>";
            }
            // line 21
            echo "    ";
            if (((isset($context["facebook"]) ? $context["facebook"] : null) > 0)) {
                echo "<span class='st_facebook_hcount' displayText='Facebook'></span>";
            }
            // line 22
            echo "    ";
            if (((isset($context["google"]) ? $context["google"] : null) > 0)) {
                echo "<span class='st_plusone_hcount' displayText='Plusone'></span>";
            }
            // line 23
            echo "
        <script type=\"text/javascript\">var switchTo5x = true;</script>
        <script type=\"text/javascript\" src=\"http://w.sharethis.com/button/buttons.js\"></script>
        <script type=\"text/javascript\">stLight.options({publisher: \"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["sharethis"]) ? $context["sharethis"] : null), "html", null, true);
            echo "\"});</script>
    ";
        }
        // line 28
        echo "</div>

";
        // line 30
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 31
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('pre code').each(function () {
            \$(this).parent().addClass('prettyprint');
        });
        prettyPrint();
    });
</script>
";
        // line 30
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/plugins/betescurieuses/ae110815/components/lastformation/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  92 => 31,  90 => 30,  86 => 28,  81 => 26,  76 => 23,  71 => 22,  66 => 21,  61 => 20,  59 => 19,  52 => 15,  46 => 12,  42 => 10,  34 => 8,  32 => 7,  26 => 4,  19 => 1,);
    }
}
/* <h3 class="title-blog">{{ formation.title }}</h3>*/
/* */
/* <p class="info">*/
/*     Date de parution: {{ formation.published_at|date('d-m-Y') }}*/
/* </p>*/
/* <div id="blog_post_body">*/
/*     {% if formation.featured_images[0]['path'] %}*/
/*         <p><img src="{{ formation.featured_images[0]['path'] }}" alt="blog_post_{{ formation.id }}" width="100%"/></p>*/
/*     {% endif %}*/
/* */
/*     <div class="embed-responsive embed-responsive-16by9">*/
/*         {{ formation.video|raw }}*/
/*     </div>*/
/*     <br>*/
/*     {{ formation.excerpt }}*/
/* </div>*/
/* */
/* <div id="problog_post_social">*/
/*     {% if sharethis > 0 %}*/
/*     {% if twitter > 0 %}<span class='st_twitter_hcount' displayText='Tweet'></span>{% endif %}*/
/*     {% if facebook > 0 %}<span class='st_facebook_hcount' displayText='Facebook'></span>{% endif %}*/
/*     {% if google > 0 %}<span class='st_plusone_hcount' displayText='Plusone'></span>{% endif %}*/
/* */
/*         <script type="text/javascript">var switchTo5x = true;</script>*/
/*         <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>*/
/*         <script type="text/javascript">stLight.options({publisher: "{{ sharethis }}"});</script>*/
/*     {% endif %}*/
/* </div>*/
/* */
/* {% put scripts %}*/
/* <script type="text/javascript">*/
/*     $(document).ready(function () {*/
/*         $('pre code').each(function () {*/
/*             $(this).parent().addClass('prettyprint');*/
/*         });*/
/*         prettyPrint();*/
/*     });*/
/* </script>*/
/* {% endput %}*/
/* */
