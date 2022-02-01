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

/* themes/custom/templates/page.html.twig */
class __TwigTemplate_341350c446338cc1bbbfa3e5d74360ee9a45d4b509ac4994dccc9a5c0179f901 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'logo_section' => [$this, 'block_logo_section'],
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
            'footer_second' => [$this, 'block_footer_second'],
            'footer_third' => [$this, 'block_footer_third'],
            'calender' => [$this, 'block_calender'],
            'footer_five' => [$this, 'block_footer_five'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "if" => 58, "block" => 59];
        $filters = ["escape" => 61, "clean_class" => 73, "t" => 85];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'clean_class', 't'],
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
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 55
        echo "<!-- logo section -->

<div class=\"container\">
   ";
        // line 58
        if ($this->getAttribute(($context["page"] ?? null), "logo_section", [])) {
            // line 59
            echo "        ";
            $this->displayBlock('logo_section', $context, $blocks);
            // line 64
            echo "      ";
        }
        // line 65
        echo "</div>
";
        // line 67
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 68
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 105
        echo "
";
        // line 107
        $this->displayBlock('main', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 174
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 180
        echo "
<div class=\"container\">
   <div class=\"row\">
      ";
        // line 184
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
            // line 185
            echo "      ";
            $this->displayBlock('footer_second', $context, $blocks);
            // line 190
            echo "      ";
        }
        // line 191
        echo "      ";
        // line 192
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
            // line 193
            echo "      ";
            $this->displayBlock('footer_third', $context, $blocks);
            // line 198
            echo "      ";
        }
        // line 199
        echo "      
<div class=\"container\">
   <div class=\"row\">
      ";
        // line 203
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "calender", [])) {
            // line 204
            echo "      ";
            $this->displayBlock('calender', $context, $blocks);
            // line 209
            echo "      ";
        }
        // line 210
        echo "      ";
        // line 211
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_five", [])) {
            // line 212
            echo "      ";
            $this->displayBlock('footer_five', $context, $blocks);
            // line 217
            echo "      ";
        }
        // line 218
        echo "</div>


   </div>
</div>

";
    }

    // line 59
    public function block_logo_section($context, array $blocks = [])
    {
        // line 60
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo_section", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 68
    public function block_navbar($context, array $blocks = [])
    {
        // line 69
        echo "    ";
        // line 70
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 72
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 73
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : ((($context["container"] ?? null) - ($context["fluid"] ?? null))))];
        // line 76
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 77
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 78
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      ";
        }
        // line 80
        echo "      <div class=\"navbar-header\">
        ";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        ";
        // line 83
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 84
            echo "          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\">
            <span class=\"sr-only\">";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 91
        echo "      </div>

      ";
        // line 94
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 95
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 99
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 100
            echo "        </div>
      ";
        }
        // line 102
        echo "    </header>
  ";
    }

    // line 107
    public function block_main($context, array $blocks = [])
    {
        // line 108
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 112
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 113
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 118
            echo "      ";
        }
        // line 119
        echo "
      ";
        // line 121
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 122
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 127
            echo "      ";
        }
        // line 128
        echo "
      ";
        // line 130
        echo "      ";
        // line 131
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 132
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 133
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 134
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 135
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 138
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 141
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 142
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 145
            echo "        ";
        }
        // line 146
        echo "
        ";
        // line 148
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 149
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 152
            echo "        ";
        }
        // line 153
        echo "
        ";
        // line 155
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 159
        echo "      </section>

      ";
        // line 162
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 163
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 168
            echo "      ";
        }
        // line 169
        echo "    </div>
  </div>
