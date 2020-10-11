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

/* C:\wamp64\www\technobots/themes/default/partials/layout/footer.htm */
class __TwigTemplate_58a117f3e0074782045d9437c54350003277281c265e2b8377124220c67f54e2 extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 21, "date" => 21);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
                []
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
        echo "<div id=\"info\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 col-xs-6 mb-3\">
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt tempore modi repellendus maiores nulla cum veniam repudiandae dolorem optio debitis, provident, soluta inventore similique. Dicta nam incidunt deleniti, consectetur porro!
\t\t\t</div>

\t\t\t<div class=\"col-md-3 col-xs-6 mb-3\">
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt tempore modi repellendus maiores nulla cum veniam repudiandae dolorem optio debitis, provident, soluta inventore similique. Dicta nam incidunt deleniti, consectetur porro!
\t\t\t</div>

\t\t\t<div class=\"col-md-6 col-xs-12 mb-3\">
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt tempore modi repellendus maiores nulla cum veniam repudiandae dolorem optio debitis, provident, soluta inventore similique. Dicta nam incidunt deleniti, consectetur porro!
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div id=\"copyright\">
\t<div class=\"container\">
\t\t&copy; ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Todos os direitos reservados
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\technobots/themes/default/partials/layout/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"info\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 col-xs-6 mb-3\">
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt tempore modi repellendus maiores nulla cum veniam repudiandae dolorem optio debitis, provident, soluta inventore similique. Dicta nam incidunt deleniti, consectetur porro!
\t\t\t</div>

\t\t\t<div class=\"col-md-3 col-xs-6 mb-3\">
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt tempore modi repellendus maiores nulla cum veniam repudiandae dolorem optio debitis, provident, soluta inventore similique. Dicta nam incidunt deleniti, consectetur porro!
\t\t\t</div>

\t\t\t<div class=\"col-md-6 col-xs-12 mb-3\">
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt tempore modi repellendus maiores nulla cum veniam repudiandae dolorem optio debitis, provident, soluta inventore similique. Dicta nam incidunt deleniti, consectetur porro!
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div id=\"copyright\">
\t<div class=\"container\">
\t\t&copy; {{ \"now\"|date(\"Y\") }} - Todos os direitos reservados
\t</div>
</div>", "C:\\wamp64\\www\\technobots/themes/default/partials/layout/footer.htm", "");
    }
}
