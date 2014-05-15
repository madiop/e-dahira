<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9fb25b3b6bea58716542f99c11b6cfc586ed0d612efbc532d91b26a8143c6bb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t<form class=\"form-horizontal\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" >
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" /> 
\t\t    <div class=\"control-group\">
\t\t    \t<div class=\"controls\">
\t\t\t   \t\t<span class=\"alert alert-info\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" title=\"\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></span>
\t\t\t   \t</div>
\t\t\t</div>
\t\t    <div class=\"control-group\">
\t\t\t    <label class=\"control-label\" for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t    <div class=\"controls\">
\t\t\t    \t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t    </div>
\t\t\t</div>
\t        <div class=\"control-group\">
\t\t\t    <label class=\"control-label\" for=\"password\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t    <div class=\"controls\">
\t\t\t    \t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t   \t</div>
\t\t\t</div>
\t        
\t        <div class=\"control-group\">
\t\t\t    <label class=\"control-label\" for=\"remember_me\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t    <div class=\"controls\">\t\t    
\t\t\t    \t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t</div>
\t\t\t</div>
        \t";
        // line 33
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 34
            echo "\t\t        <div class=\"control-group\">
\t\t\t\t    <div><span class=\"alert alert-error\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</span></div>
\t\t        </div>
\t\t\t";
        }
        // line 38
        echo "
\t\t\t<div class=\"form-actions\">
\t\t    \t<input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-success btn-large\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t    </div>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  94 => 38,  88 => 35,  85 => 34,  83 => 33,  75 => 28,  65 => 21,  58 => 17,  53 => 15,  44 => 11,  38 => 8,  34 => 7,  31 => 6,  28 => 5,);
    }
}
