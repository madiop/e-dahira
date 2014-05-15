<?php

/* EdahiraDahiraBundle:Dahira:formPartager.html.twig */
class __TwigTemplate_c2f1cb282dbc92a70c957b8ef7b6341211a4ea723f3a6504e8c2e637404c682d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dahira_partager", array("id" => $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "id"))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.partager", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo " />
\t\t\t<a class=\"btn\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("dahira_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.annuler", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>
\t\t</div>
\t</fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Dahira:formPartager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  34 => 7,  28 => 4,  22 => 3,  19 => 2,  66 => 9,  63 => 8,  58 => 17,  56 => 16,  48 => 13,  44 => 11,  41 => 8,  38 => 7,  30 => 5,);
    }
}
