<?php

/* EdahiraDahiraBundle:Caisses:index.html.twig */
class __TwigTemplate_1053823bdd6c24793df4965c990cb195507fe80c44925d6cb863fb40a4492e48 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.caisse"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 7
    public function block_body_header($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.list", array("%objet%" => "caisses"), "EdahiraDahiraBundle"), "html", null, true);
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
        if ((twig_length_filter($this->env, (isset($context["caisses"]) ? $context["caisses"] : $this->getContext($context, "caisses"))) > 0)) {
            // line 15
            echo "\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nom", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.description", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.etat", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["caisses"]) ? $context["caisses"] : $this->getContext($context, "caisses")));
            foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                // line 26
                echo "\t\t\t\t<tr class=\"list-users\">
\t\t\t\t\t<td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse")), "nom"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse")), "description"), "html", null, true);
                echo "</td>
\t\t\t\t\t";
                // line 29
                if (($this->getAttribute((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse")), "etat") == true)) {
                    // line 30
                    echo "\t\t\t\t\t\t<td><span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ouvert", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo "</span></td>
\t\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t\t<td><span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ferme", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo "</span></td>
\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-mini dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caisse_editer", array("id" => $this->getAttribute((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-pencil\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caisse_supprimer", array("id" => $this->getAttribute((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
                            ";
                // line 40
                if (($this->getAttribute((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse")), "etat") == true)) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caisse_changeretat", array("id" => $this->getAttribute((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse")), "id"), "etat" => 0)), "html", null, true);
                    echo "\"><i class=\"icon-folder-close\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.fermer", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 43
                    echo "\t\t\t\t\t\t\t    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caisse_changeretat", array("id" => $this->getAttribute((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse")), "id"), "etat" => 1)), "html", null, true);
                    echo "\"><i class=\"icon-folder-open\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ouvrir", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caisse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t\t</tbody>
\t\t</table>
\t\t
\t";
        } else {
            // line 54
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.fem.aucun", array("%objet%" => "caisse"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</p>
\t";
        }
        // line 56
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("caisse_editer");
        echo "\" class=\"btn btn-success\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ajouter", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Caisses:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 56,  167 => 54,  161 => 50,  151 => 45,  143 => 43,  135 => 41,  133 => 40,  127 => 39,  121 => 38,  116 => 36,  112 => 34,  106 => 32,  100 => 30,  98 => 29,  94 => 28,  90 => 27,  87 => 26,  83 => 25,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  59 => 15,  57 => 14,  51 => 12,  48 => 11,  41 => 8,  38 => 7,  30 => 5,);
    }
}
