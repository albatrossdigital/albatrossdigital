<?php

/* core/themes/seven/templates/page.html.twig */
class __TwigTemplate_99d0549f8830a5df45fc368fc062d45f extends Drupal\Core\Template\TwigTemplate
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
        // line 68
        echo "  <header id=\"branding\" class=\"clearfix\">
    ";
        // line 69
        echo twig_render_var($this->getContextReference($context, "breadcrumb"));
        echo "
    ";
        // line 70
        echo twig_render_var($this->getContextReference($context, "title_prefix"));
        echo "
    ";
        // line 71
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 72
            echo "      <h1 class=\"page-title\">";
            echo twig_render_var($this->getContextReference($context, "title"));
            echo "</h1>
    ";
        }
        // line 74
        echo "    ";
        echo twig_render_var($this->getContextReference($context, "title_suffix"));
        echo "
    ";
        // line 75
        if ((isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null)) {
            // line 76
            echo "      ";
            echo twig_render_var($this->getContextReference($context, "primary_local_tasks"));
            echo "
    ";
        }
        // line 78
        echo "  </header>

  <div id=\"page\">
    ";
        // line 81
        if ((isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null)) {
            // line 82
            echo "      <div class=\"tabs-secondary clearfix\" role=\"navigation\">";
            echo twig_render_var($this->getContextReference($context, "secondary_local_tasks"));
            echo "</div>
    ";
        }
        // line 84
        echo "
    <main id=\"content\" class=\"clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\"></a></div>
      ";
        // line 87
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 88
            echo "        <div id=\"console\" class=\"clearfix\">";
            echo twig_render_var($this->getContextReference($context, "messages"));
            echo "</div>
      ";
        }
        // line 90
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help")) {
            // line 91
            echo "        <div id=\"help\">
          ";
            // line 92
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "help"));
            echo "
        </div>
      ";
        }
        // line 95
        echo "      ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 96
            echo "        <ul class=\"action-links\">
          ";
            // line 97
            echo twig_render_var($this->getContextReference($context, "action_links"));
            echo "
        </ul>
      ";
        }
        // line 100
        echo "      ";
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "content"));
        echo "
    </main>

    <footer id=\"footer\" role=\"contentinfo\">
      ";
        // line 104
        echo twig_render_var($this->getContextReference($context, "feed_icons"));
        echo "
    </footer>

  </div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 104,  101 => 100,  95 => 97,  92 => 96,  89 => 95,  83 => 92,  80 => 91,  77 => 90,  71 => 88,  69 => 87,  64 => 84,  58 => 82,  56 => 81,  51 => 78,  45 => 76,  43 => 75,  38 => 74,  32 => 72,  30 => 71,  26 => 70,  22 => 69,  19 => 68,);
    }
}
