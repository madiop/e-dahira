<?php

/* EdahiraDahiraBundle:Membre:formMembre.html.twig */
class __TwigTemplate_4f30e70c954e0371963eaae919fff4278f3017c73dfb7e37b57b723bfd4683d4 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membre_editer", array("id" => $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "id"))), "html", null, true);
        echo "\" method=\"post\" enctype=\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "\"s>
\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t<fieldset>

\t\t ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <div class=\"form-actions\">
\t\t\t<input type=\"submit\" class=\"btn btn-success btn-large\" value=";
        // line 10
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.enregistrer", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo " />
\t\t\t<a class=\"btn\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "last_route"), "method"));
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.annuler", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a>
\t\t</div>
\t</fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Membre:formMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  34 => 7,  28 => 4,  22 => 3,  19 => 2,  82 => 23,  79 => 22,  76 => 21,  74 => 20,  68 => 18,  65 => 17,  60 => 14,  54 => 12,  48 => 10,  46 => 9,  43 => 8,  40 => 10,  30 => 5,);
    }
}
