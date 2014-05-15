<?php

/* EdahiraDahiraBundle:Etats:charges.html.twig */
class __TwigTemplate_b09346bfefd98b634c90e66fe1f05974cb5b2fe378a664c63ab2a383234affc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EdahiraDahiraBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_header' => array($this, 'block_body_header'),
            'body_content' => array($this, 'block_body_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.etat"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
        .page-header {
            padding-bottom: 0px;
        }
\t</style>
";
    }

    // line 16
    public function block_body_header($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->env->loadTemplate("EdahiraDahiraBundle:Etats:formCharges.html.twig")->display($context);
    }

    // line 20
    public function block_body_content($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "        <p>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    <div id=\"etats_charge\"></div>
";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
\t\t\$(\"#form_charge\").submit(function(e){
\t\t    e.preventDefault();
\t\t    var DATA = \$(this).serialize();
\t\t    \$.ajax({
\t\t        type: \"POST\",
\t\t        url: \"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("etats_charges");
        echo "\",
\t\t        data: DATA,
\t\t        cache: false,
\t\t        success: function(data){
\t\t           \$('#etats_charge').html(data);
\t\t        }
\t\t    });    
\t\t    return false;
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Etats:charges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 35,  88 => 28,  85 => 27,  80 => 24,  71 => 22,  66 => 21,  63 => 20,  58 => 17,  55 => 16,  43 => 8,  40 => 7,  32 => 5,);
    }
}
