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
        // line 28
        echo "            </ul>
        </div>
    </div>
    <div class=\"span9\">
        <div class=\"row-fluid\">
            ";
        // line 33
        $this->displayBlock('body_corp', $context, $blocks);
        // line 61
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
        echo $this->env->getExtension('routing')->getPath("typeevenement_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.typeevenement", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("categorie_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.categorie", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("membre_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.membre", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li class=\"nav-header\"><i class=\"icon-gift\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.events", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</li>
                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("event_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.evenement", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("depenses_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.depenses", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("charges_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.charges", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("versement_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.versement", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li class=\"nav-header\"><i class=\"icon-signal\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.gestion", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</li>
                    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("etats_caisse");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.etat.caisse", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("etats_evenement");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.etat.type", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("etats_membre");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.etat.type.membre", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("etats_charges");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.etat.charge", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                     <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("etats_chargemembre");
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.etat.versementmembre", array(), "EdahiraDahiraBundle")), "html", null, true);
        echo "</a></li>
                ";
    }

    // line 33
    public function block_body_corp($context, array $blocks = array())
    {
        // line 34
        echo "                <div class=\"page-header\">
                    ";
        // line 35
        $this->displayBlock('body_header', $context, $blocks);
        // line 37
        echo "                </div>
                ";
        // line 38
        $this->displayBlock('body_content', $context, $blocks);
        // line 60
        echo "            ";
    }

    // line 35
    public function block_body_header($context, array $blocks = array())
    {
        // line 36
        echo "                    ";
    }

    // line 38
    public function block_body_content($context, array $blocks = array())
    {
        // line 39
        echo "                    ";
        // line 40
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 41
            echo "                            <p><span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</span></p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 44
            echo "                            <p><span class=\"label label-important\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</span></p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 47
            echo "                            <p><span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</span></p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 50
            echo "                            <p><span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</span></p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "html"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 53
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "url"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
                // line 54
                echo "                                <p><span class=\"alert alert-info\"><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></span></p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
                    ";
        // line 59
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
        return array (  274 => 59,  271 => 57,  265 => 56,  254 => 54,  249 => 53,  244 => 52,  235 => 50,  230 => 49,  221 => 47,  216 => 46,  207 => 44,  202 => 43,  193 => 41,  188 => 40,  186 => 39,  183 => 38,  179 => 36,  176 => 35,  172 => 60,  170 => 38,  167 => 37,  165 => 35,  162 => 34,  159 => 33,  151 => 26,  145 => 25,  139 => 24,  133 => 23,  127 => 22,  123 => 21,  117 => 20,  111 => 19,  105 => 18,  89 => 15,  83 => 14,  71 => 12,  60 => 10,  57 => 9,  51 => 61,  49 => 33,  42 => 28,  40 => 9,  35 => 6,  32 => 5,  171 => 10,  168 => 9,  158 => 54,  152 => 52,  146 => 48,  132 => 42,  126 => 41,  120 => 40,  114 => 39,  109 => 37,  103 => 34,  99 => 17,  95 => 16,  91 => 31,  88 => 30,  84 => 29,  77 => 13,  73 => 24,  69 => 23,  65 => 11,  61 => 21,  56 => 18,  54 => 17,  48 => 14,  44 => 12,  41 => 9,  38 => 8,  30 => 5,);
    }
}
