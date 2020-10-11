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

/* C:\wamp64\www\technobots/themes/default/pages/contato.htm */
class __TwigTemplate_74ec6b41bffb61db8304e49e62ccc946b8a982731c3870d2d7c59d3969533ceb extends \Twig\Template
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
        $tags = array("component" => 3, "put" => 12);
        $filters = array("theme" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'put'],
                ['theme'],
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
        echo "<div id=\"contato\">\t
\t<div class=\"container\">
\t\t";
        // line 3
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['code'] = "contact"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("forms"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "\t</div>
</div>

<div id=\"map\">
\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5027.280221999267!2d-48.62919183869824!3d-27.00411872350334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d8b66dd78fc963%3A0xb549ab44a31c5ec3!2sR.+3160%2C+484+-+Centro%2C+Balne%C3%A1rio+Cambori%C3%BA+-+SC%2C+88330-284!5e0!3m2!1spt-BR!2sbr!4v1545131663394\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
</div>


";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 13
        echo "\t<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/main.min.css"]);
        echo "\" rel=\"stylesheet\">
";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\technobots/themes/default/pages/contato.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 12,  83 => 13,  81 => 12,  71 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"contato\">\t
\t<div class=\"container\">
\t\t{% component 'forms' code=\"contact\" %}
\t</div>
</div>

<div id=\"map\">
\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5027.280221999267!2d-48.62919183869824!3d-27.00411872350334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d8b66dd78fc963%3A0xb549ab44a31c5ec3!2sR.+3160%2C+484+-+Centro%2C+Balne%C3%A1rio+Cambori%C3%BA+-+SC%2C+88330-284!5e0!3m2!1spt-BR!2sbr!4v1545131663394\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
</div>


{% put styles %}
\t<link href=\"{{ ['assets/css/main.min.css']|theme }}\" rel=\"stylesheet\">
{% endput %}", "C:\\wamp64\\www\\technobots/themes/default/pages/contato.htm", "");
    }
}
