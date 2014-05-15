<?php

/* EdahiraDahiraBundle:Cotisation:editer.html.twig */
class __TwigTemplate_1387c154a4ee944bff93cebbcd522aba8680efd89fcc666cbb24cc7cc106adbd extends Twig_Template
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
        [id*=\"form\"] div {
          /*border:#000000 1px solid;*/
          display:inline-block;
        }
        .form-horizontal .controls{
          margin-left: 15px;
          margin-top: 3px;
        }

    </style>
";
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.cotisation"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 22
    public function block_body_header($context, array $blocks = array())
    {
        // line 23
        echo "    
    ";
        // line 24
        if ((twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "typeevenement"), "nom")) == "dahira")) {
            // line 25
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.cotisation.dahira", array("%membre%" => $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "membre"), "affichage")), "EdahiraDahiraBundle"), "html", null, true);
            echo "<small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "date"), "d-m-Y"), "html", null, true);
            echo "</small></h1>
    ";
        } elseif ((twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "typeevenement"), "nom")) == "mensualité")) {
            // line 27
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.cotisation.mensualite", array("%mois%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "date"), "M-Y")), "EdahiraDahiraBundle"), "html", null, true);
            echo "<small></h1>
    ";
        }
        // line 29
        echo "
";
    }

    // line 32
    public function block_body_content($context, array $blocks = array())
    {
        // line 33
        echo "     ";
        $this->env->loadTemplate("EdahiraDahiraBundle:Cotisation:formCotisation.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Cotisation:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  88 => 32,  83 => 29,  77 => 27,  69 => 25,  67 => 24,  64 => 23,  61 => 22,  52 => 20,  34 => 6,  31 => 5,);
    }
}
