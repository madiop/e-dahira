<?php

/* EdahiraDahiraBundle:Etats:membre.html.twig */
class __TwigTemplate_a132af9b673d03e288a63927d12611b2e5459fbb3346216a7863a825002b3234 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('translator')->trans("label.etat", array(), "EdahiraDahiraBundle")), "html", null, true);
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
\t.page-header {
\t   padding-bottom: 0px;
\t}
</style>
";
    }

    // line 15
    public function block_body_header($context, array $blocks = array())
    {
        // line 16
        echo "\t";
        $this->env->loadTemplate("EdahiraDahiraBundle:Etats:formMembre.html.twig")->display($context);
    }

    // line 18
    public function block_body_content($context, array $blocks = array())
    {
        // line 19
        echo "\t   ";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "
    <div id=\"etats\">
        ";
        // line 21
        if ((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre"))) {
            // line 22
            echo "        \t";
            if (($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "id") != null)) {
                // line 23
                echo "            \t";
                $this->env->loadTemplate("EdahiraDahiraBundle:Etats:ajax.membre.html.twig")->display($context);
                // line 24
                echo "            ";
            }
            // line 25
            echo "        ";
        }
        // line 26
        echo "    </div>
\t
";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script >
\t\t\$(\"#form_membre\").submit(function(e){
\t\t    e.preventDefault();
\t\t    var DATA = \$(this).serialize();
\t\t    \$.ajax({
\t\t        type: \"POST\",
\t\t        url: \"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("etats_membre");
        echo "\",
\t\t        data: DATA,
\t\t        cache: false,
\t\t        success: function(data){
\t\t           \$('#etats').html(data);
\t\t        }
\t\t    });    
\t\t    return false;
\t\t});

\t\t
\t</script>
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Etats:membre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 39,  95 => 31,  92 => 30,  86 => 26,  83 => 25,  80 => 24,  77 => 23,  74 => 22,  72 => 21,  66 => 19,  63 => 18,  58 => 16,  55 => 15,  43 => 8,  40 => 7,  32 => 5,);
    }
}
