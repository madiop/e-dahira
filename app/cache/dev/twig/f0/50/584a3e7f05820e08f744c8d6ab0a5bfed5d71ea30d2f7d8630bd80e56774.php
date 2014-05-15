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
        echo " method=\"POST\" class=\"form-horizontal\">
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
        return array (  38 => 9,  30 => 6,  22 => 3,  19 => 2,  214 => 72,  209 => 71,  206 => 70,  201 => 63,  198 => 62,  194 => 57,  191 => 56,  183 => 26,  172 => 47,  167 => 45,  159 => 40,  155 => 38,  148 => 33,  137 => 31,  133 => 30,  128 => 27,  126 => 26,  120 => 22,  118 => 21,  113 => 18,  110 => 17,  103 => 65,  101 => 62,  95 => 58,  93 => 56,  89 => 54,  86 => 17,  83 => 16,  74 => 9,  70 => 8,  65 => 7,  62 => 6,  56 => 5,  50 => 74,  45 => 69,  43 => 11,  37 => 6,  33 => 5,  27 => 1,  78 => 16,  75 => 15,  69 => 17,  67 => 15,  64 => 14,  57 => 12,  48 => 70,  44 => 9,  39 => 14,  35 => 7,  32 => 6,  29 => 5,  31 => 4,  28 => 3,);
    }
}
