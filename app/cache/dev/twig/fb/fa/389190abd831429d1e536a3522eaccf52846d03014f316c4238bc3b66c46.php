<?php

/* EdahiraDahiraBundle:Etats:formCaisse.html.twig */
class __TwigTemplate_fbfa389190abd831429d1e536a3522eaccf52846d03014f316c4238bc3b66c46 extends Twig_Template
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
<form class=\"form-horizontal\" id=\"form_caisse\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("etats_caisse");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <div class=\"control-group\">
    <label class=\"control-label\" for=\"membre\">";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "caisse"), 'label', array("label" => "Caisse :"));
        echo "</label>
            <div class=\"controls\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "caisse"), 'widget');
        echo "
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "voir"), 'widget');
        echo "
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Etats:formCaisse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  34 => 7,  29 => 5,  22 => 3,  19 => 2,  90 => 35,  79 => 28,  76 => 27,  67 => 22,  64 => 21,  59 => 18,  56 => 17,  43 => 8,  40 => 7,  32 => 5,);
    }
}
