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

/* C:\xampp\htdocs\technobots/themes/default/partials/forms/contato.htm */
class __TwigTemplate_94b2ad3d7c43e040deb522a6da59302d09c3470ff7a0f984ba3e58aed43d2abb extends \Twig\Template
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
        $tags = array("if" => 9, "set" => 48);
        $filters = array("escape" => 10, "length" => 70);
        $functions = array("form_ajax" => 1, "post" => 9, "form_close" => 58);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'length'],
                ['form_ajax', 'post', 'form_close']
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "contato::onSubmit", ["update" => ["forms/contato" => "#contato-from"]]]);
        echo "

<input type=\"hidden\" name=\"area\" value=\"Fale Conosco\">

<div class=\"row\">
\t<div class=\"col-lg-12 col-12\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"nome\">NOME</label>
\t\t\t<input type=\"text\" name=\"nome\" class=\"form-custom ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contato"] ?? null), "errors", [], "any", false, false, true, 9), "first", [0 => "nome"], "method", false, false, true, 9)) {
            echo "validate";
        }
        echo "\" id=\"nome\" value=\"";
        echo post("nome");
        echo "\">
\t\t\t<span class=\"error\">";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contato"] ?? null), "errors", [], "any", false, false, true, 10), "first", [0 => "nome"], "method", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</span>
\t\t</div>\t
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-lg-12 col-12\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\">E-MAIL</label>
\t\t\t<input type=\"email\" name=\"email\" class=\"form-custom ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contato"] ?? null), "errors", [], "any", false, false, true, 19), "first", [0 => "email"], "method", false, false, true, 19)) {
            echo "validate";
        }
        echo "\" id=\"email\" value=\"";
        echo post("email");
        echo "\">
\t\t\t<span class=\"error\">";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contato"] ?? null), "errors", [], "any", false, false, true, 20), "first", [0 => "email"], "method", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</span>
\t\t</div>\t
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-lg-12 col-12\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"telefone\">TELEFONE</label>
\t\t\t<input type=\"text\" name=\"telefone\" class=\"form-custom ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contato"] ?? null), "errors", [], "any", false, false, true, 29), "first", [0 => "telefone"], "method", false, false, true, 29)) {
            echo "validate";
        }
        echo "\" id=\"telefone\" value=\"";
        echo post("telefone");
        echo "\">
\t\t\t<span class=\"error\">";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contato"] ?? null), "errors", [], "any", false, false, true, 30), "first", [0 => "telefone"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "</span>
\t\t</div>\t
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-lg-12 col-12\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"nome\">MENSAGEM</label>
\t\t\t<textarea name=\"mensagem\" id=\"mensagem\" class=\"form-custom ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contato"] ?? null), "errors", [], "any", false, false, true, 39), "first", [0 => "mensagem"], "method", false, false, true, 39)) {
            echo "validate";
        }
        echo "\">";
        echo post("mensagem");
        echo "</textarea>
\t\t\t<span class=\"error\">";
        // line 40
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contato"] ?? null), "errors", [], "any", false, false, true, 40), "first", [0 => "mensagem"], "method", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "</span>
\t\t</div>\t
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-lg-12 col-12 text-right\">

\t\t";
        // line 48
        $context["mc"] = twig_get_attribute($this->env, $this->source, ($context["contato"] ?? null), "getConfig", [], "method", false, false, true, 48);
        // line 49
        echo "\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["mc"] ?? null), "site_key", [], "any", false, false, true, 49) && twig_get_attribute($this->env, $this->source, ($context["mc"] ?? null), "secret_key", [], "any", false, false, true, 49))) {
            // line 50
            echo "\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mc"] ?? null), "site_key", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "\"></div>
\t\t\t<span class=\"error\">";
            // line 51
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contato"] ?? null), "errors", [], "any", false, false, true, 51), "first", [0 => "g-recaptcha-response"], "method", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 53
        echo "
\t\t<button type=\"submit\" class=\"btn btn-red\"><div class=\"span\">ENVIAR</div></button>
\t</div>
</div>

";
        // line 58
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "

