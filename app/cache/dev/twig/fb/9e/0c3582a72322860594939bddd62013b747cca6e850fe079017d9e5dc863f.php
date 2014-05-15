<?php

/* EdahiraDahiraBundle:Etats:caisse.html.twig */
class __TwigTemplate_fb9e0c3582a72322860594939bddd62013b747cca6e850fe079017d9e5dc863f extends Twig_Template
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

    // line 17
    public function block_body_header($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->env->loadTemplate("EdahiraDahiraBundle:Etats:formCaisse.html.twig")->display($context);
    }

    // line 21
    public function block_body_content($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "
    
    <div id=\"etats_caisse\"></div>
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
\t\t\$(\"#form_caisse\").submit(function(e){
\t\t    e.preventDefault();
\t\t    var DATA = \$(this).serialize();
\t\t    \$.ajax({
\t\t        type: \"POST\",
\t\t        url: \"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("etats_caisse");
        echo "\",
\t\t        data: DATA,
\t\t        cache: false,
\t\t        success: function(data){
\t\t           \$('#etats_caisse').html(data);
\t\t        }
\t\t    });    
\t\t    return false;
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Etats:caisse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 35,  79 => 28,  76 => 27,  67 => 22,  64 => 21,  59 => 18,  56 => 17,  43 => 8,  40 => 7,  32 => 5,);
    }
}
