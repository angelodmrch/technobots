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
        $tags = array("component" => 1, "for" => 20, "put" => 34);
        $filters = array("raw" => 7, "escape" => 23, "theme" => 70);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'for', 'put'],
                ['raw', 'escape', 'theme'],
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
<section id=\"quem-somos\">
\t<div class=\"container\">
\t\t<h1>Quem Somos</h1>\t

\t\t";
        // line 7
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["conteudo"] ?? null), "texto", [], "any", false, false, true, 7), 7, $this->source);
        echo "
\t</div>
</section>

<div id=\"clientes\">
\t<div class=\"container\">

\t\t<h1>Clientes</h1>

\t\t<div class=\"carousel-box\">

\t\t\t<div id=\"clientes-carousel\">

\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["conteudo"] ?? null), "clientes", [], "any", false, false, true, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 21
            echo "\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t<img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["c"], "getPath", [], "method", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
\t\t\t</div>

\t\t</div>
\t</div>
</div>

";
        // line 34
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
        // line 68
        echo "
";
        // line 69
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 70
        echo "\t<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/page.home.min.css"]);
        echo "\" rel=\"stylesheet\">
";
        // line 69
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
        return array (  165 => 69,  160 => 70,  158 => 69,  155 => 68,  118 => 34,  109 => 27,  97 => 23,  93 => 21,  89 => 20,  73 => 7,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'banners' %}

<section id=\"quem-somos\">
\t<div class=\"container\">
\t\t<h1>Quem Somos</h1>\t

\t\t{{ conteudo.texto|raw }}
\t</div>
</section>

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
