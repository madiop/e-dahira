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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"span3\">
        <div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
                ";
        // line 9
        $this->displayBlock('sidebar', $context, $blocks);
        // line 30
        echo "            </ul>
        </div>
    </div>
    <div class=\"span9\">
        <div class=\"row-fluid\">
            ";
        // line 35
        $this->displayBlock('body_corp', $context, $blocks);
        // line 77
        echo "        </div>
    </div>
";
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        echo "                    <li class=\"nav-header\"><i class=\"icon-wrench\"></i> ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.administration", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</li>
                    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("dahira_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.dahira", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("caisse_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.caisse", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("categorie_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.categorie", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("typeevenement_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.typeevenement", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("membre_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.membre", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    
                    <li class=\"nav-header\"><i class=\"icon-gift\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.gestion", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</li>
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("event_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.evenement", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("depenses_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.depenses", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("charges_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.charges", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("versement_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.versement", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    
                    <li class=\"nav-header\"><i class=\"icon-signal\"></i> ";
        // line 23
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.etats", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("etats_caisse");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.caisse", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("etats_evenement");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.type", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("etats_membre");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.type", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.membre", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("etats_charges");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.charge", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                     <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("etats_chargemembre");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.versementmembre", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                ";
    }

    // line 35
    public function block_body_corp($context, array $blocks = array())
    {
        // line 36
        echo "                <div class=\"page-header\">
                    ";
        // line 37
        $this->displayBlock('body_header', $context, $blocks);
        // line 39
        echo "                </div>
                ";
        // line 40
        $this->displayBlock('body_content', $context, $blocks);
        // line 76
        echo "            ";
    }

    // line 37
    public function block_body_header($context, array $blocks = array())
    {
        // line 38
        echo "                    ";
    }

    // line 40
    public function block_body_content($context, array $blocks = array())
    {
        // line 41
        echo "                    ";
        // line 42
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 43
            echo "                            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">
                                ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 45
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo " 
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                        

                        ";
        // line 74
        echo "                    ";
        // line 75
        echo "                ";
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
        return array (  229 => 75,  227 => 74,  223 => 49,  215 => 46,  206 => 45,  202 => 44,  197 => 43,  192 => 42,  190 => 41,  187 => 40,  183 => 38,  180 => 37,  176 => 76,  174 => 40,  169 => 37,  166 => 36,  163 => 35,  155 => 28,  149 => 27,  141 => 26,  135 => 25,  129 => 24,  125 => 23,  118 => 21,  112 => 20,  106 => 19,  100 => 18,  96 => 17,  89 => 15,  83 => 14,  71 => 12,  60 => 10,  57 => 9,  51 => 77,  49 => 35,  42 => 30,  40 => 9,  35 => 6,  32 => 5,  171 => 39,  168 => 9,  158 => 54,  152 => 52,  146 => 48,  132 => 42,  126 => 41,  120 => 40,  114 => 39,  109 => 37,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  88 => 30,  84 => 29,  77 => 13,  73 => 24,  69 => 23,  65 => 11,  61 => 21,  56 => 18,  54 => 17,  48 => 14,  44 => 12,  41 => 9,  38 => 8,  30 => 5,);
    }
}
