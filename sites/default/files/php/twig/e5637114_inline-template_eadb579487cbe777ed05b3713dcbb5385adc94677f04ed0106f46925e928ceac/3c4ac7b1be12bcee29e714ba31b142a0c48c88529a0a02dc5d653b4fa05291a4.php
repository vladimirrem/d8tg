<?php

/* {# inline_template_start #}<div class="price-title">
{{ info }}
</div>
{{ field_price_img }}
 */
class __TwigTemplate_0303e78801ce4621c9da3198590b8a269bd948277e716217f6c2a653b43b7894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"price-title\">
";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["info"]) ? $context["info"] : null), "html", null, true));
        echo "
</div>
";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_price_img"]) ? $context["field_price_img"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"price-title\">
{{ info }}
</div>
{{ field_price_img }}
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 4,  50 => 2,  47 => 1,);
    }
}
/* {# inline_template_start #}<div class="price-title">*/
/* {{ info }}*/
/* </div>*/
/* {{ field_price_img }}*/
/* */
