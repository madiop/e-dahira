<?php

/* EdahiraDahiraBundle:Categorie:supprimer.html.twig */
class __TwigTemplate_4ea870f5f23311a2ac8e8579152eecee2bbad9effb1ee5553bc19fd1bae8b73b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.catégorie"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 7
    public function block_body_header($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.fem.suppression", array("%objet%" => ("catégorie: " . $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nom"))), "EdahiraDahiraBundle"), "html", null, true);
        echo "</h1>
";
    }

    // line 11
    public function block_body_content($context, array $blocks = array())
    {
        // line 12
        echo "\t";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "
\t<form class=\"form-horizontal\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_supprimer", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"))), "html", null, true);
        echo "\" method=\"post\" >
\t\t<fieldset>
\t        <div class=\"form-actions\">
\t\t\t\t<input type=\"submit\" class=\"btn btn-success btn-large\" value=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.supprimer", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo " />
\t\t\t\t<a class=\"btn\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("categorie_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.annuler", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t</fieldset>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Categorie:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  62 => 16,  56 => 13,  51 => 12,  48 => 11,  41 => 8,  38 => 7,  30 => 5,);
    }
}
