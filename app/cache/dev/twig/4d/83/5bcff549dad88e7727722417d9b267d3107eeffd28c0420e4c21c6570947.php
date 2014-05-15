<?php

/* EdahiraDahiraBundle:Typeevenement:editer.html.twig */
class __TwigTemplate_4d835bcff549dad88e7727722417d9b267d3107eeffd28c0420e4c21c6570947 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.type"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 7
    public function block_body_header($context, array $blocks = array())
    {
        // line 8
        echo "
\t";
        // line 9
        if ($this->getAttribute((isset($context["type"]) ? $context["type"] : null), "id", array(), "any", true, true)) {
            // line 10
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.modification", array("%objet%" => "type d'évènement"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t";
        } else {
            // line 12
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.nouveau", array("%objet%" => "type d'évènement"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t";
        }
        // line 14
        echo "
";
    }

    // line 16
    public function block_body_content($context, array $blocks = array())
    {
        // line 17
        echo "\t";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "

    ";
        // line 19
        if (array_key_exists("form", $context)) {
            // line 20
            echo "\t\t";
            $this->env->loadTemplate("EdahiraDahiraBundle:Typeevenement:formTypeevenement.html.twig")->display($context);
            // line 21
            echo "\t";
        }
        // line 22
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Typeevenement:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  77 => 21,  74 => 20,  72 => 19,  66 => 17,  63 => 16,  58 => 14,  52 => 12,  46 => 10,  44 => 9,  41 => 8,  38 => 7,  30 => 5,);
    }
}
