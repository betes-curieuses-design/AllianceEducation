<?php

/* C:\wamp\www\betes\AllianceEducation/themes/ae110815/pages/about.htm */
class __TwigTemplate_1959df3cf13697e2b031a1ae54496c18d65f91c9d3fadcb88d065c523a05133e extends Twig_Template
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
        echo "<div class=\"page-about wrap-page\">
    <div id=\"header-contact\" class=\"section-header\">
        <div class=\"jumbotron\">
            <div class=\"container\">
                <h1>À propos d'Alliance Éducation</h1>
            </div>
        </div>
    </div>
    <section class=\"default-section\">
        <div class=\"container\">
            <div class=\"row top-buffer-lg\">
                <div class=\"col-sm-4\">
                    <div class=\"row\">
                        <div class=\"col-xs-8 col-xs-offset-2 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2\">
                            <img class=\"round-image img-responsive center-block\"
                                 src=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ae-client-about.jpg");
        echo "\">
                        </div>
                    </div>

                </div>
                <div class=\"col-sm-8 mobile-top-buffer\">
                    <p>
                        Alliance Éducation a été fondée par Nathalie Miron, coach familial, diplômée en éducation à
                        l’enfance depuis 2004, ancienne entraîneuse sportive pour athlètes et pour la population
                        générale. La fondatrice d’Alliance Éducation a décidé de combiner ses savoirs en éducation et en
                        coaching sportif pour offrir des services en coaching familial. Ayant travaillé plusieurs années
                        à titre d’éducatrice en CPE, elle a développé un savoir-faire de qualité qui soutient l’enfant à
                        travers son développement global et soutient aussi ses parents en les outillant davantage pour
                        mieux cheminer avec leur enfant. C’est une femme passionnée des gens, de l’éducation et elle
                        croit foncièrement qu’avec l’aide d’<span class=\"text-primary\">outils</span> et d’une
                        <span class=\"text-primary\">attitude bienveillante, on peut donner des ailes à un enfant!</span>
                        Très curieuse, elle est toujours à l’affût de nouvelles connaissances et prend de nombreuses
                        formations pour parfaire son expertise dans le domaine. Chaleureuse de nature, elle sait mettre
                        les familles à l’aise dans une ambiance de non-jugement.
                    </p>

                    <p>
                        Maman de 2 enfants, elle comprend les enjeux de la vie quotidienne que peuvent vivre les
                        parents. C’est exactement pour cette raison qu’elle s’est donnée comme mandat de trouver des
                        stratégies pour <span class=\"text-primary\">rendre le quotidien des familles plus agréable où chacun pourra évoluer</span>.
                    </p>
                </div>
            </div>

            <div class=\"top-buffer-lg\"></div>
        </div>
    </section>
    <section class=\"mission parallax\">
        <div class=\"container\">
            <div class=\"row top-buffer-lg\">
                <div class=\"col-sm-8 col-sm-offset-2 text-center\">
                    <h2>Notre mission</h2>

                    <p>La mission de l’entreprise est de soutenir les parents ainsi que leurs enfants dans leur réalité
                        familiale pour leur permettre d’évoluer et de trouver des solutions personnelles aux difficultés
                        qu’ils rencontrent. Le but est d’améliorer les relations parents-enfants et d’aider chacun des
                        membres à augmenter leurs sentiments d’estime personnelle et de compétence.</p>
                    <div class=\"top-buffer-lg\"></div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"quotes\">
";
        // line 64
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("Quotes"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 65
        echo "    </section>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\betes\\AllianceEducation/themes/ae110815/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 65,  87 => 64,  36 => 16,  19 => 1,);
    }
}
/* <div class="page-about wrap-page">*/
/*     <div id="header-contact" class="section-header">*/
/*         <div class="jumbotron">*/
/*             <div class="container">*/
/*                 <h1>À propos d'Alliance Éducation</h1>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <section class="default-section">*/
/*         <div class="container">*/
/*             <div class="row top-buffer-lg">*/
/*                 <div class="col-sm-4">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-8 col-xs-offset-2 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2">*/
/*                             <img class="round-image img-responsive center-block"*/
/*                                  src="{{ 'assets/images/ae-client-about.jpg'|theme }}">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="col-sm-8 mobile-top-buffer">*/
/*                     <p>*/
/*                         Alliance Éducation a été fondée par Nathalie Miron, coach familial, diplômée en éducation à*/
/*                         l’enfance depuis 2004, ancienne entraîneuse sportive pour athlètes et pour la population*/
/*                         générale. La fondatrice d’Alliance Éducation a décidé de combiner ses savoirs en éducation et en*/
/*                         coaching sportif pour offrir des services en coaching familial. Ayant travaillé plusieurs années*/
/*                         à titre d’éducatrice en CPE, elle a développé un savoir-faire de qualité qui soutient l’enfant à*/
/*                         travers son développement global et soutient aussi ses parents en les outillant davantage pour*/
/*                         mieux cheminer avec leur enfant. C’est une femme passionnée des gens, de l’éducation et elle*/
/*                         croit foncièrement qu’avec l’aide d’<span class="text-primary">outils</span> et d’une*/
/*                         <span class="text-primary">attitude bienveillante, on peut donner des ailes à un enfant!</span>*/
/*                         Très curieuse, elle est toujours à l’affût de nouvelles connaissances et prend de nombreuses*/
/*                         formations pour parfaire son expertise dans le domaine. Chaleureuse de nature, elle sait mettre*/
/*                         les familles à l’aise dans une ambiance de non-jugement.*/
/*                     </p>*/
/* */
/*                     <p>*/
/*                         Maman de 2 enfants, elle comprend les enjeux de la vie quotidienne que peuvent vivre les*/
/*                         parents. C’est exactement pour cette raison qu’elle s’est donnée comme mandat de trouver des*/
/*                         stratégies pour <span class="text-primary">rendre le quotidien des familles plus agréable où chacun pourra évoluer</span>.*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="top-buffer-lg"></div>*/
/*         </div>*/
/*     </section>*/
/*     <section class="mission parallax">*/
/*         <div class="container">*/
/*             <div class="row top-buffer-lg">*/
/*                 <div class="col-sm-8 col-sm-offset-2 text-center">*/
/*                     <h2>Notre mission</h2>*/
/* */
/*                     <p>La mission de l’entreprise est de soutenir les parents ainsi que leurs enfants dans leur réalité*/
/*                         familiale pour leur permettre d’évoluer et de trouver des solutions personnelles aux difficultés*/
/*                         qu’ils rencontrent. Le but est d’améliorer les relations parents-enfants et d’aider chacun des*/
/*                         membres à augmenter leurs sentiments d’estime personnelle et de compétence.</p>*/
/*                     <div class="top-buffer-lg"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <section id="quotes">*/
/* {% component 'Quotes' %}*/
/*     </section>*/
/* </div>*/
