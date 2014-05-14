<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_f050584a3e7f05820e08f744c8d6ab0a5bfed5d71ea30d2f7d8630bd80e56774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal well\">
\t<div class=\"control-group\">
    \t<div class=\"controls\">
\t   \t\t<span class=\"alert alert-info\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" title=\"\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></span>
\t   \t</div>
\t</div>
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"form-actions\">
        <input type=\"submit\" class=\"btn btn-success btn-large\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  38 => 9,  30 => 6,  22 => 3,  19 => 2,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
