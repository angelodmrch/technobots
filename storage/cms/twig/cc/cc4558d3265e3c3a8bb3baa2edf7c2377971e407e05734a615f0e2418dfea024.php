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

/* C:\wamp64\www\technobots/plugins/dmrch/contact/components/form/form.htm */
class __TwigTemplate_2d10806460f5cf8170b29d65e6e8335bd56b8dd950043cadb646116f144e5d59 extends \Twig\Template
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
        $tags = array("if" => 1, "set" => 2, "for" => 30, "partial" => 74);
        $filters = array("raw" => 13, "length" => 15, "escape" => 25, "striptags" => 36, "replace" => 60);
        $functions = array("post" => 4, "form_ajax" => 23, "form_close" => 92);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'partial'],
                ['raw', 'length', 'escape', 'striptags', 'replace'],
                ['post', 'form_ajax', 'form_close']
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
        if (twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "property", [0 => "code"], "method", false, false, true, 1)) {
            // line 2
            echo "\t";
            $context["code"] = twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "property", [0 => "code"], "method", false, false, true, 2);
        } else {
            // line 4
            echo "\t";
            $context["code"] = post("form_code");
        }
        // line 6
        echo "
";
        // line 7
        $context["form"] = twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "getForm", [0 => ($context["code"] ?? null)], "method", false, false, true, 7);
        // line 8
        echo "
<div class=\"row\">
\t<div class=\"col-lg-12 col-12\">
\t\t";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "success", [], "any", false, false, true, 11)) {
            // line 12
            echo "\t\t\t<div class=\"alert alert-success\">
\t\t\t\t";
            // line 13
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "success_message", [], "any", false, false, true, 13), 13, $this->source);
            echo "
\t\t\t</div>
\t\t";
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 15
($context["forms"] ?? null), "errors", [], "any", false, false, true, 15)) > 0)) {
            // line 16
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 17
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "error_message", [], "any", false, false, true, 17), 17, $this->source);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 20
        echo "\t</div>
</div>

";
        // line 23
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "forms::onSubmit", ["update" => ["forms::form" => ("#form-container-" . $this->sandbox->ensureToStringAllowed(($context["code"] ?? null), 23, $this->source))], "enctype" => "multipart/form-data", "files" => true]]);
        echo "

<input type=\"hidden\" name=\"form_name\" id=\"form_name\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"form_code\" id=\"form_code\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "\">

<div class=\"row\">
\t
\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, true, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 31
            echo "
\t\t<div class=\"col-lg-";
            // line 32
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "columns", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo " col-12\">\t

\t\t\t";
            // line 34
            if ((((((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 34) == "text") || (twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 34) == "email")) || (twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 34) == "number")) || (twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 34) == "password")) || (twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 34) == "file"))) {
                // line 35
                echo "\t\t\t\t<label for=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "</label>
\t\t\t\t<input type=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "placeholder", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "\" class=\"form-control ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "errors", [], "any", false, false, true, 36), "first", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 36)], "method", false, false, true, 36)) {
                    echo "is-invalid";
                }
                echo "\" value=\"";
                echo twig_escape_filter($this->env, strip_tags(post($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 36), 36, $this->source))), "html", null, true);
                echo "\">
\t\t\t\t<span class=\"invalid-feedback\">";
                // line 37
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "errors", [], "any", false, false, true, 37), "first", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 37)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "</span>
\t\t\t";
            }
            // line 39
            echo "
\t\t\t";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 40) == "textarea")) {
                // line 41
                echo "\t\t\t\t<label for=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "</label>
\t\t\t\t<textarea name=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "placeholder", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "\" class=\"form-control ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "errors", [], "any", false, false, true, 42), "first", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 42)], "method", false, false, true, 42)) {
                    echo "is-invalid";
                }
                echo "\">";
                echo twig_escape_filter($this->env, strip_tags(post($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 42), 42, $this->source))), "html", null, true);
                echo "</textarea>
\t\t\t\t<span class=\"invalid-feedback\">";
                // line 43
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "errors", [], "any", false, false, true, 43), "first", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 43)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "</span>
\t\t\t";
            }
            // line 45
            echo "
\t\t\t";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 46) == "dropdown")) {
                // line 47
                echo "\t\t\t\t<label for=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "</label>
\t\t\t\t<select name=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "\" class=\"form-control ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "errors", [], "any", false, false, true, 48), "first", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 48)], "method", false, false, true, 48)) {
                    echo "is-invalid";
                }
                echo "\">
