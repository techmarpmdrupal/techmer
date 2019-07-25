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

/* themes/gavias_tico/templates/views/gallery/views-view-gvaowl--gallery-carousel.html.twig */
class __TwigTemplate_4f8adb0b8e2b06b68aadf4e597d8e3bd3d6362ff96d9a02e4eeb1a1ba07d5732 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "set" => 5, "for" => 6];
        $filters = ["escape" => 2, "length" => 22];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length'],
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
        // line 1
        if (($context["attributes"] ?? null)) {
            // line 2
            echo "<div id=\"gva-images-carousel\" ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "slider-gallery-v1"], "method")), "html", null, true);
            echo ">
";
        }
        // line 4
        echo "
   ";
        // line 5
        $context["i"] = 0;
        // line 6
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "      ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 8
            echo "      ";
            if (((($context["i"] ?? null) % 5) == 1)) {
                // line 9
                echo "         <div class=\"gallery-large carousel-item\">
            <div class=\"item content\">";
                // line 10
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
                echo "</div>
         </div>
      ";
            } else {
                // line 13
                echo "         
         ";
                // line 14
                if (((($context["i"] ?? null) % 5) == 2)) {
                    // line 15
                    echo "            <div class=\"galery-small-wrap\">
         ";
                }
                // line 16
                echo "   
         
            ";
                // line 18
                if ((((($context["i"] ?? null) % 5) == 2) || ((($context["i"] ?? null) % 5) == 4))) {
                    // line 19
                    echo "              <div class=\"gallery-small carousel-item\">
            ";
                }
                // line 21
                echo "               <div class=\"item content gallery-small-item\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
                echo "</div>
            ";
                // line 22
                if (((((($context["i"] ?? null) % 5) == 3) || ((($context["i"] ?? null) % 5) == 0)) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    // line 23
                    echo "               </div>
            ";
                }
                // line 24
                echo "   

         ";
                // line 26
                if ((((($context["i"] ?? null) % 5) == 0) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    // line 27
                    echo "            </div>
         ";
                }
                // line 28
                echo "    
            
      ";
            }
            // line 30
            echo " 
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " 

";
        // line 33
        if (($context["attributes"] ?? null)) {
            // line 34
            echo "</div>
";
        }
        // line 36
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_tico/templates/views/gallery/views-view-gvaowl--gallery-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  146 => 34,  144 => 33,  140 => 31,  133 => 30,  128 => 28,  124 => 27,  122 => 26,  118 => 24,  114 => 23,  112 => 22,  107 => 21,  103 => 19,  101 => 18,  97 => 16,  93 => 15,  91 => 14,  88 => 13,  82 => 10,  79 => 9,  76 => 8,  73 => 7,  68 => 6,  66 => 5,  63 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_tico/templates/views/gallery/views-view-gvaowl--gallery-carousel.html.twig", "/var/www/html/techmer/themes/gavias_tico/templates/views/gallery/views-view-gvaowl--gallery-carousel.html.twig");
    }
}
