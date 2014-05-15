<?php

/* EdahiraDahiraBundle:Etats:formMembre.html.twig */
class __TwigTemplate_c84ff70f6b125c70c9876b495091c4f5acbf01f37263cd972e4c1736e5d9350a extends Twig_Template
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
<form class=\"form-horizontal\" id=\"form_membre\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("etats_membre");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <div class=\"control-group\">
\t\t<label class=\"control-label\" for=\"membre\">";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'label');
        echo "</label>
\t\t<div class=\"controls\">
\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo "
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "membre"), 'widget');
        echo "
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "voir"), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"controls\">
\t\t</div>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Etats:formMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  38 => 8,  34 => 7,  29 => 5,  22 => 3,  19 => 2,  107 => 39,  95 => 31,  92 => 30,  86 => 26,  83 => 25,  80 => 24,  77 => 23,  74 => 22,  72 => 21,  66 => 19,  63 => 18,  58 => 16,  55 => 15,  43 => 8,  40 => 7,  32 => 5,);
    }
}
