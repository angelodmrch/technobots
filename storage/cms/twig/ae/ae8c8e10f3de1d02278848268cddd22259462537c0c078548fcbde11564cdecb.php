<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\wamp64\www\technobots/themes/default/partials/layout/header.htm */
class __TwigTemplate_dea37eba58364168404e8e8956f71169b7b223bce9881fa54aabb1fff2dbd0c3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("partial" => 10);
        $filters = array();
        $functions = array("url" => 5, "asset" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                [],
                ['url', 'asset']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"primary-navigation\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<div class=\"logo\"><a href=\"";
        // line 5
        echo url("/");
        echo "\"><img src=\"";
        echo asset("themes/default/assets/images/logo.png");
        echo "\" alt=\"Technobots\" ></a></div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-6 text-center\">
\t\t\t\t<nav>
\t\t\t\t\t";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "\t\t\t\t</nav>
\t\t\t</div>

\t\t\t<div class=\"col-lg-3 text-right social\">
\t\t\t\t<a href=\"https://www.instagram.com/technobots.ltda/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t<a href=\"https://www.facebook.com/technobots01\" target=\"_blank\"><i class=\"fab fa-facebook-square\"></i></a>
\t\t\t</div>
\t\t</div>\t\t\t
\t</div>
</div>

<div id=\"mobile-navigation\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t<div class=\"logo\"><a href=\"";
        // line 26
        echo url("/");
        echo "\"><img src=\"";
        echo asset("themes/default/assets/images/logo.png");
        echo "\" alt=\"Technobots\" width=\"300px\" style=\"max-width: 100%\"></a></div>
\t\t\t</div>

\t\t\t<div class=\"col-3 social text-left\"> 
\t\t\t\t<a id=\"simple-menu\" href=\"#sidr\" style=\"margin: 0;\"><i class=\"fas fa-bars\"></i></a>
\t\t\t</div>

\t\t\t<div class=\"col-9 social text-right\"> 
\t\t\t\t<a href=\"https://www.instagram.com/technobots.ltda/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t<a href=\"https://www.facebook.com/technobots01\" target=\"_blank\"><i class=\"fab fa-facebook-square\"></i></a>
\t\t\t</div>

\t\t</div>

\t\t<div id=\"sidr\">
\t\t\t";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\technobots/themes/default/partials/layout/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 42,  119 => 41,  99 => 26,  82 => 11,  78 => 10,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"primary-navigation\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<div class=\"logo\"><a href=\"{{ url('/') }}\"><img src=\"{{ asset('themes/default/assets/images/logo.png') }}\" alt=\"Technobots\" ></a></div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-6 text-center\">
\t\t\t\t<nav>
\t\t\t\t\t{% partial \"layout/menu\" %}
\t\t\t\t</nav>
\t\t\t</div>

\t\t\t<div class=\"col-lg-3 text-right social\">
\t\t\t\t<a href=\"https://www.instagram.com/technobots.ltda/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t<a href=\"https://www.facebook.com/technobots01\" target=\"_blank\"><i class=\"fab fa-facebook-square\"></i></a>
\t\t\t</div>
\t\t</div>\t\t\t
\t</div>
</div>

<div id=\"mobile-navigation\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t<div class=\"logo\"><a href=\"{{ url('/') }}\"><img src=\"{{ asset('themes/default/assets/images/logo.png') }}\" alt=\"Technobots\" width=\"300px\" style=\"max-width: 100%\"></a></div>
\t\t\t</div>

\t\t\t<div class=\"col-3 social text-left\"> 
\t\t\t\t<a id=\"simple-menu\" href=\"#sidr\" style=\"margin: 0;\"><i class=\"fas fa-bars\"></i></a>
\t\t\t</div>

\t\t\t<div class=\"col-9 social text-right\"> 
\t\t\t\t<a href=\"https://www.instagram.com/technobots.ltda/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t<a href=\"https://www.facebook.com/technobots01\" target=\"_blank\"><i class=\"fab fa-facebook-square\"></i></a>
\t\t\t</div>

\t\t</div>

\t\t<div id=\"sidr\">
\t\t\t{% partial \"layout/menu\" %}
\t\t</div>
\t</div>
</div>", "C:\\wamp64\\www\\technobots/themes/default/partials/layout/header.htm", "");
    }
}
