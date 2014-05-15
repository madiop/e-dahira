<?php

/* EdahiraDahiraBundle:Charges:supprimer.html.twig */
class __TwigTemplate_089889dc229e41e0be252bfd1b9dd9a7a678c1e0402d80e10b5011cb81972b26 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.charge"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 7
    public function block_body_header($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.fem.suppression", array("%objet%" => ("charge: " . $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "objet"))), "EdahiraDahiraBundle"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("charges_supprimer", array("id" => $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "id"))), "html", null, true);
        echo "\" method=\"post\" >
\t\t<fieldset>
\t        <div class=\"form-actions\">
\t\t\t\t<input type=\"submit\" class=\"btn btn-success btn-large\" value=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.supprimer", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo " />
\t\t\t\t<a class=\"btn\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("charges_index");
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
        return "EdahiraDahiraBundle:Charges:supprimer.html.twig";
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
