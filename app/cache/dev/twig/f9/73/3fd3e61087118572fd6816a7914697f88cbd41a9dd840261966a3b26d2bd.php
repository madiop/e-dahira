<?php

/* EdahiraDahiraBundle:Dahira:partager.html.twig */
class __TwigTemplate_f9733fd3e61087118572fd6816a7914697f88cbd41a9dd840261966a3b26d2bd extends Twig_Template
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
\t    <h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.partager", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "<small>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "nom"), "html", null, true);
        echo "</small></h1>
\t</div>

\t";
        // line 16
        $this->env->loadTemplate("EdahiraDahiraBundle:Dahira:formPartager.html.twig")->display($context);
        // line 17
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
        return "EdahiraDahiraBundle:Dahira:partager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  63 => 8,  58 => 17,  56 => 16,  48 => 13,  44 => 11,  41 => 8,  38 => 7,  30 => 5,);
    }
}
