<?php

/* EdahiraDahiraBundle:Etats:ajax.chargemembre.html.twig */
class __TwigTemplate_8cf1e6ea71ea357086e8a2cc776f399da3abc20d378d4478cffc10331523ca3f extends Twig_Template
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
";
        // line 3
        if ((null === (isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")))) {
            // line 4
            echo "    <span class='alert alert-info'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.charge.choose", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</span>
";
        } elseif ((null === (isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")))) {
            // line 6
            echo "    <span class='alert alert-info'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.membre.choose", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 8
            echo "
\t<b>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.totalaverse", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EdahiraCharge')->getMontantCharge((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "categorie")), "html", null, true);
            echo "</b> FCFA
\t<br/>
\t<b>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.totalverse", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EdahiraCharge')->getBalanceMembre((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), (isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre"))), "html", null, true);
            echo "</b> FCFA
\t<br/>
\t<b>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.totalrestant", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, ($this->env->getExtension('EdahiraCharge')->getMontantCharge((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "categorie")) - $this->env->getExtension('EdahiraCharge')->getBalanceMembre((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), (isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")))), "html", null, true);
            echo "</b> FCFA
\t<br/>
\t<br/>

\t";
            // line 17
            if ((twig_length_filter($this->env, (isset($context["versements"]) ? $context["versements"] : $this->getContext($context, "versements"))) > 0)) {
                // line 18
                echo "\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.date", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</th>
\t\t\t\t\t<th>";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.montant", array(), "EdahiraDahiraBundle"), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable((isset($context["versements"]) ? $context["versements"] : $this->getContext($context, "versements")));
                foreach ($context['_seq'] as $context["_key"] => $context["versement"]) {
                    // line 28
                    echo "\t\t\t\t<tr class=\"list-users\">
\t\t\t\t\t<td>";
                    // line 29
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["versement"]) ? $context["versement"] : $this->getContext($context, "versement")), "date"), "d-m-Y"), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["versement"]) ? $context["versement"] : $this->getContext($context, "versement")), "montant"), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-mini dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"javascript:;\" 
\t\t\t\t\t\t\t\tonClick=\"editVersement('";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("versement_editer", array("id" => $this->getAttribute((isset($context["versement"]) ? $context["versement"] : $this->getContext($context, "versement")), "id"))), "html", null, true);
                    echo "');\"><i class=\"icon-pencil\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("versement_supprimer", array("id" => $this->getAttribute((isset($context["versement"]) ? $context["versement"] : $this->getContext($context, "versement")), "id"))), "html", null, true);
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['versement'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "\t\t\t</tbody>
\t\t</table>
\t";
            } else {
                // line 46
                echo "\t\t<p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.aucun", array("%objet%" => "versement"), "EdahiraDahiraBundle"), "html", null, true);
                echo "</p>
\t";
            }
            // line 48
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Etats:ajax.chargemembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  132 => 46,  127 => 43,  113 => 37,  107 => 36,  101 => 33,  95 => 30,  91 => 29,  88 => 28,  84 => 27,  77 => 23,  73 => 22,  69 => 21,  64 => 18,  62 => 17,  53 => 13,  46 => 11,  39 => 9,  36 => 8,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }
}
