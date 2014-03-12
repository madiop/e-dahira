<?php

/* EdahiraDahiraBundle::layout.html.twig */
class __TwigTemplate_19ffca7129b88961b7b9360f8df2805c2b39d83914a93225b7d23bb48f10f1fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'body_corp' => array($this, 'block_body_corp'),
            'body_header' => array($this, 'block_body_header'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"span3\">
        <div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
              ";
        // line 6
        $this->displayBlock('sidebar', $context, $blocks);
        // line 19
        echo "            </ul>
          </div>
        </div>
        <div class=\"span9\">
\t\t  <div class=\"row-fluid\">
\t\t      ";
        // line 24
        $this->displayBlock('body_corp', $context, $blocks);
        // line 32
        echo "\t\t  </div>
        </div>
        ";
    }

    // line 6
    public function block_sidebar($context, array $blocks = array())
    {
        // line 7
        echo "              <li class=\"nav-header\"><i class=\"icon-wrench\"></i> Administration</li>
              <li><a href=\"users.html\">Users</a></li>
              <li><a href=\"roles.html\">Roles</a></li>
              <li class=\"nav-header\"><i class=\"icon-signal\"></i> Statistics</li>
              <li><a href=\"stats.html\">General</a></li>
              <li><a href=\"user-stats.html\">Users</a></li>
              <li><a href=\"visitor-stats.html\">Visitors</a></li>
              <li class=\"nav-header\"><i class=\"icon-user\"></i> Profile</li>
              <li class=\"active\"><a href=\"my-profile.html\">My profile</a></li>
              <li><a href=\"#\">Settings</a></li>
\t\t\t  <li><a href=\"#\">Logout</a></li> 
              ";
    }

    // line 24
    public function block_body_corp($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t      <div class=\"page-header\">
\t\t          ";
        // line 26
        $this->displayBlock('body_header', $context, $blocks);
        // line 28
        echo "\t\t\t      </div>
\t\t          ";
        // line 29
        $this->displayBlock('body_content', $context, $blocks);
        // line 31
        echo "\t\t\t  ";
    }

    // line 26
    public function block_body_header($context, array $blocks = array())
    {
        // line 27
        echo "\t\t\t      ";
    }

    // line 29
    public function block_body_content($context, array $blocks = array())
    {
        // line 30
        echo "\t\t\t      ";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  99 => 29,  95 => 27,  92 => 26,  88 => 31,  86 => 29,  83 => 28,  81 => 26,  78 => 25,  75 => 24,  60 => 7,  57 => 6,  51 => 32,  49 => 24,  42 => 19,  40 => 6,  35 => 3,  32 => 2,);
    }
}
