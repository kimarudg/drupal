<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/unhabitat/templates/system/page.html.twig */
class __TwigTemplate_ad68682195fb84151a8b2013e35bbd73469dc45333a14e3928d2cc32129b5bb7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'bottom' => [$this, 'block_bottom'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 54, "if" => 56, "block" => 67);
        $filters = array("escape" => 60, "clean_class" => 72, "t" => 84);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'clean_class', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
        $macros = $this->macros;
        // line 54
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "fluid_container", [], "any", false, false, true, 54)) ? ("container-fluid") : ("container"));
        // line 55
        echo "
";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 56)) {
            // line 57
            echo "  <div class=\"container\">
    <div class=\"navbar navbar-default container\">
    <div class=\"navbar-header d-flex justify-content-between\">
    ";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "
    </div>
    </div>
  </div>
";
        }
        // line 66
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 66) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 66))) {
            // line 67
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 104
        echo "
";
        // line 106
        $this->displayBlock('main', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom", [], "any", false, false, true, 173)) {
            // line 174
            echo "  ";
            $this->displayBlock('bottom', $context, $blocks);
        }
        // line 182
        echo "
";
        // line 183
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 183)) {
            // line 184
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 67
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "    ";
        // line 69
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
($context["theme"] ?? null), "settings", [], "any", false, false, true, 71), "navbar_inverse", [], "any", false, false, true, 71)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 72
($context["theme"] ?? null), "settings", [], "any", false, false, true, 72), "navbar_position", [], "any", false, false, true, 72)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 72), "navbar_position", [], "any", false, false, true, 72), 72, $this->source)))) : (($context["container"] ?? null)))];
        // line 75
        echo "    <header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 76
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 76)) {
            // line 77
            echo "        <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 77, $this->source), "html", null, true);
            echo "\">
      ";
        }
        // line 79
        echo "      <div class=\"navbar-header\">
        ";
        // line 81
        echo "        ";
        // line 82
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 82)) {
            // line 83
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 90
        echo "      </div>

      ";
        // line 93
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 93)) {
            // line 94
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 98
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 98)) {
            // line 99
            echo "        </div>
      ";
        }
        // line 101
        echo "    </header>
  ";
    }

    // line 106
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 107, $this->source), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 111
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 111)) {
            // line 112
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 117
            echo "      ";
        }
        // line 118
        echo "
      ";
        // line 120
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 120)) {
            // line 121
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 126
            echo "      ";
        }
        // line 127
        echo "
      ";
        // line 129
        echo "      ";
        // line 130
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 131
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 131) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 131))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 132
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 132) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 132)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 133
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 133) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 133)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 134
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 134)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 134)))) ? ("col-sm-12") : (""))];
        // line 137
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 137), 137, $this->source), "html", null, true);
        echo ">

        ";
        // line 140
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 140)) {
            // line 141
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 144
            echo "        ";
        }
        // line 145
        echo "
        ";
        // line 147
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 147)) {
            // line 148
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 151
            echo "        ";
        }
        // line 152
        echo "
        ";
        // line 154
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 158
        echo "      </section>

      ";
        // line 161
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 161)) {
            // line 162
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 167
            echo "      ";
        }
        // line 168
        echo "    </div>
  </div>
";
    }

    // line 112
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 121
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 141
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 148
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 154
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "          <a id=\"main-content\"></a>
          ";
        // line 156
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 162
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 164
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 174
    public function block_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "    <section>
    <div class=\"chart\">
      ";
        // line 177
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
        echo "
    </div>
  </section>
  ";
    }

    // line 184
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "    <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 185, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 186
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/unhabitat/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 186,  386 => 185,  382 => 184,  374 => 177,  370 => 175,  366 => 174,  359 => 164,  356 => 163,  352 => 162,  346 => 156,  343 => 155,  339 => 154,  332 => 149,  328 => 148,  321 => 142,  317 => 141,  310 => 123,  307 => 122,  303 => 121,  296 => 114,  293 => 113,  289 => 112,  283 => 168,  280 => 167,  277 => 162,  274 => 161,  270 => 158,  267 => 154,  264 => 152,  261 => 151,  258 => 148,  255 => 147,  252 => 145,  249 => 144,  246 => 141,  243 => 140,  237 => 137,  235 => 134,  234 => 133,  233 => 132,  232 => 131,  231 => 130,  229 => 129,  226 => 127,  223 => 126,  220 => 121,  217 => 120,  214 => 118,  211 => 117,  208 => 112,  205 => 111,  198 => 107,  194 => 106,  189 => 101,  185 => 99,  182 => 98,  176 => 95,  173 => 94,  170 => 93,  166 => 90,  157 => 84,  154 => 83,  151 => 82,  149 => 81,  146 => 79,  140 => 77,  138 => 76,  133 => 75,  131 => 72,  130 => 71,  129 => 69,  127 => 68,  123 => 67,  117 => 184,  115 => 183,  112 => 182,  108 => 174,  106 => 173,  103 => 171,  101 => 106,  98 => 104,  94 => 67,  92 => 66,  84 => 60,  79 => 57,  77 => 56,  74 => 55,  72 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unhabitat/templates/system/page.html.twig", "/Users/kimaru/Projects/personal/drupal-project/un-habitat/web/themes/unhabitat/templates/system/page.html.twig");
    }
}
