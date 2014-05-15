<?php

/* EdahiraDahiraBundle:Don:editer.html.twig */
class __TwigTemplate_e90391c8dd60d33e707f90e490fd6ca4d7f9433fb0fe26f70c9748a9b0f0a32d extends Twig_Template
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
        // line 1
        echo "
";
        // line 2
        if (array_key_exists("form", $context)) {
            // line 3
            echo "\t";
            $this->env->loadTemplate("EdahiraDahiraBundle:Don:formDon.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Don:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  22 => 2,  19 => 1,);
    }
}
