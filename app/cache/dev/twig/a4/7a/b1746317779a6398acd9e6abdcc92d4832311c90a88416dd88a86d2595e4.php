<?php

/* EdahiraDahiraBundle:Dahira:index.html.twig */
class __TwigTemplate_a47ab1746317779a6398acd9e6abdcc92d4832311c90a88416dd88a86d2595e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EdahiraDahiraBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.dahira"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "\t<div class=\"page-header\">
   \t \t<h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.list", array("%objet%" => "dahiras"), "EdahiraDahiraBundle"), "html", null, true);
        echo "</h1>
   \t</div>

\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 14
            echo "\t    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">
\t        ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 16
                echo "\t            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo " 
\t    </div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t";
        // line 21
        if ((twig_length_filter($this->env, (isset($context["dahiras"]) ? $context["dahiras"] : $this->getContext($context, "dahiras"))) > 0)) {
            // line 22
            echo "\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nom", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.description", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.president", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.telephone", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dahiras"]) ? $context["dahiras"] : $this->getContext($context, "dahiras")));
            foreach ($context['_seq'] as $context["_key"] => $context["dahira"]) {
                // line 34
                echo "\t\t\t\t<tr class=\"list-users\">
\t\t\t\t\t<td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "nom"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "description"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "president"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "telephone"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-mini dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dahira_gerer", array("id" => $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-lock\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.gerer", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dahira_editer", array("id" => $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-pencil\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dahira_partager", array("id" => $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-share\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.partager", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dahira_supprimer", array("id" => $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dahira'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t</tbody>
\t\t</table>
\t\t
\t";
        } else {
            // line 56
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.aucun", array("%objet%" => "dahira"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</p>
\t";
        }
        // line 58
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("dahira_editer");
        echo "\" class=\"btn btn-success\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ajouter", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>

";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Dahira:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 58,  180 => 56,  174 => 52,  160 => 46,  154 => 45,  148 => 44,  142 => 43,  137 => 41,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  116 => 34,  112 => 33,  105 => 29,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  84 => 22,  82 => 21,  79 => 20,  71 => 17,  62 => 16,  58 => 15,  53 => 14,  49 => 13,  43 => 10,  40 => 9,  37 => 8,  29 => 5,);
    }
}
