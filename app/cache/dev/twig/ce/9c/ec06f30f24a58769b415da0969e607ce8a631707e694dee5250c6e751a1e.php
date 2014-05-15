<?php

/* EdahiraDahiraBundle:Charges:index.html.twig */
class __TwigTemplate_ce9cec06f30f24a58769b415da0969e607ce8a631707e694dee5250c6e751a1e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.charges", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo " ";
    }

    // line 7
    public function block_body_header($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.list", array("%objet%" => "charges"), "EdahiraDahiraBundle"), "html", null, true);
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
        if ((twig_length_filter($this->env, (isset($context["charges"]) ? $context["charges"] : $this->getContext($context, "charges"))) > 0)) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.echeance", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.caisse", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.etat", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["charges"]) ? $context["charges"] : $this->getContext($context, "charges")));
            foreach ($context['_seq'] as $context["_key"] => $context["charge"]) {
                // line 27
                echo "\t\t\t\t<tr class=\"list-users\">
\t\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "objet"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "echeance"), "d-m-Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "caisse"), "nom"), "html", null, true);
                echo "</td>
\t\t\t\t\t";
                // line 31
                if (($this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "etat") == true)) {
                    // line 32
                    echo "\t\t\t\t\t\t<td><span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ouvert", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo "</span></td>
\t\t\t\t\t";
                } else {
                    // line 34
                    echo "\t\t\t\t\t\t<td><span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ferme", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo "</span></td>
\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-mini dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("charges_details", array("id" => $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-align-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.detailsversement", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("charges_editer", array("id" => $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-pencil\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("charges_supprimer", array("id" => $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
                            ";
                // line 43
                if (($this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "etat") == true)) {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("charges_changeretat", array("id" => $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "id"), "etat" => 0)), "html", null, true);
                    echo "\"><i class=\"icon-folder-close\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.fermer", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 46
                    echo "\t\t\t\t\t\t\t    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("charges_changeretat", array("id" => $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "id"), "etat" => 1)), "html", null, true);
                    echo "\"><i class=\"icon-folder-open\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ouvrir", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t";
                }
                // line 48
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t</tbody>
\t\t</table>
\t\t";
        } else {
            // line 56
            echo "\t\t\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.fem.aucun", array("%objet%" => "charge"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</p>
\t\t";
        }
        // line 58
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("charges_editer");
        echo "\" class=\"btn btn-success\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ajouter", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>

";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Charges:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 58,  181 => 56,  176 => 53,  166 => 48,  158 => 46,  150 => 44,  148 => 43,  142 => 42,  136 => 41,  130 => 40,  125 => 38,  121 => 36,  115 => 34,  109 => 32,  107 => 31,  103 => 30,  99 => 29,  95 => 28,  92 => 27,  88 => 26,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  60 => 15,  58 => 14,  52 => 12,  49 => 11,  42 => 8,  39 => 7,  30 => 5,);
    }
}
