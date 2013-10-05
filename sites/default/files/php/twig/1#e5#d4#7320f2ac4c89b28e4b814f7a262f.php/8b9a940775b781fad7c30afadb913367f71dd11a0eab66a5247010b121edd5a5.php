<?php

/* core/modules/datetime/templates/datetime-wrapper.html.twig */
class __TwigTemplate_e5d47320f2ac4c89b28e4b814f7a262f extends Drupal\Core\Template\TwigTemplate
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
        // line 18
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 19
            echo "  <h4 class=\"label\">
    ";
            // line 20
            echo twig_render_var(t("!title!required", array("!title" => $this->getContextReference($context, "title"), "!required" => $this->getContextReference($context, "required"))));
            echo "
  </h4>
";
        }
        // line 23
        echo twig_render_var($this->getContextReference($context, "content"));
        echo "
";
        // line 24
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 25
            echo "  <div class=\"description\">";
            echo twig_render_var($this->getContextReference($context, "description"));
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/datetime/templates/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 25,  34 => 24,  30 => 23,  24 => 20,  39 => 28,  33 => 25,  27 => 22,  23 => 20,  21 => 19,  19 => 18,);
    }
}
