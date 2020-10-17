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

/* C:\wamp64\www\technobots/themes/default/partials/layout/menu.htm */
class __TwigTemplate_555ab38bdd54dae0dc28bc309cc4ab14f3db6e04947a97e705f8023c57468ab7 extends \Twig\Template
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
        $tags = array("if" => 2);
        $filters = array();
        $functions = array("url" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['url']
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
        echo "<ul>
\t<li><a href=\"";
        // line 2
        echo url("/");
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 2), "id", [], "any", false, false, true, 2) == "home")) {
            echo "class=\"active\"";
        }
        echo ">Home</a></li>\t
\t<li><a href=\"";
        // line 3
        echo url("/");
        echo "#quem-somos\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "id", [], "any", false, false, true, 3) == "quem-somos")) {
            echo "class=\"active\"";
        }
        echo ">Quem Somos</a></li>\t
\t<li><a href=\"";
        // line 4
        echo url("produtos");
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "id", [], "any", false, false, true, 4) == "produtos")) {
            echo "class=\"active\"";
        }
        echo ">Produtos</a></li>
\t<li><a href=\"";
        // line 5
        echo url("contato");
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "id", [], "any", false, false, true, 5) == "contato")) {
            echo "class=\"active\"";
        }
        echo ">Contato</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\technobots/themes/default/partials/layout/menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 5,  81 => 4,  73 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
\t<li><a href=\"{{ url('/') }}\" {% if this.page.id == \"home\" %}class=\"active\"{% endif %}>Home</a></li>\t
\t<li><a href=\"{{ url('/') }}#quem-somos\" {% if this.page.id == \"quem-somos\" %}class=\"active\"{% endif %}>Quem Somos</a></li>\t
\t<li><a href=\"{{ url('produtos') }}\" {% if this.page.id == \"produtos\" %}class=\"active\"{% endif %}>Produtos</a></li>
\t<li><a href=\"{{ url('contato') }}\" {% if this.page.id == \"contato\" %}class=\"active\"{% endif %}>Contato</a></li>
</ul>", "C:\\wamp64\\www\\technobots/themes/default/partials/layout/menu.htm", "");
    }
}
