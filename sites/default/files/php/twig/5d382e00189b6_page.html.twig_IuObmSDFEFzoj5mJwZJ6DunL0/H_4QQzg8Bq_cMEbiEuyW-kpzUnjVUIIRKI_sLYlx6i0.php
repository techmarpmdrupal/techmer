<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/gavias_tico/templates/page/page.html.twig */
class __TwigTemplate_a0a87e14d19dba6c2eee9754c9dcbbe6a9fd6a539deb06ec014060cc368d3b0b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 8, "if" => 11];
        $filters = ["escape" => 13];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 7
        echo "<div class=\"body-page\">
\t";
        // line 8
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/preloader.html.twig"), "themes/gavias_tico/templates/page/page.html.twig", 8)->display($context);
        // line 9
        echo "   ";
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_tico/templates/page/page.html.twig", 9)->display($context);
        // line 10
        echo "\t
   ";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])) {
            // line 12
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 16
        echo "\t
\t<div role=\"main\" class=\"main main-page\">
\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 20
        if ($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])) {
            // line 21
            echo "\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 24
        echo "\t

\t\t";
        // line 26
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 27
            echo "\t\t\t<div class=\"help show\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"control-panel\"><i class=\"fa fa-cogs\"></i></div>
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 36
        echo "
\t\t";
        // line 37
        if ($this->getAttribute(($context["page"] ?? null), "fw_before_content", [])) {
            // line 38
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "fw_before_content", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 42
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 44
        if ($this->getAttribute(($context["page"] ?? null), "before_content", [])) {
            // line 45
            echo "\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_content", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 55
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 60
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main.html.twig"), "themes/gavias_tico/templates/page/page.html.twig", 60)->display($context);
        // line 61
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 64
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 65
            echo "\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 71
        echo "
\t\t";
        // line 72
        if ($this->getAttribute(($context["page"] ?? null), "after_content", [])) {
            // line 73
            echo "\t\t\t<div class=\"area after_content\">
\t\t\t\t<div class=\"container-fw\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t ";
            // line 76
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
            echo "
\t          \t</div>
        \t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 81
        echo "\t\t
\t\t";
        // line 82
        if ($this->getAttribute(($context["page"] ?? null), "fw_after_content", [])) {
            // line 83
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 84
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "fw_after_content", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 87
        echo "
\t</div>

\t";
        // line 90
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/gavias_tico/templates/page/page.html.twig", 90)->display($context);
        // line 91
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_tico/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 91,  213 => 90,  208 => 87,  202 => 84,  199 => 83,  197 => 82,  194 => 81,  186 => 76,  181 => 73,  179 => 72,  176 => 71,  169 => 67,  165 => 65,  163 => 64,  158 => 61,  156 => 60,  149 => 55,  140 => 49,  134 => 45,  132 => 44,  128 => 42,  122 => 39,  119 => 38,  117 => 37,  114 => 36,  106 => 31,  100 => 27,  98 => 26,  94 => 24,  88 => 22,  85 => 21,  83 => 20,  77 => 16,  71 => 13,  68 => 12,  66 => 11,  63 => 10,  60 => 9,  58 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_tico/templates/page/page.html.twig", "/var/www/html/techmer/themes/gavias_tico/templates/page/page.html.twig");
    }
}
