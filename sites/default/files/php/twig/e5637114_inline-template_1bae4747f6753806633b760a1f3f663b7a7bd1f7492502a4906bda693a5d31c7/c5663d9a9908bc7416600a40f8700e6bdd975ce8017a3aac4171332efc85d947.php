<?php

/* {# inline_template_start #}<div class="com-text">
<div class="com-body">{{ body }}</div>
<div class="com-name">{{ field_comm_name }}</div>
<div class="com-prof">{{ field_comm_prof }}</div>
</div> */
class __TwigTemplate_bac63d8525ffa8c73474020d009600e4d8b058391cda9b59ed69faf9a292fb6b extends Twig_Template
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
        echo "<div class=\"com-text\">
<div class=\"com-body\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "</div>
<div class=\"com-name\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_comm_name"]) ? $context["field_comm_name"] : null), "html", null, true));
        echo "</div>
<div class=\"com-prof\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_comm_prof"]) ? $context["field_comm_prof"] : null), "html", null, true));
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"com-text\">
<div class=\"com-body\">{{ body }}</div>
<div class=\"com-name\">{{ field_comm_name }}</div>
<div class=\"com-prof\">{{ field_comm_prof }}</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 4,  54 => 3,  50 => 2,  47 => 1,);
    }
}
/* {# inline_template_start #}<div class="com-text">*/
/* <div class="com-body">{{ body }}</div>*/
/* <div class="com-name">{{ field_comm_name }}</div>*/
/* <div class="com-prof">{{ field_comm_prof }}</div>*/
/* </div>*/
