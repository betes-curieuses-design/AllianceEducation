<?php

/* C:\wamp\www\allianceeducation.ca\AllianceEducation/themes/martin-flex/partials/team.htm */
class __TwigTemplate_d027ca02cc3f9b483461edcb4e41c8d268f9b3a3c90697cb82accf32be071188 extends Twig_Template
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
        echo "<div class=\"content-section\" id=\"our-team\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"heading-section col-md-12 text-center\">
                <h2>Our Team</h2>
                <p>Meet our people and about our company</p>
            </div>
        </div>

        <div class=\"row\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["team"]) ? $context["team"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 13
            echo "            <div class=\"team-member col-md-3 col-sm-6\">
                <div class=\"member-thumb\">
                    <img src=\"";
            // line 15
            echo $this->env->getExtension('CMS')->themeFilter(("assets/images/" . $this->getAttribute($context["member"], "image", array(), "array")));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "name", array(), "array"), "html", null, true);
            echo "\">
                    <div class=\"team-overlay\">
                        <h3>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "name", array(), "array"), "html", null, true);
            echo "</h3>
                        <span>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "position", array(), "array"), "html", null, true);
            echo "</span>
                        <ul class=\"social\">
                            ";
            // line 20
            if ($this->getAttribute($context["member"], "facebook", array(), "array", true, true)) {
                echo "<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "facebook", array(), "array"), "html", null, true);
                echo "\" class=\"fa fa-facebook\"></a></li>";
            }
            // line 21
            echo "                            ";
            if ($this->getAttribute($context["member"], "twitter", array(), "array", true, true)) {
                echo "<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "twitter", array(), "array"), "html", null, true);
                echo "\"  class=\"fa fa-twitter\" ></a></li>";
            }
            // line 22
            echo "                            ";
            if ($this->getAttribute($context["member"], "linkedin", array(), "array", true, true)) {
                echo "<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "linkedin", array(), "array"), "html", null, true);
                echo "\" class=\"fa fa-linkedin\"></a></li>";
            }
            // line 23
            echo "                        </ul>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>

        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <div class=\"skills-heading\">
                    <h3 class=\"skills-title\">Our skills on web design</h3>
                    <p class=\"small-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>

        <div class=\"row\">

            <div class=\"col-md-8 col-sm-6\">
                <p>
                    Aliquam faucibus in dolor sed vestibulum. Sed adipiscing malesuada luctus. Morbi tincidunt, tellus scelerisque scelerisque scelerisque, sapien dui pretium augue, at consectetur sapien tellus vitae nunc. Ut vitae metus quis nulla cursus adipiscing pretium vel dolor. Fusce lacinia accumsan arcu, quis porttitor nisi tincidunt ut.
                    <br><br>
                    Etiam tincidunt, magna eu elementum tristique, sapien nisl venenatis lacus, nec sagittis lectus dui eget lorem. Donec in tempus mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin laoreet ac quam et volutpat. Aenean egestas interdum dolor, et mollis lectus consequat a.
                    <br><br>
                    Nunc malesuada nunc eget nunc sollicitudin posuere. Maecenas vitae tortor quis odio hendrerit sagittis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris ullamcorper, felis sit amet gravida malesuada, nisi sem rhoncus massa, non tempor est erat sit amet diam.
                    <br><br>
                </p>
            </div>

            <div class=\"col-md-4 col-sm-6\">
                <ul class=\"progess-bars\">
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : null));
        foreach ($context['_seq'] as $context["skill"] => $context["percent"]) {
            // line 55
            echo "                    <li>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"";
            // line 57
            echo twig_escape_filter($this->env, $context["percent"], "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
            echo twig_escape_filter($this->env, $context["percent"], "html", null, true);
            echo "%;\">";
            echo twig_escape_filter($this->env, $context["skill"], "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $context["percent"], "html", null, true);
            echo "%</div>
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['skill'], $context['percent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </ul>
            </div>

        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\allianceeducation.ca\\AllianceEducation/themes/martin-flex/partials/team.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 61,  122 => 57,  118 => 55,  114 => 54,  86 => 28,  76 => 23,  69 => 22,  62 => 21,  56 => 20,  51 => 18,  47 => 17,  40 => 15,  36 => 13,  32 => 12,  19 => 1,);
    }
}
/* <div class="content-section" id="our-team">*/
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="heading-section col-md-12 text-center">*/
/*                 <h2>Our Team</h2>*/
/*                 <p>Meet our people and about our company</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*         {% for member in team %}*/
/*             <div class="team-member col-md-3 col-sm-6">*/
/*                 <div class="member-thumb">*/
/*                     <img src="{{ ('assets/images/' ~ member['image']) |theme }}" alt="{{ member['name'] }}">*/
/*                     <div class="team-overlay">*/
/*                         <h3>{{ member['name'] }}</h3>*/
/*                         <span>{{ member['position'] }}</span>*/
/*                         <ul class="social">*/
/*                             {% if member['facebook'] is defined %}<li><a href="{{ member['facebook'] }}" class="fa fa-facebook"></a></li>{% endif %}*/
/*                             {% if member['twitter']  is defined %}<li><a href="{{ member['twitter'] }}"  class="fa fa-twitter" ></a></li>{% endif %}*/
/*                             {% if member['linkedin'] is defined %}<li><a href="{{ member['linkedin'] }}" class="fa fa-linkedin"></a></li>{% endif %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-12 text-center">*/
/*                 <div class="skills-heading">*/
/*                     <h3 class="skills-title">Our skills on web design</h3>*/
/*                     <p class="small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/* */
/*             <div class="col-md-8 col-sm-6">*/
/*                 <p>*/
/*                     Aliquam faucibus in dolor sed vestibulum. Sed adipiscing malesuada luctus. Morbi tincidunt, tellus scelerisque scelerisque scelerisque, sapien dui pretium augue, at consectetur sapien tellus vitae nunc. Ut vitae metus quis nulla cursus adipiscing pretium vel dolor. Fusce lacinia accumsan arcu, quis porttitor nisi tincidunt ut.*/
/*                     <br><br>*/
/*                     Etiam tincidunt, magna eu elementum tristique, sapien nisl venenatis lacus, nec sagittis lectus dui eget lorem. Donec in tempus mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin laoreet ac quam et volutpat. Aenean egestas interdum dolor, et mollis lectus consequat a.*/
/*                     <br><br>*/
/*                     Nunc malesuada nunc eget nunc sollicitudin posuere. Maecenas vitae tortor quis odio hendrerit sagittis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris ullamcorper, felis sit amet gravida malesuada, nisi sem rhoncus massa, non tempor est erat sit amet diam.*/
/*                     <br><br>*/
/*                 </p>*/
/*             </div>*/
/* */
/*             <div class="col-md-4 col-sm-6">*/
/*                 <ul class="progess-bars">*/
/*                 {% for skill,percent in skills %}*/
/*                     <li>*/
/*                         <div class="progress">*/
/*                             <div class="progress-bar" role="progressbar" aria-valuenow="{{ percent }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ percent }}%;">{{ skill }} {{ percent }}%</div>*/
/*                         </div>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
