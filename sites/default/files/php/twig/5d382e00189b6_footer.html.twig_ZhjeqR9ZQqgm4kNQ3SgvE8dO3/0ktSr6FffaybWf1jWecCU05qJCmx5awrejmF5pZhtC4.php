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

/* themes/gavias_tico/templates/page/footer.html.twig */
class __TwigTemplate_f22a6f037f8c1502e98298dff96b4de5eac0737486b85fdeccb9f44272419ef0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3];
        $filters = ["escape" => 9];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 1
        echo "<footer id=\"footer\" class=\"footer\">
  
  ";
        // line 3
        if ($this->getAttribute(($context["page"] ?? null), "before_footer", [])) {
            // line 4
            echo "   <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-12\">
            <div class=\"before_footer area\">
                ";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_footer", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>     
      </div>   
    </div> 
   ";
        }
        // line 16
        echo "   
   <div class=\"footer-center\">
      <div class=\"container\">      
         <div class=\"row\">
            ";
        // line 20
        if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
            // line 21
            echo "              <div class=\"footer-first col-lg-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null)), "html", null, true);
            echo " col-md-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null)), "html", null, true);
            echo " col-sm-12 col-xs-12 column\">
                ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
              </div> 
            ";
        }
        // line 25
        echo "
            ";
        // line 26
        if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
            // line 27
            echo "             <div class=\"footer-second col-lg-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_size"] ?? null)), "html", null, true);
            echo " col-md-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_size"] ?? null)), "html", null, true);
            echo " col-sm-12 col-xs-12 column\">
                ";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
              </div> 
            ";
        }
        // line 31
        echo "
            ";
        // line 32
        if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
            // line 33
            echo "              <div class=\"footer-third col-lg-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_size"] ?? null)), "html", null, true);
            echo " col-md-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_size"] ?? null)), "html", null, true);
            echo " col-sm-12 col-xs-12 column\">
                ";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
              </div> 
            ";
        }
        // line 37
        echo "
            ";
        // line 38
        if ($this->getAttribute(($context["page"] ?? null), "footer_four", [])) {
            // line 39
            echo "               <div class=\"footer-four col-lg-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_four_size"] ?? null)), "html", null, true);
            echo " col-md-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_four_size"] ?? null)), "html", null, true);
            echo " col-sm-12 col-xs-12 column\">
                ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_four", [])), "html", null, true);
            echo "
              </div> 
            ";
        }
        // line 43
        echo "         </div>   
      </div>
  </div>   

  ";
        // line 47
        if ($this->getAttribute(($context["page"] ?? null), "after_footer", [])) {
            // line 48
            echo "    <div class=\"after-footer\">
      <div class=\"container\">
        <div class=\"after-footer-inner\">
            ";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_footer", [])), "html", null, true);
            echo "
        </div>   
      </div>   
    </div>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        if ($this->getAttribute(($context["page"] ?? null), "copyright", [])) {
            // line 58
            echo "    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
            ";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "copyright", [])), "html", null, true);
            echo "
        </div>   
      </div>   
    </div>
  ";
        }
        // line 66
        echo "
</footer>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_tico/templates/page/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 66,  184 => 61,  179 => 58,  177 => 57,  174 => 56,  166 => 51,  161 => 48,  159 => 47,  153 => 43,  147 => 40,  140 => 39,  138 => 38,  135 => 37,  129 => 34,  122 => 33,  120 => 32,  117 => 31,  111 => 28,  104 => 27,  102 => 26,  99 => 25,  93 => 22,  86 => 21,  84 => 20,  78 => 16,  68 => 9,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_tico/templates/page/footer.html.twig", "/var/www/html/techmer/themes/gavias_tico/templates/page/footer.html.twig");
    }
}
