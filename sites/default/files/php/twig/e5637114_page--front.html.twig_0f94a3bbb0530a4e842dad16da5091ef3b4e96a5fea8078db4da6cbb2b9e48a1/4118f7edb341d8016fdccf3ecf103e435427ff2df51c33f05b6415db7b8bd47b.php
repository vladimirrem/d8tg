<?php

/* themes/custom/the/templates/page--front.html.twig */
class __TwigTemplate_81b97c14fcf39e778eb204e97a8d9897dbd99495decf4aedffa83e995721d098 extends Twig_Template
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
        echo "<div class=\"top-nav\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "</div>

<div class=\"front-wrapper\">

  <div class=\"slider\" id=\"top\">";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slider", array()), "html", null, true));
        echo "</div>

  <div class=\"about\" id=\"about\">";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "about", array()), "html", null, true));
        echo "</div>

  <div class=\"works\" id=\"portfolio\">";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "works", array()), "html", null, true));
        echo "</div>

  <div class=\"news\" id=\"news\">";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "news", array()), "html", null, true));
        echo "</div>

  <div class=\"comments\" id=\"testimonials\">";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "comments", array()), "html", null, true));
        echo "</div>

  <div class=\"team\" id=\"team\">";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "team", array()), "html", null, true));
        echo "</div>

  <div class=\"logos\" id=\"partners\">";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "logos", array()), "html", null, true));
        echo "</div>

  <div class=\"pricing\" id=\"price\">";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pricing", array()), "html", null, true));
        echo "</div>

</div>

<div class=\"footer-stuff\" id=\"contact\">";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "</div>

<div class=\"foot-nav\">";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footermenu", array()), "html", null, true));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/the/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  93 => 23,  86 => 19,  81 => 17,  76 => 15,  71 => 13,  66 => 11,  61 => 9,  56 => 7,  51 => 5,  43 => 1,);
    }
}
/* <div class="top-nav">{{ page.navigation }}</div>*/
/* */
/* <div class="front-wrapper">*/
/* */
/*   <div class="slider" id="top">{{ page.slider }}</div>*/
/* */
/*   <div class="about" id="about">{{ page.about }}</div>*/
/* */
/*   <div class="works" id="portfolio">{{ page.works }}</div>*/
/* */
/*   <div class="news" id="news">{{ page.news }}</div>*/
/* */
/*   <div class="comments" id="testimonials">{{ page.comments }}</div>*/
/* */
/*   <div class="team" id="team">{{ page.team }}</div>*/
/* */
/*   <div class="logos" id="partners">{{ page.logos }}</div>*/
/* */
/*   <div class="pricing" id="price">{{ page.pricing }}</div>*/
/* */
/* </div>*/
/* */
/* <div class="footer-stuff" id="contact">{{ page.footer }}</div>*/
/* */
/* <div class="foot-nav">{{ page.footermenu }}</div>*/
/* */