<div class=\"row\">
\t<div class=\"col-lg-12 col-12\">
\t\t";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["contato"] ?? null), "success", [], "any", false, false, true, 62)) {
            // line 63
            echo "\t\t\t<div class=\"alert alert-success mt-2\">
\t\t\t\t<p class=\"font-regular\">Mensagem enviada com sucesso!</p>
\t\t\t\t<p class=\"font-regular\">Agradecemos o seu contato. Aguarde em breve responderemos.</p>
\t\t\t</div>

\t\t\t";
        } else {
            // line 69
            echo "
\t\t\t";
            // line 70
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contato"] ?? null), "errors", [], "any", false, false, true, 70)) > 0)) {
                // line 71
                echo "\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t<p>Ocorreram erros de validação. Verifique o formulário</p>
\t\t\t\t</div>
\t\t\t";
            }
            // line 75
            echo "\t\t";
        }
        // line 76
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\technobots/themes/default/partials/forms/contato.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 76,  202 => 75,  196 => 71,  194 => 70,  191 => 69,  183 => 63,  181 => 62,  174 => 58,  167 => 53,  162 => 51,  157 => 50,  154 => 49,  152 => 48,  141 => 40,  133 => 39,  121 => 30,  113 => 29,  101 => 20,  93 => 19,  81 => 10,  73 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('contato::onSubmit', { update: { 'forms/contato': '#contato-from' }}) }}

<input type=\"hidden\" name=\"area\" value=\"Fale Conosco\">

<div class=\"row\">
\t<div class=\"col-lg-12 col-12\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"nome\">NOME</label>
\t\t\t<input type=\"text\" name=\"nome\" class=\"form-custom {% if contato.errors.first('nome') %}validate{% endif %}\" id=\"nome\" value=\"{{ post('nome') }}\">
\t\t\t<span class=\"error\">{{contato.errors.first('nome')}}</span>
\t\t</div>\t
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-lg-12 col-12\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\">E-MAIL</label>
\t\t\t<input type=\"email\" name=\"email\" class=\"form-custom {% if contato.errors.first('email') %}validate{% endif %}\" id=\"email\" value=\"{{ post('email') }}\">
\t\t\t<span class=\"error\">{{contato.errors.first('email')}}</span>
\t\t</div>\t
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-lg-12 col-12\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"telefone\">TELEFONE</label>
\t\t\t<input type=\"text\" name=\"telefone\" class=\"form-custom {% if contato.errors.first('telefone') %}validate{% endif %}\" id=\"telefone\" value=\"{{ post('telefone') }}\">
\t\t\t<span class=\"error\">{{contato.errors.first('telefone')}}</span>
\t\t</div>\t
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-lg-12 col-12\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"nome\">MENSAGEM</label>
\t\t\t<textarea name=\"mensagem\" id=\"mensagem\" class=\"form-custom {% if contato.errors.first('mensagem') %}validate{% endif %}\">{{ post('mensagem') }}</textarea>
\t\t\t<span class=\"error\">{{contato.errors.first('mensagem')}}</span>
\t\t</div>\t
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-lg-12 col-12 text-right\">

\t\t{% set mc = contato.getConfig() %}
\t\t{% if mc.site_key and mc.secret_key %}
\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"{{ mc.site_key }}\"></div>
\t\t\t<span class=\"error\">{{contato.errors.first('g-recaptcha-response')}}</span>
\t\t{% endif %}

\t\t<button type=\"submit\" class=\"btn btn-red\"><div class=\"span\">ENVIAR</div></button>
\t</div>
</div>

{{ form_close() }}

<div class=\"row\">
\t<div class=\"col-lg-12 col-12\">
\t\t{% if contato.success %}
\t\t\t<div class=\"alert alert-success mt-2\">
\t\t\t\t<p class=\"font-regular\">Mensagem enviada com sucesso!</p>
\t\t\t\t<p class=\"font-regular\">Agradecemos o seu contato. Aguarde em breve responderemos.</p>
\t\t\t</div>

\t\t\t{% else %}

\t\t\t{% if contato.errors|length > 0 %}
\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t<p>Ocorreram erros de validação. Verifique o formulário</p>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t{% endif %}
\t</div>
</div>", "C:\\xampp\\htdocs\\technobots/themes/default/partials/forms/contato.htm", "");
    }
}
