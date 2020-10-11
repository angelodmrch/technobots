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
        $tags = array("partial" => 25);
        $filters = array();
        $functions = array("url" => 5, "asset" => 5, "form_open" => 12, "form_close" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                [],
                ['url', 'asset', 'form_open', 'form_close']
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
        echo "\" alt=\"LOGO\" width=\"143px\"></a></div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-9 text-left\">
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 busca\">
\t\t\t\t\t\t";
        // line 12
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open", ["request" => "produto::onSubmit"]]);
        echo "
\t\t\t\t\t\t\t<input type=\"text\" name=\"query\" placeholder=\"BUSCA\"><button type=\"submit\" class=\"btn btn-gray\"><i class=\"fas fa-search\"></i></button>
\t\t\t\t\t\t";
        // line 14
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-6 social text-right\"> 
\t\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-facebook-square\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<nav>
\t\t\t\t\t";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>\t\t\t
\t</div>
</div>

<div id=\"mobile-navigation\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-right\">
\t\t\t\t<div class=\"logo\"><a href=\"";
        // line 36
        echo url("/");
        echo "\"><img src=\"";
        echo asset("themes/default/assets/images/logo.png");
        echo "\" alt=\"LOGO\" width=\"143px\" style=\"max-width: 100%\"></a></div>
\t\t\t</div>

\t\t\t<div class=\"col-12 busca\">
\t\t\t\t";
        // line 40
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open", ["request" => "produto::onSubmit"]]);
        echo "
\t\t\t\t\t<input type=\"text\" name=\"query\" placeholder=\"BUSCA\"><button type=\"submit\" class=\"btn btn-gray\"><i class=\"fas fa-search\"></i></button>
\t\t\t\t";
        // line 42
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
\t\t\t</div>

\t\t\t<div class=\"col-3 social text-left\"> 
\t\t\t\t<a id=\"simple-menu\" href=\"#sidr\" style=\"margin: 0;\"><i class=\"fas fa-bars\"></i></a>
\t\t\t</div>

\t\t\t<div class=\"col-9 social text-right\"> 
\t\t\t\t<a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t<a href=\"#\"><i class=\"fab fa-facebook-square\"></i></a>
\t\t\t\t<a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a>
\t\t\t</div>

\t\t</div>

\t\t<div id=\"sidr\">
\t\t\t";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 59
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
        return array (  152 => 59,  148 => 58,  129 => 42,  124 => 40,  115 => 36,  103 => 26,  99 => 25,  85 => 14,  80 => 12,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"primary-navigation\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<div class=\"logo\"><a href=\"{{ url('/') }}\"><img src=\"{{ asset('themes/default/assets/images/logo.png') }}\" alt=\"LOGO\" width=\"143px\"></a></div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-9 text-left\">
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 busca\">
\t\t\t\t\t\t{{ form_open({ request: 'produto::onSubmit' }) }}
\t\t\t\t\t\t\t<input type=\"text\" name=\"query\" placeholder=\"BUSCA\"><button type=\"submit\" class=\"btn btn-gray\"><i class=\"fas fa-search\"></i></button>
\t\t\t\t\t\t{{ form_close() }}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-6 social text-right\"> 
\t\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-facebook-square\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<nav>
\t\t\t\t\t{% partial \"layout/menu\" %}
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>\t\t\t
\t</div>
</div>

<div id=\"mobile-navigation\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-right\">
\t\t\t\t<div class=\"logo\"><a href=\"{{ url('/') }}\"><img src=\"{{ asset('themes/default/assets/images/logo.png') }}\" alt=\"LOGO\" width=\"143px\" style=\"max-width: 100%\"></a></div>
\t\t\t</div>

\t\t\t<div class=\"col-12 busca\">
\t\t\t\t{{ form_open({ request: 'produto::onSubmit' }) }}
\t\t\t\t\t<input type=\"text\" name=\"query\" placeholder=\"BUSCA\"><button type=\"submit\" class=\"btn btn-gray\"><i class=\"fas fa-search\"></i></button>
\t\t\t\t{{ form_close() }}
\t\t\t</div>

\t\t\t<div class=\"col-3 social text-left\"> 
\t\t\t\t<a id=\"simple-menu\" href=\"#sidr\" style=\"margin: 0;\"><i class=\"fas fa-bars\"></i></a>
\t\t\t</div>

\t\t\t<div class=\"col-9 social text-right\"> 
\t\t\t\t<a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t<a href=\"#\"><i class=\"fab fa-facebook-square\"></i></a>
\t\t\t\t<a href=\"#\"><i class=\"fas fa-shopping-cart\"></i></a>
\t\t\t</div>

\t\t</div>

\t\t<div id=\"sidr\">
\t\t\t{% partial \"layout/menu\" %}
\t\t</div>
\t</div>
</div>", "C:\\wamp64\\www\\technobots/themes/default/partials/layout/header.htm", "");
    }
}
