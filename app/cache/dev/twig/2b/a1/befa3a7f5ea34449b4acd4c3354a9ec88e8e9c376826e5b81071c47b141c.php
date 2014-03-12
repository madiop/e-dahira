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
        // line 79
        echo "       
\t";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
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
        // line 63
        echo "\t\t    <div class=\"container-fluid\">
\t\t      <div class=\"row-fluid\">
\t\t      ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "\t\t      </div>
\t\t
\t\t      <hr>
\t\t
\t\t      <footer class=\"well\">
\t\t       ";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "\t\t      </footer>
\t\t
\t\t    </div>\t\t
    ";
    }

    // line 17
    public function block_navbar($context, array $blocks = array())
    {
        // line 18
        echo "      
        <div class=\"navbar navbar-fixed-top\">
\t\t      <div class=\"navbar-inner\">
\t\t        <div class=\"container-fluid\">
\t\t          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t            <span class=\"icon-bar\"></span>
\t\t            <span class=\"icon-bar\"></span>
\t\t            <span class=\"icon-bar\"></span>
\t\t          </a>
\t\t          <a class=\"brand\" href=\"#\">Strass Administration</a>
\t\t          <div class=\"btn-group pull-right\">
\t\t\t\t\t<a class=\"btn\" href=\"my-profile.html\"><i class=\"icon-user\"></i> Admin</a>
\t\t            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t              <span class=\"caret\"></span>
\t\t            </a>
\t\t            <ul class=\"dropdown-menu\">
\t\t\t\t\t  <li><a href=\"my-profile.html\">Profile</a></li>
\t\t              <li class=\"divider\"></li>
\t\t              <li><a href=\"#\">Logout</a></li>
\t\t            </ul>
\t\t          </div>
\t\t          <div class=\"nav-collapse\">
\t\t            <ul class=\"nav\">
\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t              <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Users <b class=\"caret\"></b></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"new-user.html\">New User</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"users.html\">Manage Users</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t  </li>
\t\t              <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Roles <b class=\"caret\"></b></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"new-role.html\">New Role</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"roles.html\">Manage Roles</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li><a href=\"stats.html\">Stats</a></li>
\t\t            </ul>
\t\t          </div>
\t\t        </div>
\t\t      </div>
\t\t    </div>
\t\t    ";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        // line 66
        echo "\t\t      ";
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        echo "\t\t        &copy; Madiop THIAM madiop44@gmail.com
\t\t        ";
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        // line 81
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 82
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
        return array (  184 => 82,  179 => 81,  176 => 80,  171 => 73,  168 => 72,  164 => 66,  161 => 65,  113 => 18,  110 => 17,  101 => 72,  94 => 67,  85 => 17,  82 => 16,  73 => 9,  69 => 8,  64 => 7,  61 => 6,  55 => 5,  47 => 80,  44 => 79,  38 => 14,  36 => 6,  26 => 1,  103 => 75,  100 => 30,  95 => 27,  92 => 65,  88 => 63,  86 => 30,  83 => 29,  81 => 26,  78 => 25,  75 => 24,  60 => 7,  57 => 6,  51 => 80,  49 => 84,  42 => 16,  40 => 6,  35 => 3,  32 => 5,  31 => 3,  28 => 2,);
    }
}
