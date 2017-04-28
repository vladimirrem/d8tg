<?php

/* {# inline_template_start #}<div class="team-img"><div class="soc-links"><div class="tw">{{ field_user_tw }}</div><div class="fb">{{ field_user_fb }}</div><div class="in">{{ field_user_in }}</div></div>{{ user_picture }}</div> */
class __TwigTemplate_468bf2b08b6f4429087c84de9c3df7454a7f1ba31ff8c7106083157f85840469 extends Twig_Template
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
        echo "<div class=\"team-img\"><div class=\"soc-links\"><div class=\"tw\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_user_tw"]) ? $context["field_user_tw"] : null), "html", null, true));
        echo "</div><div class=\"fb\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_user_fb"]) ? $context["field_user_fb"] : null), "html", null, true));
        echo "</div><div class=\"in\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_user_in"]) ? $context["field_user_in"] : null), "html", null, true));
        echo "</div></div>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["user_picture"]) ? $context["user_picture"] : null), "html", null, true));
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"team-img\"><div class=\"soc-links\"><div class=\"tw\">{{ field_user_tw }}</div><div class=\"fb\">{{ field_user_fb }}</div><div class=\"in\">{{ field_user_in }}</div></div>{{ user_picture }}</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* {# inline_template_start #}<div class="team-img"><div class="soc-links"><div class="tw">{{ field_user_tw }}</div><div class="fb">{{ field_user_fb }}</div><div class="in">{{ field_user_in }}</div></div>{{ user_picture }}</div>*/
