<?php

/* C:\wamp\www\betes\AllianceEducation/plugins/betescurieuses/ae110815/components/lastconference/default.htm */
class __TwigTemplate_f0767b9879fbbe62ec2d62a7343f230549efc14246705955ae3fea54d77dd9b1 extends Twig_Template
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
        if ((isset($context["render_category"]) ? $context["render_category"] : null)) {
            // line 2
            echo "    ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("proBlogList"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
        } else {
            // line 4
            echo "    <h3 class=\"title-blog\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conference"]) ? $context["conference"] : null), "title", array()), "html", null, true);
            echo "</h3>

    <p class=\"info\">
        Date de parution: ";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["conference"]) ? $context["conference"] : null), "published_at", array()), "d-m-Y"), "html", null, true);
            echo "
    </p>
    <div id=\"blog_post_body\">
        <div class=\"embed-responsive embed-responsive-16by9\">
            ";
            // line 11
            echo $this->getAttribute((isset($context["conference"]) ? $context["conference"] : null), "video", array());
            echo "
        </div>

        <br>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conference"]) ? $context["conference"] : null), "excerpt", array()), "html", null, true);
            echo "

    </div>

    <div id=\"problog_post_social\">
        ";
            // line 20
            if (((isset($context["sharethis"]) ? $context["sharethis"] : null) > 0)) {
                // line 21
                echo "        ";
                if (((isset($context["twitter"]) ? $context["twitter"] : null) > 0)) {
                    echo "<span class='st_twitter_hcount' displayText='Tweet'></span>";
                }
                // line 22
                echo "        ";
                if (((isset($context["facebook"]) ? $context["facebook"] : null) > 0)) {
                    echo "<span class='st_facebook_hcount' displayText='Facebook'></span>";
                }
                // line 23
                echo "        ";
                if (((isset($context["google"]) ? $context["google"] : null) > 0)) {
                    echo "<span class='st_plusone_hcount' displayText='Plusone'></span>";
                }
                // line 24
                echo "
            <script type=\"text/javascript\">var switchTo5x=true;</script>
            <script type=\"text/javascript\" src=\"http://w.sharethis.com/button/buttons.js\"></script>
            <script type=\"text/javascript\">stLight.options({publisher:\"";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["sharethis"]) ? $context["sharethis"] : null), "html", null, true);
                echo "\"});</script>
        ";
            }
            // line 29
            echo "    </div>

    ";
            // line 31
            echo $this->env->getExtension('CMS')->startBlock('scripts'            );
            // line 32
            echo "    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('pre code').each(function(){
                \$(this).parent().addClass('prettyprint');
            });
            prettyPrint();
        });
    </script>
    ";
            // line 31
            echo $this->env->getExtension('CMS')->endBlock(true            );
            // line 41
            echo "
    ";
            // line 42
            if ((isset($context["embedly"]) ? $context["embedly"] : null)) {
                // line 43
                echo "        ";
                echo $this->env->getExtension('CMS')->startBlock('scripts'                );
                // line 44
                echo "        <script type=\"text/javascript\">
            \$(document).ready(function(){
                \$('#blog_post_body a').each(function(){
                    if(\$(this).text() == 'embedly'){
                        \$(this).addClass('embedly');
                        var w = \$(this).parent().parent().width();
                        \$(this).embedly({
                            key: '";
                // line 51
                echo twig_escape_filter($this->env, (isset($context["embedly"]) ? $context["embedly"] : null), "html", null, true);
                echo "',
                            query: {
                                maxwidth: w,
                            },
                        });
                    }
                });
            });
        </script>
        ";
                // line 43
                echo $this->env->getExtension('CMS')->endBlock(true                );
                // line 61
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/plugins/betescurieuses/ae110815/components/lastconference/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 61,  130 => 43,  118 => 51,  109 => 44,  106 => 43,  104 => 42,  101 => 41,  99 => 31,  89 => 32,  87 => 31,  83 => 29,  78 => 27,  73 => 24,  68 => 23,  63 => 22,  58 => 21,  56 => 20,  48 => 15,  41 => 11,  34 => 7,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if render_category %}*/
/*     {% component 'proBlogList' %}*/
/* {% else %}*/
/*     <h3 class="title-blog">{{ conference.title }}</h3>*/
/* */
/*     <p class="info">*/
/*         Date de parution: {{ conference.published_at|date('d-m-Y') }}*/
/*     </p>*/
/*     <div id="blog_post_body">*/
/*         <div class="embed-responsive embed-responsive-16by9">*/
/*             {{ conference.video|raw }}*/
/*         </div>*/
/* */
/*         <br>*/
/*         {{ conference.excerpt }}*/
/* */
/*     </div>*/
/* */
/*     <div id="problog_post_social">*/
/*         {% if sharethis > 0 %}*/
/*         {% if twitter > 0 %}<span class='st_twitter_hcount' displayText='Tweet'></span>{% endif %}*/
/*         {% if facebook > 0 %}<span class='st_facebook_hcount' displayText='Facebook'></span>{% endif %}*/
/*         {% if google > 0 %}<span class='st_plusone_hcount' displayText='Plusone'></span>{% endif %}*/
/* */
/*             <script type="text/javascript">var switchTo5x=true;</script>*/
/*             <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>*/
/*             <script type="text/javascript">stLight.options({publisher:"{{ sharethis }}"});</script>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {% put scripts %}*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function(){*/
/*             $('pre code').each(function(){*/
/*                 $(this).parent().addClass('prettyprint');*/
/*             });*/
/*             prettyPrint();*/
/*         });*/
/*     </script>*/
/*     {% endput %}*/
/* */
/*     {% if embedly %}*/
/*         {% put scripts %}*/
/*         <script type="text/javascript">*/
/*             $(document).ready(function(){*/
/*                 $('#blog_post_body a').each(function(){*/
/*                     if($(this).text() == 'embedly'){*/
/*                         $(this).addClass('embedly');*/
/*                         var w = $(this).parent().parent().width();*/
/*                         $(this).embedly({*/
/*                             key: '{{embedly}}',*/
/*                             query: {*/
/*                                 maxwidth: w,*/
/*                             },*/
/*                         });*/
/*                     }*/
/*                 });*/
/*             });*/
/*         </script>*/
/*         {% endput %}*/
/*     {% endif %}*/
/* {% endif %}*/
