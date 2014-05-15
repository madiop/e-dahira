<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_bc448b666bb45b2d42934f2cb76ed90d289717e38a96d25feaf05fc76a8823cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"span5 offset4 well\">
\t    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 8
            echo "\t        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">
\t\t        ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 10
                echo "\t\t        \t";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), array(), "FOSUserBundle"), "html", null, true);
                echo "
\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t        </div>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
\t    ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "
\t</div>
";
    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 16
        echo "\t    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  69 => 17,  67 => 15,  64 => 14,  57 => 12,  48 => 10,  39 => 8,  35 => 7,  32 => 6,  29 => 5,  98 => 40,  94 => 38,  88 => 35,  85 => 34,  83 => 33,  75 => 15,  65 => 21,  58 => 17,  53 => 15,  44 => 9,  38 => 8,  34 => 7,  31 => 6,  28 => 5,);
    }
}
