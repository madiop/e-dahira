<?php

/* EdahiraDahiraBundle:Caisses:editer.html.twig */
class __TwigTemplate_0e1db733732ceff98f0f65c7f61b3902be2300d6509e04604548e8241f9b21da extends Twig_Template
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #edahira_dahirabundle_caisses_jour select{
            width:74px
        }
    </style>
";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.caisse"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 16
    public function block_body_header($context, array $blocks = array())
    {
        // line 17
        echo "
\t";
        // line 18
        if ($this->getAttribute((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse")), "id")) {
            // line 19
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.modification", array("%objet%" => "caisse"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t";
        } else {
            // line 21
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.nouvelle", array("%objet%" => "caisse"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t";
        }
        // line 23
        echo "
";
    }

    // line 26
    public function block_body_content($context, array $blocks = array())
    {
        // line 27
        echo "\t";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "
\t";
        // line 28
        $this->env->loadTemplate("EdahiraDahiraBundle:Caisses:formCaisse.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Caisses:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  82 => 27,  79 => 26,  74 => 23,  68 => 21,  62 => 19,  60 => 18,  57 => 17,  54 => 16,  46 => 14,  34 => 6,  31 => 5,);
    }
}