\t\t\t\t\t";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "options", [], "any", false, false, true, 49));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 50
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                    echo "</option>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t\t\t</select>
\t\t\t\t<span class=\"invalid-feedback\">";
                // line 53
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "errors", [], "any", false, false, true, 53), "first", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 53)], "method", false, false, true, 53), 53, $this->source), "html", null, true);
                echo "</span>
\t\t\t";
            }
            // line 55
            echo "
\t\t\t";
            // line 56
            if (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 56) == "radio_list") || (twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 56) == "checkbox_list"))) {
                // line 57
                echo "\t\t\t\t<label for=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                echo "</label>
\t\t\t\t
\t\t\t\t\t";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "options", [], "any", false, false, true, 59));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 60
                    echo "\t\t\t\t\t\t<input type=\"";
                    echo twig_escape_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 60), 60, $this->source), ["_list" => ""]), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                    echo "[]\" id=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                    echo "\" class=\"";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "errors", [], "any", false, false, true, 60), "first", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 60)], "method", false, false, true, 60)) {
                        echo "is-invalid";
                    }
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<label for=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    echo "</label>\t\t\t
\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t\t\t
\t\t\t\t<span class=\"invalid-feedback\">";
                // line 64
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "errors", [], "any", false, false, true, 64), "first", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 64)], "method", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "</span>
\t\t\t";
            }
            // line 66
            echo "
\t\t\t";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 67) == "checkbox")) {
                echo "\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "\" class=\"";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "errors", [], "any", false, false, true, 68), "first", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 68)], "method", false, false, true, 68)) {
                    echo "is-invalid";
                }
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "\">
\t\t\t\t<label for=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "</label>\t\t\t
\t\t\t\t<span class=\"invalid-feedback\">";
                // line 70
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "errors", [], "any", false, false, true, 70), "first", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, true, 70)], "method", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "</span>
\t\t\t";
            }
            // line 72
            echo "
\t\t\t";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, true, 73) == "partial")) {
                // line 74
                echo "\t\t\t\t";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, $context["field"], "partial", [], "any", false, false, true, 74)                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 75
                echo "\t\t\t";
            }
            // line 76
            echo "
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
\t<div class=\"col-lg-12 col-12\">\t\t

\t\t";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "getConfig", [0 => "site_key"], "method", false, false, true, 83) && twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "getConfig", [0 => "secret_key"], "method", false, false, true, 83))) {
            // line 84
            echo "\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "getConfig", [0 => "site_key"], "method", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "\"></div>
\t\t\t<span class=\"invalid-feedback\">";
            // line 85
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "errors", [], "any", false, false, true, 85), "first", [0 => "g-recaptcha-response"], "method", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 87
        echo "
\t\t<button type=\"submit\" class=\"btn btn-primary\">ENVIAR</button>
\t</div>
</div>

";
        // line 92
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\technobots/plugins/dmrch/contact/components/form/form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 92,  386 => 87,  381 => 85,  376 => 84,  374 => 83,  369 => 80,  360 => 76,  357 => 75,  352 => 74,  350 => 73,  347 => 72,  342 => 70,  336 => 69,  324 => 68,  320 => 67,  317 => 66,  312 => 64,  309 => 63,  289 => 61,  272 => 60,  255 => 59,  247 => 57,  245 => 56,  242 => 55,  237 => 53,  234 => 52,  223 => 50,  219 => 49,  209 => 48,  202 => 47,  200 => 46,  197 => 45,  192 => 43,  178 => 42,  171 => 41,  169 => 40,  166 => 39,  161 => 37,  145 => 36,  138 => 35,  136 => 34,  131 => 32,  128 => 31,  124 => 30,  117 => 26,  113 => 25,  108 => 23,  103 => 20,  97 => 17,  94 => 16,  92 => 15,  87 => 13,  84 => 12,  82 => 11,  77 => 8,  75 => 7,  72 => 6,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if forms.property('code') %}
\t{% set code = forms.property('code') %}
{% else %}
\t{% set code = post('form_code') %}
{% endif %}

{% set form = forms.getForm(code) %}

<div class=\"row\">
\t<div class=\"col-lg-12 col-12\">
\t\t{% if forms.success %}
\t\t\t<div class=\"alert alert-success\">
\t\t\t\t{{ form.success_message|raw }}
\t\t\t</div>
\t\t{% elseif forms.errors|length > 0 %}
\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t{{ form.error_message|raw }}
\t\t\t</div>
\t\t{% endif %}
\t</div>
</div>

{{ form_ajax('forms::onSubmit', { update: { 'forms::form': '#form-container-'~code }, enctype: 'multipart/form-data', files: true }) }}

