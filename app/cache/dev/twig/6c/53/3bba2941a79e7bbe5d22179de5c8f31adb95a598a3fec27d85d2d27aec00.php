<?php

/* EdahiraDahiraBundle:Etats:formCharges.html.twig */
class __TwigTemplate_6c533bba2941a79e7bbe5d22179de5c8f31adb95a598a3fec27d85d2d27aec00 extends Twig_Template
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
<form class=\"form-horizontal\" id=\"form_charge\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("etats_charges");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <div class=\"control-group\">
    <label class=\"control-label\" for=\"membre\">";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "charge"), 'label', array("label" => "Charge :"));
        echo "</label>
            <div class=\"controls\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "charge"), 'widget');
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
        return "EdahiraDahiraBundle:Etats:formCharges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  34 => 7,  29 => 5,  22 => 3,  19 => 2,  99 => 35,  88 => 28,  85 => 27,  80 => 24,  71 => 22,  66 => 21,  63 => 20,  58 => 17,  55 => 16,  43 => 8,  40 => 7,  32 => 5,);
    }
}
