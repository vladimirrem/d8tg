<?php

/* modules/contrib/better_exposed_filters/templates/bef-radios.html.twig */
class __TwigTemplate_2ef12f157fadfbe8d00be240900a2e04fd317e0e43becde04f953b4049eaa5d0 extends Twig_Template
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
        $tags = array("set" => 13, "for" => 20, "if" => 22, "include" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if', 'include'),
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

        // line 13
        $context["classes"] = array(0 => "form-radios", 1 => ((        // line 15
(isset($context["isNested"]) ? $context["isNested"] : null)) ? ("bef_nested") : ("")));
        // line 18
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 19
        $context["current_nesting_level"] = 0;
        // line 20
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["children"]) ? $context["children"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 21
            echo "    ";
            $context["item"] = $this->getAttribute((isset($context["element"]) ? $context["element"] : null), $context["child"]);
            // line 22
            echo "    ";
            if ((isset($context["isNested"]) ? $context["isNested"] : null)) {
                // line 23
                echo "      ";
                $context["new_nesting_level"] = $this->getAttribute((isset($context["depth"]) ? $context["depth"] : null), $context["child"]);
                // line 24
                echo "      ";
                $this->loadTemplate("@better_exposed_filters/bef-nested-elements.html.twig", "modules/contrib/better_exposed_filters/templates/bef-radios.html.twig", 24)->display($context);
                // line 25
                echo "      ";
                $context["current_nesting_level"] = (isset($context["new_nesting_level"]) ? $context["new_nesting_level"] : null);
                // line 26
                echo "    ";
            } else {
                // line 27
                echo "      ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true));
                echo "
    ";
            }
            // line 29
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/better_exposed_filters/templates/bef-radios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  95 => 29,  89 => 27,  86 => 26,  83 => 25,  80 => 24,  77 => 23,  74 => 22,  71 => 21,  53 => 20,  51 => 19,  46 => 18,  44 => 15,  43 => 13,);
    }
}
/* {#*/
/*   Themes a single-select exposed form element as radio buttons.*/
/* */
/*   Available variables:*/
/*     - element: The collection of checkboxes.*/
/*     - children: An array of keys for the children of element.*/
/*     - is_nested: TRUE if this is to be rendered as a nested list.*/
/*     - depth: If is_nested is TRUE, this holds an array in the form of*/
/*       child_id => nesting_level which defines the depth a given element should*/
/*       appear in the nested list.*/
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'form-radios',*/
/*     isNested ? 'bef_nested'*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {% set current_nesting_level = 0 %}*/
/*   {% for child in children %}*/
/*     {% set item = attribute(element, child) %}*/
/*     {% if isNested %}*/
/*       {% set new_nesting_level = attribute(depth, child) %}*/
/*       {% include '@better_exposed_filters/bef-nested-elements.html.twig' %}*/
/*       {% set current_nesting_level = new_nesting_level %}*/
/*     {% else %}*/
/*       {{ item }}*/
/*     {% endif %}*/
/*   {% endfor %}*/
/* </div>*/
/* */
