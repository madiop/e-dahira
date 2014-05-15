<?php

/* EdahiraDahiraBundle:Don:formDon.html.twig */
class __TwigTemplate_dd8262158f4e122b0d36d86f34ff7bd4e5a6dd4674bac44481aaa4843b815468 extends Twig_Template
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
        // line 2
        echo "
<form class=\"form-horizontal\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("don_editer", array("idType" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id"), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id" => $this->getAttribute((isset($context["don"]) ? $context["don"] : $this->getContext($context, "don")), "id"))), "html", null, true);
        echo "\" method=\"post\" enctype=\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "\"s>
\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t<fieldset>

\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <div class=\"form-actions\">
\t\t\t<input type=\"submit\" id=\"ajouter_don\" class=\"btn btn-success\" value=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enregistrer", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo " />
\t\t\t
\t\t\t";
        // line 12
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == 1)) {
            // line 13
            echo "\t\t\t\t<a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotisation_etat", array("id" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.annuler", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</a>
\t\t\t";
        } elseif (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == 2)) {
            // line 15
            echo "\t\t\t\t<a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("don_index", array("idType" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id"), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id" => $this->getAttribute((isset($context["don"]) ? $context["don"] : $this->getContext($context, "don")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.annuler", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</a>
\t\t\t";
        }
        // line 17
        echo "\t\t</div>
\t</fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Don:formDon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  55 => 15,  47 => 13,  45 => 12,  40 => 10,  34 => 7,  28 => 4,  24 => 3,  22 => 3,  19 => 2,);
    }
}