";
    }

    // line 113
    public function block_header($context, array $blocks = [])
    {
        // line 114
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 115
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 122
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 123
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 124
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 142
    public function block_highlighted($context, array $blocks = [])
    {
        // line 143
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 149
    public function block_help($context, array $blocks = [])
    {
        // line 150
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 155
    public function block_content($context, array $blocks = [])
    {
        // line 156
        echo "          <a id=\"main-content\"></a>
          ";
        // line 157
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 163
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 164
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 165
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 174
    public function block_footer($context, array $blocks = [])
    {
        // line 175
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 176
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </footer>
  ";
    }

    // line 185
    public function block_footer_second($context, array $blocks = [])
    {
        // line 186
        echo "      <aside class=\"col-sm-3\" role=\"complementary\">
         ";
        // line 187
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
        echo "
      </aside>
      ";
    }

    // line 193
    public function block_footer_third($context, array $blocks = [])
    {
        // line 194
        echo "      <aside class=\"col-sm-8\" role=\"complementary\">
         ";
        // line 195
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
        echo "
      </aside>
      ";
    }

    // line 204
    public function block_calender($context, array $blocks = [])
    {
        // line 205
        echo "      <aside class=\"col-sm-8\" role=\"complementary\">
         ";
        // line 206
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "calender", [])), "html", null, true);
        echo "
      </aside>
      ";
    }

    // line 212
    public function block_footer_five($context, array $blocks = [])
    {
        // line 213
        echo "      <aside class=\"col-sm-4\" role=\"complementary\">
         ";
        // line 214
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_five", [])), "html", null, true);
        echo "
      </aside>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 214,  474 => 213,  471 => 212,  464 => 206,  461 => 205,  458 => 204,  451 => 195,  448 => 194,  445 => 193,  438 => 187,  435 => 186,  432 => 185,  425 => 176,  420 => 175,  417 => 174,  410 => 165,  407 => 164,  404 => 163,  398 => 157,  395 => 156,  392 => 155,  385 => 150,  382 => 149,  375 => 143,  372 => 142,  365 => 124,  362 => 123,  359 => 122,  352 => 115,  349 => 114,  346 => 113,  340 => 169,  337 => 168,  334 => 163,  331 => 162,  327 => 159,  324 => 155,  321 => 153,  318 => 152,  315 => 149,  312 => 148,  309 => 146,  306 => 145,  303 => 142,  300 => 141,  294 => 138,  292 => 135,  291 => 134,  290 => 133,  289 => 132,  288 => 131,  286 => 130,  283 => 128,  280 => 127,  277 => 122,  274 => 121,  271 => 119,  268 => 118,  265 => 113,  262 => 112,  255 => 108,  252 => 107,  247 => 102,  243 => 100,  240 => 99,  234 => 96,  231 => 95,  228 => 94,  224 => 91,  215 => 85,  212 => 84,  209 => 83,  205 => 81,  202 => 80,  196 => 78,  194 => 77,  189 => 76,  187 => 73,  186 => 72,  185 => 70,  183 => 69,  180 => 68,  173 => 61,  170 => 60,  167 => 59,  157 => 218,  154 => 217,  151 => 212,  148 => 211,  146 => 210,  143 => 209,  140 => 204,  137 => 203,  132 => 199,  129 => 198,  126 => 193,  123 => 192,  121 => 191,  118 => 190,  115 => 185,  112 => 184,  107 => 180,  103 => 174,  101 => 173,  98 => 172,  96 => 107,  93 => 105,  89 => 68,  87 => 67,  84 => 65,  81 => 64,  78 => 59,  76 => 58,  71 => 55,  69 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
<!-- logo section -->

<div class=\"container\">
   {% if page.logo_section %}
        {% block logo_section %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.logo_section }}
          </div>
        {% endblock %}
      {% endif %}
</div>
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container-fluid,
      ]
    %}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
      <div class=\"navbar-header\">
        {{ page.navigation }}
        {# .btn-navbar is used as the toggle for collapsed navbar content #}
        {% if page.navigation_collapsible %}
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        {% endif %}
      </div>

      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          {{ page.navigation_collapsible }}
        </div>
      {% endif %}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
    </header>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer {{ container }}\" role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endblock %}
{% endif %}

<div class=\"container\">
   <div class=\"row\">
      {# footer_second #}
      {% if page.footer_second %}
      {% block footer_second %}
      <aside class=\"col-sm-3\" role=\"complementary\">
         {{ page.footer_second }}
      </aside>
      {% endblock %}
      {% endif %}
      {# footer_third #}
      {% if page.footer_third %}
      {% block footer_third %}
      <aside class=\"col-sm-8\" role=\"complementary\">
         {{ page.footer_third }}
      </aside>
      {% endblock %}
      {% endif %}
      
<div class=\"container\">
   <div class=\"row\">
      {# calender #}
      {% if page.calender %}
      {% block calender %}
      <aside class=\"col-sm-8\" role=\"complementary\">
         {{ page.calender }}
      </aside>
      {% endblock %}
      {% endif %}
      {# footer_five #}
      {% if page.footer_five %}
      {% block footer_five %}
      <aside class=\"col-sm-4\" role=\"complementary\">
         {{ page.footer_five }}
      </aside>
      {% endblock %}
      {% endif %}
</div>


   </div>
</div>

", "themes/custom/templates/page.html.twig", "/opt/lampp/htdocs/newsite/themes/custom/templates/page.html.twig");
    }
}
