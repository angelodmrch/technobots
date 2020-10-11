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

/* C:\wamp64\www\technobots/themes/default/pages/404.htm */
class __TwigTemplate_fbdb4daec09df8b98441572b032738b3d601cf6447b615a9ddd7287996488e65 extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<div class=\"content-page\">
\t<div class=\"container text\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-xs-12 \">

\t\t\t\t<h1 class=\"fw-regular letter-spacing-5 gold-color uppercase mt-0 mb-3 text-center\" style=\"font-size: 100px\">404</h1>
\t\t\t\t<br>
\t\t\t\t<h1 class=\"fw-regular letter-spacing-5 gold-color uppercase mt-0 mb-3 text-center\" style=\"font-size: 23px\">Página não encontrada!</h1>
\t\t\t\t\t
\t\t\t\t<a href=\"javascript:history.back();\" class=\"fw-regular fs-20 gold-color text-center\"> < Voltar</a>

\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\technobots/themes/default/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-page\">
\t<div class=\"container text\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-xs-12 \">

\t\t\t\t<h1 class=\"fw-regular letter-spacing-5 gold-color uppercase mt-0 mb-3 text-center\" style=\"font-size: 100px\">404</h1>
\t\t\t\t<br>
\t\t\t\t<h1 class=\"fw-regular letter-spacing-5 gold-color uppercase mt-0 mb-3 text-center\" style=\"font-size: 23px\">Página não encontrada!</h1>
\t\t\t\t\t
\t\t\t\t<a href=\"javascript:history.back();\" class=\"fw-regular fs-20 gold-color text-center\"> < Voltar</a>

\t\t\t</div>
\t\t</div>
\t</div>
</div>", "C:\\wamp64\\www\\technobots/themes/default/pages/404.htm", "");
    }
}
