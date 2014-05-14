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
            'body_content' => array($this, 'block_body_content'),
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
        echo "\t";
        $this->displayBlock('body_content', $context, $blocks);
        // line 12
        echo "
\t<div class=\"page-header\">
   \t \t<h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.list", array("%objet%" => "dahiras"), "EdahiraDahiraBundle"), "html", null, true);
        echo "</h1>
   \t</div>

\t";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["dahiras"]) ? $context["dahiras"] : $this->getContext($context, "dahiras"))) > 0)) {
            // line 18
            echo "\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nom", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.description", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.president", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.telephone", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dahiras"]) ? $context["dahiras"] : $this->getContext($context, "dahiras")));
            foreach ($context['_seq'] as $context["_key"] => $context["dahira"]) {
                // line 30
                echo "\t\t\t\t<tr class=\"list-users\">
\t\t\t\t\t<td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "nom"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "description"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "president"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "telephone"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-mini dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dahira_gerer", array("id" => $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-lock\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.gerer", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dahira_partager", array("id" => $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-share\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.partager", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dahira_editer", array("id" => $this->getAttribute((isset($context["dahira"]) ? $context["dahira"] : $this->getContext($context, "dahira")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-pencil\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 42
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
            // line 48
            echo "\t\t\t</tbody>
\t\t</table>
\t\t
\t";
        } else {
            // line 52
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.aucun", array("%objet%" => "dahira"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</p>
\t";
        }
        // line 54
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("dahira_editer");
        echo "\" class=\"btn btn-success\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ajouter", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>

";
    }

    // line 9
    public function block_body_content($context, array $blocks = array())
    {
        // line 10
        echo "\t\t";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "
\t";
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
        return array (  171 => 10,  168 => 9,  158 => 54,  152 => 52,  146 => 48,  132 => 42,  126 => 41,  120 => 40,  114 => 39,  109 => 37,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  88 => 30,  84 => 29,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  56 => 18,  54 => 17,  48 => 14,  44 => 12,  41 => 9,  38 => 8,  30 => 5,);
    }
}
