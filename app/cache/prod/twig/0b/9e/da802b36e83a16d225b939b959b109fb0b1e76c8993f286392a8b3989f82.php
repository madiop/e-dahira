<?php

/* EdahiraDahiraBundle:Form:fields.html.twig */
class __TwigTemplate_0b9eda802b36e83a16d225b939b959b109fb0b1e76c8993f286392a8b3989f82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
    }

    public function block_form_row($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "\t<div class=\"control-group\">
\t\t<label class=\"control-label\" for=\"membre\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "</label>
\t\t<div class=\"controls\">
\t\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t</div>
\t</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  28 => 3,  26 => 2,  20 => 1,  42 => 9,  38 => 8,  34 => 7,  29 => 5,  22 => 3,  19 => 2,  107 => 39,  95 => 31,  92 => 30,  86 => 26,  83 => 25,  80 => 24,  77 => 23,  74 => 22,  72 => 21,  66 => 19,  63 => 18,  58 => 16,  55 => 15,  43 => 8,  40 => 7,  32 => 5,);
    }
}
