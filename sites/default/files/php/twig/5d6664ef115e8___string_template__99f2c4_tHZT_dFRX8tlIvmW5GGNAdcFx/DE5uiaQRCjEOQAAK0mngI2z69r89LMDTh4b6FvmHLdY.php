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

/* __string_template__99f2c49cc6a31a562c65894feb8801df18c5d4c4cec22beef755cc22351d56a1 */
class __TwigTemplate_85e4a6d2a722268e89feba3eaf822bbb92c9d971d732853a90fb25ce76a71139 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"widget gsc-team team-horizontal \">
   <div class=\"row\">
      <div class=\"col-lg-6 col-md-6\">
         <div class=\"team-header\">";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_customer_needs_image"] ?? null)), "html", null, true);
        echo " <div class=\"box-hover\">
                           <div class=\"content-inner\"><div class=\"social-list text-center\">
                                 <a href=\"";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_facebook"] ?? null)), "html", null, true);
        echo "\"><i class=\"fa fa-facebook\"></i> </a>
                                 <a href=\"";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_twitter"] ?? null)), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i> </a>
                                </div></div></div></div></div>
      <div class=\"col-lg-6 col-md-6\">
         <div class=\"team-body\">
            <div class=\"team-body-content\">
               <h3 class=\"team-name\"> ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "    </h3>
               <p class=\"team-position\">";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_job"] ?? null)), "html", null, true);
        echo " </p>
            </div>
            <p class=\"team-info\">";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</p>
         </div>
      </div>
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__99f2c49cc6a31a562c65894feb8801df18c5d4c4cec22beef755cc22351d56a1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  81 => 13,  77 => 12,  69 => 7,  65 => 6,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__99f2c49cc6a31a562c65894feb8801df18c5d4c4cec22beef755cc22351d56a1", "");
    }
}
