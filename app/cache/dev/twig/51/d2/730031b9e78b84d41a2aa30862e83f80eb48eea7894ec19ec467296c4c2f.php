<?php

/* EdahiraDahiraBundle:Dahira:supprimer.html.twig */
class __TwigTemplate_51d2730031b9e78b84d41a2aa30862e83f80eb48eea7894ec19ec467296c4c2f extends Twig_Template
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

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "\t";
        $this->displayBlock('body_content', $context, $blocks);
        // line 12
        echo "
\t<div class=\"page-header\">
\t\t<h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.suppression", array("%objet%" => ("dahira: " . $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "nom"))), "EdahiraDahiraBundle"), "html", null, true);
        echo "</h1>
\t</div>

\t<form class=\"form-horizontal\" action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dahira_supprimer", array("id" => $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "id"))), "html", null, true);
        echo "\" method=\"post\" >
\t\t<fieldset>
\t        <div class=\"form-actions\">
\t\t\t\t<input type=\"submit\" class=\"btn btn-success btn-large\" value=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.supprimer", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo " />
\t\t\t\t<a class=\"btn\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("dahira_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.annuler", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t</fieldset>
\t</form>
";
    }

    // line 9
    public function block_body_content($context, array $blocks = array())
    {
        // line 10
        echo "\t\t";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Dahira:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 10,  75 => 9,  64 => 21,  60 => 20,  54 => 17,  48 => 14,  44 => 12,  41 => 9,  38 => 8,  30 => 5,);
    }
}
