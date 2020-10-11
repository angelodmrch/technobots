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

/* C:\xampp\htdocs\technobots/plugins/dmrch/banner/components/banner/default.htm */
class __TwigTemplate_6981118079dfe037dc429bdf9742801fb47478b30d463b6a3426264e13158c00 extends \Twig\Template
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
        $tags = array("set" => 2, "for" => 6, "if" => 9, "put" => 22);
        $filters = array("escape" => 7, "raw" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'put'],
                ['escape', 'raw'],
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
        echo "
";
        // line 2
        $context["banners"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "banners", [], "any", false, false, true, 2);
        // line 3
        echo "
<div id=\"banner-container\" style=\"position: relative;\">
\t<div id=\"banner-carousel\" class=\"my-slider\">
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["getB"]) {
            echo "\t
\t\t\t<div class=\"item-banner\" style=\"background: url('";
            // line 7
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["getB"], "image", [], "any", false, false, true, 7), "getPath", [], "method", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "') center no-repeat; min-height: 500px;\">
\t\t\t\t<span class=\"item-description\">
\t\t\t\t\t";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["getB"], "description", [], "any", false, false, true, 9)) {
                // line 10
                echo "\t\t\t\t\t\t<p>";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["getB"], "description", [], "any", false, false, true, 10), 10, $this->source);
                echo "</p>
\t\t\t\t\t";
            }
            // line 12
            echo "
\t\t\t\t\t";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["getB"], "link_on", [], "any", false, false, true, 13)) {
                // line 14
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["getB"], "link", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["getB"], "target", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\" class=\"btn btn-primary\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["getB"], "btn_title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 16
            echo "\t\t\t\t</span>\t\t\t
\t\t\t</div>\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['getB'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</div>
</div>

";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 23
        echo "\t<script>
\t\tvar slider = tns({
\t\t    container: '#banner-carousel',
\t\t    mode: \"gallery\",
\t\t    items: 1,    \t\t
    \t\tspeed: 1000,
    \t\tloop: true,
    \t\tautoplayHoverPause: true,
    \t\tautoplayButtonOutput: false,
    \t\tcenter: true,
    \t\tautoplayTimeout: 7000,
    \t\tautoplay: true,
    \t\tcontrols: ";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "controls"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
        echo ",
    \t\tnav: ";
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "nav"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
        echo ",
    \t\tcontrolsPosition: 'bottom',
    \t\tnavPosition: 'bottom',
\t\t});
\t</script>
";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\technobots/plugins/dmrch/banner/components/banner/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 22,  139 => 36,  135 => 35,  121 => 23,  119 => 22,  114 => 19,  106 => 16,  96 => 14,  94 => 13,  91 => 12,  85 => 10,  83 => 9,  78 => 7,  72 => 6,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% set banners = __SELF__.banners %}

<div id=\"banner-container\" style=\"position: relative;\">
\t<div id=\"banner-carousel\" class=\"my-slider\">
\t\t{% for getB in banners %}\t
\t\t\t<div class=\"item-banner\" style=\"background: url('{{ getB.image.getPath() }}') center no-repeat; min-height: 500px;\">
\t\t\t\t<span class=\"item-description\">
\t\t\t\t\t{% if getB.description %}
\t\t\t\t\t\t<p>{{ getB.description|raw }}</p>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if getB.link_on %}
\t\t\t\t\t\t<a href=\"{{ getB.link }}\" target=\"{{ getB.target }}\" class=\"btn btn-primary\">{{ getB.btn_title }}</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</span>\t\t\t
\t\t\t</div>\t
\t\t{% endfor %}
\t</div>
</div>

{% put scripts %}
\t<script>
\t\tvar slider = tns({
\t\t    container: '#banner-carousel',
\t\t    mode: \"gallery\",
\t\t    items: 1,    \t\t
    \t\tspeed: 1000,
    \t\tloop: true,
    \t\tautoplayHoverPause: true,
    \t\tautoplayButtonOutput: false,
    \t\tcenter: true,
    \t\tautoplayTimeout: 7000,
    \t\tautoplay: true,
    \t\tcontrols: {{ __SELF__.property('controls') }},
    \t\tnav: {{ __SELF__.property('nav') }},
    \t\tcontrolsPosition: 'bottom',
    \t\tnavPosition: 'bottom',
\t\t});
\t</script>
{% endput %}", "C:\\xampp\\htdocs\\technobots/plugins/dmrch/banner/components/banner/default.htm", "");
    }
}
