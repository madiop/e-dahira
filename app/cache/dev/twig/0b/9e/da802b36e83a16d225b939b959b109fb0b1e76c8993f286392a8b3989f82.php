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
        return array (  40 => 7,  36 => 6,  26 => 2,  20 => 1,  38 => 9,  30 => 6,  22 => 3,  19 => 2,  214 => 72,  209 => 71,  206 => 70,  201 => 63,  198 => 62,  194 => 57,  191 => 56,  183 => 26,  172 => 47,  167 => 45,  159 => 40,  155 => 38,  148 => 33,  137 => 31,  133 => 30,  128 => 27,  126 => 26,  120 => 22,  118 => 21,  113 => 18,  110 => 17,  103 => 65,  101 => 62,  95 => 58,  93 => 56,  89 => 54,  86 => 17,  83 => 16,  74 => 9,  70 => 8,  65 => 7,  62 => 6,  56 => 5,  50 => 74,  45 => 69,  43 => 11,  37 => 6,  33 => 5,  27 => 1,  78 => 16,  75 => 15,  69 => 17,  67 => 15,  64 => 14,  57 => 12,  48 => 70,  44 => 9,  39 => 14,  35 => 7,  32 => 6,  29 => 5,  31 => 4,  28 => 3,);
    }
}
