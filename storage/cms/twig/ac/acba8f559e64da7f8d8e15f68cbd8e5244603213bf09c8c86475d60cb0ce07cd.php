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

/* C:\wamp64\www\technobots/plugins/dmrch/contact/components/form/default.htm */
class __TwigTemplate_dd85286479f8eea5660141b3c51d58458d2a79a962957fedcf85ccb6f565821f extends \Twig\Template
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
        $tags = array("component" => 1);
        $filters = array("escape" => 1);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['escape'],
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
        echo "<div id=\"form-container-";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "property", [0 => "code"], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "\">";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['code'] = twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "property", [0 => "code"], "method", false, false, true, 1)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("forms::form"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\technobots/plugins/dmrch/contact/components/form/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"form-container-{{ forms.property('code')  }}\">{% component 'forms::form' code=forms.property('code')  %}</div>
", "C:\\wamp64\\www\\technobots/plugins/dmrch/contact/components/form/default.htm", "");
    }
}
