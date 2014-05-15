<?php

/* EdahiraDahiraBundle:Depenses:editer.html.twig */
class __TwigTemplate_aaee23ace2e4f44f1d0dbc2e18c0020a5922a25360c325a8cee1cf7b80ff9e5f extends Twig_Template
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
\t\t#edahira_dahirabundle_depenses_date select{
\t\t    width:73px
\t\t}
\t</style>
";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.depense"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 16
    public function block_body_header($context, array $blocks = array())
    {
        // line 17
        echo "\t
\t";
        // line 18
        if ($this->getAttribute((isset($context["depense"]) ? $context["depense"] : null), "id", array(), "any", true, true)) {
            // line 19
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.modification", array("%objet%" => "depense"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t";
        } else {
            // line 21
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.nouvelle", array("%objet%" => "depense"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t";
        }
        // line 23
        echo "
";
    }

    // line 25
    public function block_body_content($context, array $blocks = array())
    {
        // line 26
        echo "\t";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "

\t";
        // line 28
        if (array_key_exists("form", $context)) {
            // line 29
            echo "\t\t";
            $this->env->loadTemplate("EdahiraDahiraBundle:Depenses:formDepenses.html.twig")->display($context);
            // line 30
            echo "\t";
        }
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Depenses:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  93 => 30,  90 => 29,  88 => 28,  82 => 26,  79 => 25,  74 => 23,  68 => 21,  62 => 19,  60 => 18,  57 => 17,  54 => 16,  46 => 14,  34 => 6,  31 => 5,);
    }
}
