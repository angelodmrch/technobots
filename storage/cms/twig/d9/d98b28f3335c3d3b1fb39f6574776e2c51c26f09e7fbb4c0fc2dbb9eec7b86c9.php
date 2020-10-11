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

/* C:\xampp\htdocs\technobots/themes/default/pages/contato.htm */
class __TwigTemplate_f299918e3d9515c25a27d5074321b719678f5773cc191c3948530701357a3a4e extends \Twig\Template
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
        $tags = array("component" => 10, "put" => 25);
        $filters = array("theme" => 26);
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
        echo "<section id=\"page-header\">
\t<div class=\"container\">
\t\t<div class=\"h1before\"></div>
\t\t<h1 class=\"\">Contato</h1>\t
\t</div>
</section>

<div id=\"contato\">
    <div class=\"container\">
        ";
        // line 10
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['code'] = "contact"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("forms"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "    </div>
</div>

<div id=\"map\">
   
\t<br>
\t
\t
\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.1254593481226!2d-48.946709885221075!3d-26.451684583328365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94deb8c73f7a0cc7%3A0xc86ac18386c31400!2sR.%20Jo%C3%A3o%20Chaves%20Cordeiro%20-%20Caixa%20d&#39;%C3%81gua%2C%20Guaramirim%20-%20SC%2C%2089270-000!5e0!3m2!1spt-PT!2sbr!4v1602448111278!5m2!1spt-PT!2sbr\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>

</div>



";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 26
        echo "\t<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/main.min.css"]);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/sass/page.contato.scss"]);
        echo "\" rel=\"stylesheet\">
";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\technobots/themes/default/pages/contato.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  101 => 27,  96 => 26,  94 => 25,  78 => 11,  73 => 10,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"page-header\">
\t<div class=\"container\">
\t\t<div class=\"h1before\"></div>
\t\t<h1 class=\"\">Contato</h1>\t
\t</div>
</section>

<div id=\"contato\">
    <div class=\"container\">
        {% component 'forms' code=\"contact\" %}
    </div>
</div>

<div id=\"map\">
   
\t<br>
\t
\t
\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.1254593481226!2d-48.946709885221075!3d-26.451684583328365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94deb8c73f7a0cc7%3A0xc86ac18386c31400!2sR.%20Jo%C3%A3o%20Chaves%20Cordeiro%20-%20Caixa%20d&#39;%C3%81gua%2C%20Guaramirim%20-%20SC%2C%2089270-000!5e0!3m2!1spt-PT!2sbr!4v1602448111278!5m2!1spt-PT!2sbr\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>

</div>



{% put styles %}
\t<link href=\"{{ ['assets/css/main.min.css']|theme }}\" rel=\"stylesheet\">
\t<link href=\"{{ ['assets/sass/page.contato.scss']|theme }}\" rel=\"stylesheet\">
{% endput %}", "C:\\xampp\\htdocs\\technobots/themes/default/pages/contato.htm", "");
    }
}
