<?php

/* EdahiraDahiraBundle:Membre:index.html.twig */
class __TwigTemplate_7529914ce96c89506611d79e393fa74434603680d20f97eafb15bcc12b71e058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EdahiraDahiraBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_header' => array($this, 'block_body_header'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.membre"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 7
    public function block_body_header($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.list", array("%objet%" => "membres"), "EdahiraDahiraBundle"), "html", null, true);
        echo "</h1>
";
    }

    // line 11
    public function block_body_content($context, array $blocks = array())
    {
        // line 12
        echo "\t";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "
\t
\t";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres"))) > 0)) {
            // line 15
            echo "\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.prenom", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nom", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tel1", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tel2", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.etat", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
            foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                // line 28
                echo "\t\t\t\t<tr class=\"list-users\">
\t\t\t\t\t<td>";
                // line 29
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "prenom")), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 30
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "nom")), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "telephone1"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "telephone2"), "html", null, true);
                echo "</td>
\t\t\t\t\t";
                // line 33
                if (($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "etat") == true)) {
                    // line 34
                    echo "\t\t\t\t\t\t<td><span class=\"label label-success\">Actif</span></td>
\t\t\t\t\t";
                } else {
                    // line 36
                    echo "\t\t\t\t\t\t<td><span class=\"label label-important\">Inactif</span></td>
\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-mini dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Actions <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membre_editer", array("id" => $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-pencil\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membre_supprimer", array("id" => $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etats_membre", array("membre" => $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "id"), "type" => 1)), "html", null, true);
                echo "\"><i class=\"icon-user\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.detailscotis", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        } else {
            // line 53
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.aucun", array("%objet%" => "membre"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</p>
\t";
        }
        // line 55
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("membre_editer");
        echo "\" class=\"btn btn-success\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ajouter", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Membre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 55,  161 => 53,  156 => 50,  142 => 44,  136 => 43,  130 => 42,  124 => 38,  120 => 36,  116 => 34,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  95 => 28,  91 => 27,  84 => 23,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  59 => 15,  57 => 14,  51 => 12,  48 => 11,  41 => 8,  38 => 7,  30 => 5,);
    }
}
