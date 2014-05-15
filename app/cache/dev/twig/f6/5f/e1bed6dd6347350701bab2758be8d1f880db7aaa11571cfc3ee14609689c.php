<?php

/* EdahiraDahiraBundle:Versement:formVersement.html.twig */
class __TwigTemplate_f65fe1bed6dd6347350701bab2758be8d1f880db7aaa11571cfc3ee14609689c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("versement_editer", array("id" => $this->getAttribute((isset($context["versement"]) ? $context["versement"] : $this->getContext($context, "versement")), "id"))), "html", null, true);
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
        return "EdahiraDahiraBundle:Versement:formVersement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  40 => 10,  28 => 4,  22 => 3,  19 => 2,  97 => 33,  94 => 32,  91 => 31,  89 => 30,  83 => 28,  80 => 27,  75 => 24,  69 => 22,  63 => 20,  61 => 19,  58 => 18,  55 => 17,  47 => 15,  34 => 7,  31 => 5,);
    }
}
