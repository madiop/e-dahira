<?php

/* EdahiraDahiraBundle:Etats:ajax.charges.html.twig */
class __TwigTemplate_1d1294a4c66429d06db0131ca3f18053708852f5ed43f4ade530155351869564 extends Twig_Template
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
        if ((!(null === (isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge"))))) {
            // line 4
            echo "
\t<b>";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.totalverse", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EdahiraCharge')->getSoldeCharge((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge"))), "html", null, true);
            echo "</b> FCFA
\t<br/>
\t<br/>

\t";
            // line 9
            if ((twig_length_filter($this->env, (isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres"))) > 0)) {
                // line 10
                echo "\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.membre", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</th>
\t\t\t\t\t<th>";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.categorie", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</th>
\t\t\t\t\t<th>";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.montantverse", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</th>
\t\t\t\t\t<th>";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.restant", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 20
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
                foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                    // line 21
                    echo "\t\t\t\t<tr class=\"list-users\">
\t\t\t\t\t<td>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "affichage"), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "categorie"), "nom"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->env->getExtension('EdahiraCharge')->getMontantCharge((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "categorie")), "html", null, true);
                    echo ")</td>
\t\t\t\t\t<td>";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('EdahiraCharge')->getBalanceMembre((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), (isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre"))), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 25
                    echo twig_escape_filter($this->env, ($this->env->getExtension('EdahiraCharge')->getMontantCharge((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "categorie")) - $this->env->getExtension('EdahiraCharge')->getBalanceMembre((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), (isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")))), "html", null, true);
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t\t</tbody>
\t\t</table>
\t\t<span class=\"alert alert-info\"><a href=\"";
                // line 30
                echo $this->env->getExtension('routing')->getPath("etats_chargemembre");
                echo "\" title=\"\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.voirdetailparmembre", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></span>
\t";
            } else {
                // line 32
                echo "\t\t<p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.aucun", array("%objet%" => "membre"), "EdahiraDahiraBundle"), "html", null, true);
                echo "</p>
\t";
            }
            // line 34
            echo "
\t<div class=\"page-header\">
\t    <h1><small>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.dons", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</small></h1>
\t</div>
\t<div id=\"dons_id\" >
\t    ";
            // line 39
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EdahiraDahiraBundle:Don:details", array("type" => 2, "idType" => $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "id"))));
            echo "
\t</div>

";
        } else {
            // line 43
            echo "    <span class='alert alert-info'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.charge.choose", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Etats:ajax.charges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  119 => 39,  113 => 36,  109 => 34,  103 => 32,  96 => 30,  92 => 28,  83 => 25,  79 => 24,  73 => 23,  69 => 22,  66 => 21,  62 => 20,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  38 => 10,  36 => 9,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }
}
