<?php

/* EdahiraDahiraBundle:Don:details.html.twig */
class __TwigTemplate_6248ef393df10ad672a155a853ee9be7ae35249534553b000f144973c8473d67 extends Twig_Template
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
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dons"]) ? $context["dons"] : $this->getContext($context, "dons")));
            foreach ($context['_seq'] as $context["_key"] => $context["don"]) {
                // line 13
                echo "\t\t\t<tr class=\"list-users\">
\t\t\t\t<td>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["don"]) ? $context["don"] : $this->getContext($context, "don")), "donnateur"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["don"]) ? $context["don"] : $this->getContext($context, "don")), "montant"), "html", null, true);
                echo "</td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['don'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t</tbody>
\t</table>
";
        } else {
            // line 21
            echo "\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.aucun", array("%objet%" => "don"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Don:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  60 => 18,  51 => 15,  47 => 14,  44 => 13,  40 => 12,  33 => 8,  29 => 7,  24 => 4,  22 => 3,  19 => 2,);
    }
}
