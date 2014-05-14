<?php

/* ::layout.html.twig */
class __TwigTemplate_2ba1befa3a7f5ea34449b4acd4c3354a9ec88e8e9c376826e5b81071c47b141c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'dahiraname' => array($this, 'block_dahiraname'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t</head>
    <body>
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "       
\t";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "E-Dahira";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/site.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t<!--[if lt IE 9]>
\t      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t    <![endif]-->
\t\t";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "    \t";
        $this->displayBlock('navbar', $context, $blocks);
        // line 54
        echo "\t\t    <div class=\"container-fluid\">
\t\t      <div class=\"row-fluid\">
\t\t      ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "\t\t      </div>
\t\t
\t\t      <hr>
\t\t      <footer class=\"well\">
\t\t       ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo "\t\t      </footer>
\t\t
\t\t    </div>\t\t
    ";
    }

    // line 17
    public function block_navbar($context, array $blocks = array())
    {
        // line 18
        echo "        <div class=\"navbar navbar-fixed-top\">
\t\t    <div class=\"navbar-inner\">
\t\t        <div class=\"container-fluid\">
\t\t\t\t\t";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "activeDahira") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") != "dahira_index"))) {
            // line 22
            echo "\t\t\t\t\t<div class=\"nav-collapse\">
\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t  <li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" style=\"font-size: 18px;font-weight: 200;line-height: 1;color: #ffffff;\">
\t\t\t\t\t\t\t\t";
            // line 26
            $this->displayBlock('dahiraname', $context, $blocks);
            // line 27
            echo "\t\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "dahiras"));
            foreach ($context['_seq'] as $context["_key"] => $context["dahira"]) {
                // line 31
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dahira_gerer", array("id" => $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "nom")), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dahira'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
                    ";
        }
        // line 38
        echo "\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t
\t\t\t\t\t\t<a class=\"btn\" href=\"\"><i class=\"icon-user\"></i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "affichage"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t  <span class=\"caret\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t  <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t\t  <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t        </div>
\t\t      </div>
\t\t    </div>
\t\t";
    }

    // line 26
    public function block_dahiraname($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "activeDahira"), "nom")), "html", null, true);
        echo " ";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        // line 57
        echo "\t\t      ";
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        echo "\t\t\t\t\t&copy; Madiop THIAM madiop44@gmail.com
\t\t        ";
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        // line 71
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  214 => 72,  209 => 71,  206 => 70,  201 => 63,  198 => 62,  194 => 57,  191 => 56,  183 => 26,  172 => 47,  167 => 45,  159 => 40,  155 => 38,  148 => 33,  137 => 31,  133 => 30,  128 => 27,  126 => 26,  120 => 22,  118 => 21,  113 => 18,  110 => 17,  103 => 65,  101 => 62,  93 => 56,  83 => 16,  74 => 9,  70 => 8,  65 => 7,  62 => 6,  56 => 5,  50 => 74,  48 => 70,  43 => 16,  37 => 6,  33 => 5,  27 => 1,  67 => 15,  64 => 14,  57 => 14,  40 => 9,  36 => 8,  32 => 6,  29 => 5,  99 => 41,  95 => 58,  89 => 54,  86 => 17,  84 => 34,  76 => 29,  66 => 22,  59 => 16,  54 => 13,  45 => 69,  39 => 14,  35 => 8,  31 => 6,  28 => 5,);
    }
}
