<?php

/* EdahiraDahiraBundle:Caisses:formCaisse.html.twig */
class __TwigTemplate_cb593eba81f4439624372399f040a0569b6fded12f7f8fbafb51984dc04935cc extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caisse_editer", array("id" => $this->getAttribute((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t<fieldset>
\t\t 
\t\t ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <div class=\"form-actions\">
\t\t\t<input type=\"submit\" class=\"btn btn-success btn-large\" value=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enregistrer", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo " />
\t\t\t<a class=\"btn\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "last_route"), "method"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.annuler", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>
\t\t</div>
\t</fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Caisses:formCaisse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  40 => 10,  28 => 4,  22 => 3,  19 => 2,  87 => 28,  82 => 27,  79 => 26,  74 => 23,  68 => 21,  62 => 19,  60 => 18,  57 => 17,  54 => 16,  46 => 14,  34 => 7,  31 => 5,);
    }
}
