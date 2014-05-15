<?php

/* EdahiraDahiraBundle:Cotisation:formCotisation.html.twig */
class __TwigTemplate_3c68b62f86d76fee870d5b4c53425e4463b61449e522c9559aa40215ae0070eb extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotisation_editer", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t<fieldset>

        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "


        <div class=\"form-actions\">
\t\t\t<input type=\"submit\" class=\"btn btn-success btn-large\" value=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enregistrer", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo " />
\t\t\t<a class=\"btn\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "last_route"), "method"), array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.annuler", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>
\t\t</div>
\t</fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Cotisation:formCotisation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  41 => 11,  28 => 4,  22 => 3,  19 => 2,  91 => 33,  88 => 32,  83 => 29,  77 => 27,  69 => 25,  67 => 24,  64 => 23,  61 => 22,  52 => 20,  34 => 7,  31 => 5,);
    }
}
