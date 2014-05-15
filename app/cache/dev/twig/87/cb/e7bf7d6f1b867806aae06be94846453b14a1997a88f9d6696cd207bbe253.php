<?php

/* EdahiraDahiraBundle:Categorie:editer.html.twig */
class __TwigTemplate_87cbe7bf7d6f1b867806aae06be94846453b14a1997a88f9d6696cd207bbe253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EdahiraDahiraBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.categorie"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 7
    public function block_body_header($context, array $blocks = array())
    {
        // line 8
        echo "\t
\t";
        // line 9
        if ($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id")) {
            // line 10
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.modification", array("%objet%" => "categorie"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t";
        } else {
            // line 12
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.nouvelle", array("%objet%" => "categorie"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t";
        }
        // line 14
        echo "
";
    }

    // line 17
    public function block_body_content($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "
\t
\t";
        // line 20
        $this->env->loadTemplate("EdahiraDahiraBundle:Categorie:formCategorie.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Categorie:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  66 => 18,  63 => 17,  58 => 14,  52 => 12,  46 => 10,  44 => 9,  41 => 8,  38 => 7,  30 => 5,);
    }
}
