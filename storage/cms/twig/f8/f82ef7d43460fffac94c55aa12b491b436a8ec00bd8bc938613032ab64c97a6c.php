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

/* C:\xampp\htdocs\technobots/themes/default/pages/home.htm */
class __TwigTemplate_c094891034f86e08b8369da1981a86207573160495e7e4f718e94072a35bed46 extends \Twig\Template
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
        $tags = array("component" => 1, "for" => 12, "put" => 26);
        $filters = array("escape" => 15, "theme" => 62);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'for', 'put'],
                ['escape', 'theme'],
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("banners"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<div id=\"clientes\">
\t<div class=\"container\">

\t\t<h1>Clientes</h1>

\t\t<div class=\"carousel-box\">

\t\t\t<div id=\"clientes-carousel\">

\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["conteudo"] ?? null), "clientes", [], "any", false, false, true, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 13
            echo "\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t<img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["c"], "getPath", [], "method", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
\t\t\t</div>

\t\t</div>
\t</div>
</div>

";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        echo "\t\t
\t<script>
\t\tvar slider = tns({
\t\t    container: '#clientes-carousel',
\t\t    items: 5,    \t\t
    \t\tspeed: 1000,
    \t\tloop: true,
    \t\tautoplayHoverPause: true,
    \t\tautoplayButtonOutput: false,
    \t\tcenter: true,
    \t\tautoplayTimeout: 7000,
    \t\tautoplay: true,
    \t\tcontrols: true,
    \t\tnav: false,
    \t\tcontrolsPosition: 'top',
    \t\tnavPosition: 'bottom',
    \t\tcontrolsText: ['<i class=\"fas fa-chevron-left\"></i>','<i class=\"fas fa-chevron-right\"></i>'],
\t\t    responsive: {
\t\t      300: {
\t\t\t\titems: 1
\t\t      },
\t\t      576: {
\t\t        items: 1
\t\t      },
\t\t      768: {
\t\t        items: 3
\t\t      },
\t\t      992: {
\t\t        items: 5
\t\t      }
\t\t    }
\t\t});
\t</script>
";
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 60
        echo "
";
        // line 61
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 62
        echo "\t<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/page.home.min.css"]);
        echo "\" rel=\"stylesheet\">
";
        // line 61
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\technobots/themes/default/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 61,  149 => 62,  147 => 61,  144 => 60,  107 => 26,  98 => 19,  86 => 15,  82 => 13,  78 => 12,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'banners' %}

<div id=\"clientes\">
\t<div class=\"container\">

\t\t<h1>Clientes</h1>

\t\t<div class=\"carousel-box\">

\t\t\t<div id=\"clientes-carousel\">

\t\t\t\t{% for c in conteudo.clientes %}
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t<img src=\"{{ c.getPath() }}\" alt=\"{{ c.title }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}

\t\t\t</div>

\t\t</div>
\t</div>
</div>

{% put scripts %}\t\t
\t<script>
\t\tvar slider = tns({
\t\t    container: '#clientes-carousel',
\t\t    items: 5,    \t\t
    \t\tspeed: 1000,
    \t\tloop: true,
    \t\tautoplayHoverPause: true,
    \t\tautoplayButtonOutput: false,
    \t\tcenter: true,
    \t\tautoplayTimeout: 7000,
    \t\tautoplay: true,
    \t\tcontrols: true,
    \t\tnav: false,
    \t\tcontrolsPosition: 'top',
    \t\tnavPosition: 'bottom',
    \t\tcontrolsText: ['<i class=\"fas fa-chevron-left\"></i>','<i class=\"fas fa-chevron-right\"></i>'],
\t\t    responsive: {
\t\t      300: {
\t\t\t\titems: 1
\t\t      },
\t\t      576: {
\t\t        items: 1
\t\t      },
\t\t      768: {
\t\t        items: 3
\t\t      },
\t\t      992: {
\t\t        items: 5
\t\t      }
\t\t    }
\t\t});
\t</script>
{% endput %}

{% put styles %}
\t<link href=\"{{ ['assets/css/page.home.min.css']|theme }}\" rel=\"stylesheet\">
{% endput %}", "C:\\xampp\\htdocs\\technobots/themes/default/pages/home.htm", "");
    }
}
