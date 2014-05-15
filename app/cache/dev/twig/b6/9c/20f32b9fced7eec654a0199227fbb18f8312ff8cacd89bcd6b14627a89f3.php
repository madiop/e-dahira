<?php

/* EdahiraDahiraBundle:Don:index.html.twig */
class __TwigTemplate_b69c20f32b9fced7eec654a0199227fbb18f8312ff8cacd89bcd6b14627a89f3 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["dons"]) ? $context["dons"] : $this->getContext($context, "dons"))) > 0)) {
            // line 4
            echo "\t<table style=\"width:40%\" class=\"table table-striped table-bordered table-condensed\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.donnateur", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.montant", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dons"]) ? $context["dons"] : $this->getContext($context, "dons")));
            foreach ($context['_seq'] as $context["_key"] => $context["don"]) {
                // line 14
                echo "\t\t\t<tr class=\"list-users\">
\t\t\t\t<td>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["don"]) ? $context["don"] : $this->getContext($context, "don")), "donnateur"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["don"]) ? $context["don"] : $this->getContext($context, "don")), "montant"), "html", null, true);
                echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-mini dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"javascript:;\" onClick=\"editDon('";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("don_editer", array("idType" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id"), "type" => 1, "id" => $this->getAttribute((isset($context["don"]) ? $context["don"] : $this->getContext($context, "don")), "id"))), "html", null, true);
                echo "');\"><i class=\"icon-pencil\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("don_supprimer", array("idType" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id"), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id" => $this->getAttribute((isset($context["don"]) ? $context["don"] : $this->getContext($context, "don")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['don'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t</tbody>
\t</table>
";
        } else {
            // line 31
            echo "\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.aucun", array("%objet%" => "don"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Don:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  66 => 21,  51 => 15,  48 => 14,  44 => 13,  37 => 9,  33 => 8,  29 => 7,  24 => 4,  22 => 3,  19 => 2,  195 => 74,  184 => 67,  181 => 66,  173 => 61,  168 => 59,  162 => 56,  153 => 53,  147 => 51,  141 => 47,  134 => 45,  128 => 43,  122 => 41,  120 => 40,  116 => 39,  113 => 38,  109 => 37,  102 => 33,  98 => 32,  93 => 29,  91 => 31,  86 => 28,  83 => 25,  80 => 24,  75 => 22,  69 => 20,  61 => 19,  58 => 17,  55 => 16,  47 => 14,  35 => 6,  32 => 5,);
    }
}
