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

/* core/themes/luna/templates/node.html.twig */
class __TwigTemplate_a46a462505ae473ac4ebae5e8db3437ece8d35c155141ac6a7f7ff11992bf735 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 74, "if" => 86, "trans" => 106];
        $filters = ["clean_class" => 76, "escape" => 84];
        $functions = ["attach_library" => 84];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape'],
                ['attach_library']
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
        // line 74
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 76
($context["node"] ?? null), "bundle", [])))), 2 => (($this->getAttribute(        // line 77
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 78
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 79
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 80
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 83
        echo "
";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true);
        echo "

";
        // line 86
        if (($this->getAttribute(($context["node"] ?? null), "bundle", []) != "news")) {
            // line 87
            echo "  ";
            if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
                // line 88
                echo "\t";
                if (($this->getAttribute(($context["node"] ?? null), "bundle", []) == "faq")) {
                    // line 89
                    echo "\t\t<h3";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
                    echo " class=\"faq--title\">
\t\t<a href=\"#\" rel=\"bookmark\">";
                    // line 90
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                    echo "</a>
\t\t</h3>
\t";
                } else {
                    // line 93
                    echo "\t\t<h3";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
                    echo ">
\t\t\t<a href=\"";
                    // line 94
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
                    echo "\" rel=\"bookmark\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                    echo "</a>
\t\t</h3>
\t";
                }
                // line 97
                echo "  ";
            }
        }
        // line 99
        echo "
<article";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

\t";
        // line 102
        if (($context["display_submitted"] ?? null)) {
            // line 103
            echo "\t\t<footer class=\"node__meta\">
\t\t\t";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
            echo "
\t\t\t<div";
            // line 105
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted"], "method")), "html", null, true);
            echo ">
\t\t\t\t";
            // line 106
            echo t("Submitted by
\t\t\t\t@author_name
\t\t\t\ton
\t\t\t\t@date", array("@author_name" =>             // line 107
($context["author_name"] ?? null), "@date" =>             // line 109
($context["date"] ?? null), ));
            // line 110
            echo "\t\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
            echo "
\t\t\t</div>
\t\t</footer>
\t";
        }
        // line 114
        echo "
\t";
        // line 116
        echo "\t";
        if (($this->getAttribute(($context["node"] ?? null), "bundle", []) == "landing_page")) {
            // line 117
            echo "\t\t<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "landing_page"], "method")), "html", null, true);
            echo ">
\t\t\t<div class=\"hero_text\">
\t\t\t\t<div class=\"hero--title\">
\t\t\t\t\t";
            // line 120
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_title", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
            // line 122
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_hero_body", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"hero_image\">
\t\t\t\t";
            // line 125
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_hero_image", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
            // line 128
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_paragraphs", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 132
            echo "\t\t<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method")), "html", null, true);
            echo ">
\t\t\t";
            // line 133
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 136
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/luna/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 136,  184 => 133,  179 => 132,  172 => 128,  166 => 125,  160 => 122,  155 => 120,  148 => 117,  145 => 116,  142 => 114,  134 => 110,  132 => 109,  131 => 107,  127 => 106,  123 => 105,  119 => 104,  116 => 103,  114 => 102,  109 => 100,  106 => 99,  102 => 97,  94 => 94,  89 => 93,  83 => 90,  78 => 89,  75 => 88,  72 => 87,  70 => 86,  65 => 84,  62 => 83,  60 => 80,  59 => 79,  58 => 78,  57 => 77,  56 => 76,  55 => 74,);
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
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
  ]
%}

{{ attach_library('classy/node') }}

{% if node.bundle != \"news\" %}
  {% if label and not page %}
\t{% if node.bundle == \"faq\" %}
\t\t<h3{{ title_attributes }} class=\"faq--title\">
\t\t<a href=\"#\" rel=\"bookmark\">{{ label }}</a>
\t\t</h3>
\t{% else %}
\t\t<h3{{ title_attributes }}>
\t\t\t<a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
\t\t</h3>
\t{% endif %}
  {% endif %}
{% endif %}

<article{{attributes.addClass(classes)}}>

\t{% if display_submitted %}
\t\t<footer class=\"node__meta\">
\t\t\t{{ author_picture }}
\t\t\t<div{{author_attributes.addClass('node__submitted')}}>
\t\t\t\t{% trans %}Submitted by
\t\t\t\t{{ author_name }}
\t\t\t\ton
\t\t\t\t{{ date }}{% endtrans %}
\t\t\t\t{{ metadata }}
\t\t\t</div>
\t\t</footer>
\t{% endif %}

\t{# if node type is landing page then show only paragraph type text with image #}
\t{% if node.bundle == \"landing_page\" %}
\t\t<div{{content_attributes.addClass('node__content','landing_page')}}>
\t\t\t<div class=\"hero_text\">
\t\t\t\t<div class=\"hero--title\">
\t\t\t\t\t{{ content.field_title }}
\t\t\t\t</div>
\t\t\t\t{{ content.field_hero_body }}
\t\t\t</div>
\t\t\t<div class=\"hero_image\">
\t\t\t\t{{ content.field_hero_image }}
\t\t\t</div>
\t\t\t<div>
\t\t\t\t{{content.field_paragraphs}}
\t\t\t</div>
\t\t</div>
\t{% else %}
\t\t<div{{content_attributes.addClass('node__content')}}>
\t\t\t{{ content }}
\t\t</div>
\t{% endif %}
</article>
", "core/themes/luna/templates/node.html.twig", "/Applications/MAMP/htdocs/IMD-THEMING/site/core/themes/luna/templates/node.html.twig");
    }
}