<input type=\"hidden\" name=\"form_name\" id=\"form_name\" value=\"{{ form.name }}\">
<input type=\"hidden\" name=\"form_code\" id=\"form_code\" value=\"{{ form.code }}\">

<div class=\"row\">
\t
\t{% for field in form.fields %}

\t\t<div class=\"col-lg-{{ field.columns }} col-12\">\t

\t\t\t{% if field.type == 'text' or field.type == 'email' or field.type == 'number' or field.type == 'password' or field.type == 'file' %}
\t\t\t\t<label for=\"{{ field.name }}\">{{ field.label }}</label>
\t\t\t\t<input type=\"{{ field.type }}\" name=\"{{ field.name }}\" id=\"{{ field.name }}\" placeholder=\"{{ field.placeholder }}\" class=\"form-control {% if forms.errors.first(field.name) %}is-invalid{% endif %}\" value=\"{{ post(field.name)|striptags }}\">
\t\t\t\t<span class=\"invalid-feedback\">{{ forms.errors.first(field.name) }}</span>
\t\t\t{% endif %}

\t\t\t{% if field.type == 'textarea' %}
\t\t\t\t<label for=\"{{ field.name }}\">{{ field.label }}</label>
\t\t\t\t<textarea name=\"{{ field.name }}\" id=\"{{ field.name }}\" placeholder=\"{{ field.placeholder }}\" class=\"form-control {% if forms.errors.first(field.name) %}is-invalid{% endif %}\">{{ post(field.name)|striptags }}</textarea>
\t\t\t\t<span class=\"invalid-feedback\">{{ forms.errors.first(field.name) }}</span>
\t\t\t{% endif %}

\t\t\t{% if field.type == 'dropdown' %}
\t\t\t\t<label for=\"{{ field.name }}\">{{ field.label }}</label>
\t\t\t\t<select name=\"{{ field.name }}\" id=\"{{ field.name }}\" class=\"form-control {% if forms.errors.first(field.name) %}is-invalid{% endif %}\">
\t\t\t\t\t{% for option in field.options %}
\t\t\t\t\t\t<option value=\"{{ option.value }}\">{{ option.label }}</option>
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t\t<span class=\"invalid-feedback\">{{ forms.errors.first(field.name) }}</span>
\t\t\t{% endif %}

\t\t\t{% if field.type == 'radio_list' or field.type == 'checkbox_list' %}
\t\t\t\t<label for=\"{{ field.name }}\">{{ field.label }}</label>
\t\t\t\t
\t\t\t\t\t{% for option in field.options %}
\t\t\t\t\t\t<input type=\"{{ field.type|replace({ '_list':'' }) }}\" name=\"{{ field.name }}[]\" id=\"{{ field.name }}-{{ loop.index }}\" class=\"{% if forms.errors.first(field.name) %}is-invalid{% endif %}\" value=\"{{ option.value }}\">
\t\t\t\t\t\t<label for=\"{{ field.name }}-{{ loop.index }}\">{{ option.label }}</label>\t\t\t
\t\t\t\t\t{% endfor %}
\t\t\t\t
\t\t\t\t<span class=\"invalid-feedback\">{{ forms.errors.first(field.name) }}</span>
\t\t\t{% endif %}

\t\t\t{% if field.type == 'checkbox' %}\t\t\t\t
\t\t\t\t<input type=\"checkbox\" name=\"{{ field.name }}\" id=\"{{ field.name }}\" class=\"{% if forms.errors.first(field.name) %}is-invalid{% endif %}\" value=\"{{ field.value }}\">
\t\t\t\t<label for=\"{{ field.name }}\">{{ field.label }}</label>\t\t\t
\t\t\t\t<span class=\"invalid-feedback\">{{ forms.errors.first(field.name) }}</span>
\t\t\t{% endif %}

\t\t\t{% if field.type == 'partial' %}
\t\t\t\t{% partial field.partial %}
\t\t\t{% endif %}

\t\t</div>

\t{% endfor %}

\t<div class=\"col-lg-12 col-12\">\t\t

\t\t{% if forms.getConfig('site_key') and forms.getConfig('secret_key') %}
\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"{{ forms.getConfig('site_key') }}\"></div>
\t\t\t<span class=\"invalid-feedback\">{{ forms.errors.first('g-recaptcha-response') }}</span>
\t\t{% endif %}

\t\t<button type=\"submit\" class=\"btn btn-primary\">ENVIAR</button>
\t</div>
</div>

{{ form_close() }}", "C:\\wamp64\\www\\technobots/plugins/dmrch/contact/components/form/form.htm", "");
    }
}
