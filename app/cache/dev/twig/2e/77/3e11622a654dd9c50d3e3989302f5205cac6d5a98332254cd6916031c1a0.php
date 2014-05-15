<?php

/* EdahiraDahiraBundle:Dahira:editer.html.twig */
class __TwigTemplate_2e773e11622a654dd9c50d3e3989302f5205cac6d5a98332254cd6916031c1a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EdahiraDahiraBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EdahiraDahiraBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.dahira"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayBlock('body_content', $context, $blocks);
        // line 11
        echo "
\t<div class=\"page-header\">
\t    ";
        // line 13
        if ($this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "id")) {
            // line 14
            echo "\t\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.modification", array("%objet%" => "dahira"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t\t";
        } else {
            // line 16
            echo "\t\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.nouveau", array("%objet%" => "dahira"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t\t";
        }
        // line 18
        echo "\t</div>

\t";
        // line 20
        $this->env->loadTemplate("EdahiraDahiraBundle:Dahira:formDahira.html.twig")->display($context);
        // line 21
        echo "
";
    }

    // line 8
    public function block_body_content($context, array $blocks = array())
    {
        // line 9
        echo "\t\t";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Dahira:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  73 => 8,  68 => 21,  66 => 20,  62 => 18,  56 => 16,  50 => 14,  48 => 13,  44 => 11,  41 => 8,  38 => 7,  30 => 5,);
    }
}
