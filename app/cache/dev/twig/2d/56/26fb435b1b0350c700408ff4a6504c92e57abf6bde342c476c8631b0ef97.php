<?php

/* EdahiraDahiraBundle:Index:index.html.twig */
class __TwigTemplate_2d5626fb435b1b0350c700408ff4a6504c92e57abf6bde342c476c8631b0ef97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EdahiraDahiraBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 2
    public function block_body_header($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>Bienvenue à E-dahira</h1>
";
    }

    // line 5
    public function block_body_content($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "
\t
\t<h3>A ne pas oublier</h3>
    <ul>
        <li><span class=\"label label-warning\">La validation des formulaire</span></li>
        <li><span class=\"label label-important\">Select sur des objets null</span></li>
        <li><span class=\"label label-important\">Capturer les exceptions</span></li>
        <li><span class=\"label label-important\">Vérifier les appartenance au dahira en cours de gestion</span></li>
        <li><span class=\"label label-important\">Les exports Excel et PDFs</span></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
