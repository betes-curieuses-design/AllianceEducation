<?php

/* C:\wamp\www\betes\AllianceEducation/plugins/bedard/blogtags/components/blogrelated/default.htm */
class __TwigTemplate_135256823a4dea259b152f8345970963d92c8dcc87158a7bbc70422addde6f0e extends Twig_Template
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
        echo "<h1>Related posts</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "posts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["Post"]) {
            // line 4
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Post"], "title", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/plugins/bedard/blogtags/components/blogrelated/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <h1>Related posts</h1>*/
/* <ul>*/
/*     {% for Post in __SELF__.posts %}*/
/*         <li>{{ Post.title }}</li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
