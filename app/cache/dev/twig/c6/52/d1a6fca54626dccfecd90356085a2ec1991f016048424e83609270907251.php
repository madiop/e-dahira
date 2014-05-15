<?php

/* EdahiraDahiraBundle:Versement:editer.html.twig */
class __TwigTemplate_c652d1a6fca54626dccfecd90356085a2ec1991f016048424e83609270907251 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EdahiraDahiraBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body_header' => array($this, 'block_body_header'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

\t<style>
\t\t#edahira_dahirabundle_versements_date select{
\t\t    width:73px
\t\t}
\t</style>
";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.versement"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 17
    public function block_body_header($context, array $blocks = array())
    {
        // line 18
        echo "\t
\t";
        // line 19
        if ($this->getAttribute((isset($context["versement"]) ? $context["versement"] : null), "id", array(), "any", true, true)) {
            // line 20
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.modification", array("%objet%" => "versement"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t";
        } else {
            // line 22
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.nouveau", array("%objet%" => "versement"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t";
        }
        // line 24
        echo "
";
    }

    // line 27
    public function block_body_content($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "
    
\t";
        // line 30
        if (array_key_exists("form", $context)) {
            // line 31
            echo "        ";
            $this->env->loadTemplate("EdahiraDahiraBundle:Versement:formVersement.html.twig")->display($context);
            // line 32
            echo "    ";
        }
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Versement:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  94 => 32,  91 => 31,  89 => 30,  83 => 28,  80 => 27,  75 => 24,  69 => 22,  63 => 20,  61 => 19,  58 => 18,  55 => 17,  47 => 15,  34 => 6,  31 => 5,);
    }
}
