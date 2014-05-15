<?php

/* EdahiraDahiraBundle:Membre:editer.html.twig */
class __TwigTemplate_bf6b49ffa0aa1af04ec7baa19a85a23f9c228835366a761e339263100e95e8a6 extends Twig_Template
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
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.membre"), array(), "EdahiraDahiraBundle"), "html", null, true);
        echo " ";
    }

    // line 7
    public function block_body_header($context, array $blocks = array())
    {
        // line 8
        echo "    
    ";
        // line 9
        if ($this->getAttribute((isset($context["membre"]) ? $context["membre"] : null), "id", array(), "any", true, true)) {
            // line 10
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.modification", array("%objet%" => "membre"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</h1>
\t";
        } else {
            // line 12
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.nouveau", array("%objet%" => "membre"), "EdahiraDahiraBundle"), "html", null, true);
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

\t";
        // line 20
        if (array_key_exists("form", $context)) {
            // line 21
            echo "        ";
            $this->env->loadTemplate("EdahiraDahiraBundle:Membre:formMembre.html.twig")->display($context);
            // line 22
            echo "    ";
        }
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Membre:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  79 => 22,  76 => 21,  74 => 20,  68 => 18,  65 => 17,  60 => 14,  54 => 12,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  30 => 5,);
    }
}
