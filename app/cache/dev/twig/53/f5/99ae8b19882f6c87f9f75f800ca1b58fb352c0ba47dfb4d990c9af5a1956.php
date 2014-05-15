<?php

/* EdahiraDahiraBundle:Membre:formCotiser.html.twig */
class __TwigTemplate_53f599ae8b19882f6c87f9f75f800ca1b58fb352c0ba47dfb4d990c9af5a1956 extends Twig_Template
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
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membre_cotiser", array("membre" => $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "id"), "type" => $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            <fieldset>

                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "


                <div class=\"form-actions\">
                    <input type=\"submit\" class=\"btn btn-success btn-large\" value=";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enregistrer", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo " />
                    <a class=\"btn\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "last_route"), "method"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.annuler", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>
                </div>
            </fieldset>
        </form>";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Membre:formCotiser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  43 => 13,  36 => 9,  30 => 6,  24 => 5,  19 => 2,);
    }
}
