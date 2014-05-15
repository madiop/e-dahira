<?php

/* EdahiraDahiraBundle:Etats:ajax.caisse.html.twig */
class __TwigTemplate_e54ba73c714e0e06c28f67968eb9e1c025dd6728c11bb71eb984281ae2773883 extends Twig_Template
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
        if ((!(null === (isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse"))))) {
            // line 4
            echo "
<b>";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.balancecaisse", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EdahiraCaisse')->getFond((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse"))), "html", null, true);
            echo "</b> FCFA
<br/>
<br/>

<table class=\"table table-striped table-bordered table-condensed\">
\t<thead>
\t\t<tr>
\t\t\t<th>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.element", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t<th>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.montant", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr class=\"\">
\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.fond", array(), "EdahiraDahiraBundle")), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse")), "fond"), 0, ",", "."), "html", null, true);
            echo " </td>
\t\t</tr>
\t\t<tr class=\"\">
\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.charge", array(), "EdahiraDahiraBundle")), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->env->getExtension('EdahiraCaisse')->getFondCharge((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse"))), 0, ",", "."), "html", null, true);
            echo " </td>
\t\t</tr>
\t";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse")), "typeevenement"));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 26
                echo "\t\t<tr class=\"\">
\t\t\t<td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "nom"), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->env->getExtension('EdahiraCaisse')->getFondTypeEvent((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse")), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), 0, ",", "."), "html", null, true);
                echo " </td>
\t\t</tr>\t\t\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t    <tr class=\"\">
\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("label.depense", array(), "EdahiraDahiraBundle")), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->env->getExtension('EdahiraCaisse')->getDepenses((isset($context["caisse"]) ? $context["caisse"] : $this->getContext($context, "caisse"))), 0, ",", "."), "html", null, true);
            echo " </td>
\t\t</tr>
\t</tbody>
</table>
";
        } else {
            // line 38
            echo "    <span class='alert alert-info'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.caisse.choose", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Etats:ajax.caisse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  97 => 33,  93 => 32,  90 => 31,  81 => 28,  77 => 27,  74 => 26,  70 => 25,  65 => 23,  61 => 22,  55 => 19,  51 => 18,  43 => 13,  39 => 12,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }
}
