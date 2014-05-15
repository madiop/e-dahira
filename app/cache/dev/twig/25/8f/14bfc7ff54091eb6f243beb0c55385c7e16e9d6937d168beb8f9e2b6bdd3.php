<?php

/* EdahiraDahiraBundle:Evenement:editer.html.twig */
class __TwigTemplate_258f14bfc7ff54091eb6f243beb0c55385c7e16e9d6937d168beb8f9e2b6bdd3 extends Twig_Template
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
\t\t#edahira_dahirabundle_evenement_date select{
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.evenement"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 16
    public function block_body_header($context, array $blocks = array())
    {
        // line 17
        echo "\t";
        if ($this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : null), "id", array(), "any", true, true)) {
            // line 18
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.modification", array("%objet%" => "évènement"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t";
        } else {
            // line 20
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.nouvel", array("%objet%" => "évènement"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t";
        }
    }

    // line 24
    public function block_body_content($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "

    ";
        // line 27
        if (array_key_exists("form", $context)) {
            // line 28
            echo "   \t\t";
            $this->env->loadTemplate("EdahiraDahiraBundle:Evenement:formEvenement.html.twig")->display($context);
            // line 29
            echo "    ";
        }
        // line 30
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Evenement:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  88 => 29,  85 => 28,  83 => 27,  77 => 25,  74 => 24,  66 => 20,  60 => 18,  57 => 17,  54 => 16,  46 => 14,  34 => 6,  31 => 5,);
    }
}
