<?php

/* section-post-translations.twig */
class __TwigTemplate_956dce1f40ddc41888cd0c67508f4c5967817287c39f8a3e13559a1f31c5727c extends Twig_Template
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
        // line 1
        echo "<p class=\"wpml-ls-form-line js-wpml-ls-option\">
    <label for=\"wpml-ls-show-in-post-translations\">
        <input type=\"checkbox\" id=\"wpml-ls-show-in-post-translations\" name=\"statics[post_translations][show]\" value=\"1\"
               class=\"js-wpml-ls-toggle-slot js-wpml-ls-trigger-save\" data-target=\".js-wpml-ls-post-translations-toggle-target\"
               ";
        // line 5
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "statics", array()), "post_translations", array()), "show", array())) {
            echo "checked=\"checked\"";
        }
        echo "/>
        ";
        // line 6
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "post_translations", array()), "show", array()), "html", null, true);
        echo "
    </label>

    ";
        // line 9
        $this->loadTemplate("save-notification.twig", "section-post-translations.twig", 9)->display($context);
        // line 10
        echo "</p>

<div class=\"js-wpml-ls-post-translations-toggle-target alignleft";
        // line 12
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "statics", array()), "post_translations", array()), "show", array()) != 1)) {
            echo " hidden";
        }
        echo "\">

    ";
        // line 14
        $context["slot_settings"] = array();
        // line 15
        echo "    ";
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["slot_settings"] = twig_array_merge($_slot_settings_, array("post_translations" => $this->getAttribute($this->getAttribute($_settings_, "statics", array()), "post_translations", array())));
        // line 16
        echo "
    ";
        // line 17
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        $this->loadTemplate("table-slots.twig", "section-post-translations.twig", 17)->display(array_merge($context, array("slot_type" => "statics", "slots_settings" => $_slot_settings_, "slug" => "post_translations")));
        // line 24
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "section-post-translations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  63 => 17,  60 => 16,  55 => 15,  53 => 14,  45 => 12,  41 => 10,  39 => 9,  32 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "section-post-translations.twig", "/var/www/html/upcrea/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/section-post-translations.twig");
    }
}
