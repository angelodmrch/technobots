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

/* C:\xampp\htdocs\technobots/themes/default/layouts/default.htm */
class __TwigTemplate_6348f04b50891dd42bd5ebbc932f0ab691ed3eaafbee5ede92c3668416995908 extends \Twig\Template
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
        $tags = array("placeholder" => 13, "styles" => 16, "partial" => 44, "page" => 49, "framework" => 68, "scripts" => 70);
        $filters = array("escape" => 5, "theme" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['placeholder', 'styles', 'partial', 'page', 'framework', 'scripts'],
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
        echo "<!DOCTYPE html>
<html lang=\"pt\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "meta_description", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\" />
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\" />
        <meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "meta_key", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\" />
        <meta name=\"author\" content=\"Technobots\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"pinterest\" content=\"nopin\" />

        ";
        // line 13
        $context['__placeholder_head_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('head', $context['__placeholder_head_default_contents']);
        unset($context['__placeholder_head_default_contents']);        // line 14
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\" />
        ";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 17
        echo "        <link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/main.min.css", 2 => "bower_components/sidr/dist/stylesheets/jquery.sidr.light.css", 3 => "bower_components/tiny-slider/dist/tiny-slider.css"]);
        // line 22
        echo "\" rel=\"stylesheet\" /> 

        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.1/css/all.css\" integrity=\"sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP\" crossorigin=\"anonymous\">
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900\" rel=\"stylesheet\"> 

        <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    </head>
    <body>

        ";
        // line 32
        echo "        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-180299558-1\"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-180299558-1');
        </script>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "        </header>

        <!-- Content -->
        <div id=\"layout-content\">
            ";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 50
        echo "        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "bower_components/jquery/dist/jquery.js", 1 => "bower_components/sidr/dist/jquery.sidr.min.js", 2 => "bower_components/bootstrap/dist/js/bootstrap.min.js", 3 => "bower_components/tiny-slider/dist/min/tiny-slider.js"]);
        // line 61
        echo "\">
        </script>
        
        <script>                    
            \$('#simple-menu').sidr();            
        </script>
           
        ";
        // line 68
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 69
        echo "
        ";
        // line 70
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 71
        echo "
        ";
        // line 72
        $context['__placeholder_footer_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('footer', $context['__placeholder_footer_default_contents']);
        unset($context['__placeholder_footer_default_contents']);        // line 73
        echo "
        <a href=\"https://api.whatsapp.com/send?phone=5547992192045\" target=\"_blank\" class=\"whatsapp\"><img src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/whatsapp-logo.png");
        echo "\" alt=\"Whatsapp\"></a>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\technobots/themes/default/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 74,  188 => 73,  186 => 72,  183 => 71,  180 => 70,  177 => 69,  166 => 68,  157 => 61,  155 => 58,  150 => 55,  146 => 54,  140 => 50,  138 => 49,  132 => 45,  128 => 44,  114 => 32,  103 => 22,  100 => 17,  97 => 16,  93 => 15,  90 => 14,  88 => 13,  80 => 8,  76 => 7,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\" />
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\" />
        <meta name=\"keywords\" content=\"{{ this.page.meta_key }}\" />
        <meta name=\"author\" content=\"Technobots\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"pinterest\" content=\"nopin\" />

        {% placeholder head %}
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ 'assets/images/favicon.png'|theme }}\" />
        {% styles %}
        <link href=\"{{ [         
            'assets/css/bootstrap.min.css',
            'assets/css/main.min.css',
            'bower_components/sidr/dist/stylesheets/jquery.sidr.light.css',
            'bower_components/tiny-slider/dist/tiny-slider.css',
        ]|theme }}\" rel=\"stylesheet\" /> 

        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.1/css/all.css\" integrity=\"sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP\" crossorigin=\"anonymous\">
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900\" rel=\"stylesheet\"> 

        <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    </head>
    <body>

        {# **ANALYTICS** #}
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-180299558-1\"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-180299558-1');
        </script>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial \"layout/header\" %}
        </header>

        <!-- Content -->
        <div id=\"layout-content\">
            {% page %}
        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial \"layout/footer\" %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ ['bower_components/jquery/dist/jquery.js',
        'bower_components/sidr/dist/jquery.sidr.min.js',
        'bower_components/bootstrap/dist/js/bootstrap.min.js',
        'bower_components/tiny-slider/dist/min/tiny-slider.js']|theme }}\">
        </script>
        
        <script>                    
            \$('#simple-menu').sidr();            
        </script>
           
        {% framework extras %}

        {% scripts %}

        {% placeholder footer %}

        <a href=\"https://api.whatsapp.com/send?phone=5547992192045\" target=\"_blank\" class=\"whatsapp\"><img src=\"{{ 'assets/images/whatsapp-logo.png'|theme }}\" alt=\"Whatsapp\"></a>

    </body>
</html>", "C:\\xampp\\htdocs\\technobots/themes/default/layouts/default.htm", "");
    }
}
