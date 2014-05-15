<?php

/* EdahiraDahiraBundle:Etats:ajax.evenement.html.twig */
class __TwigTemplate_dc03d69a230638cc49d0d8b7f0e5c4f9f0b6c36a505b7b93437ca665eb6da334 extends Twig_Template
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
        // line 4
        if ((!(null === (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events"))))) {
            // line 5
            echo "
\t";
            // line 6
            if ((twig_length_filter($this->env, (isset($context["cotisations"]) ? $context["cotisations"] : $this->getContext($context, "cotisations"))) > 0)) {
                // line 7
                echo "\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<thead align=\"center\">
\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.membre", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</th>
\t\t\t\t";
                // line 11
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 12
                    echo "\t\t\t\t\t<th>
\t\t\t\t\t\t";
                    // line 13
                    if ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "membre")) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "membre"), "affichage"), "html", null, true);
                        echo "<br/> ";
                    }
                    // line 14
                    echo "\t\t\t\t\t    (";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "date"), "d-m-Y"), "html", null, true);
                    echo ")
\t\t\t\t\t</th>
\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cotisations"]) ? $context["cotisations"] : $this->getContext($context, "cotisations")));
                foreach ($context['_seq'] as $context["_key"] => $context["membres"]) {
                    // line 22
                    echo "\t\t\t\t<tr class=\"list-users\">
\t\t\t\t\t<td>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")), 0, array(), "array"), "membre"), "affichage"), "html", null, true);
                    echo "</td>
\t\t\t\t    ";
                    // line 24
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
                    foreach ($context['_seq'] as $context["_key"] => $context["cotisation"]) {
                        // line 25
                        echo "\t\t\t\t\t    ";
                        if (($this->getAttribute((isset($context["cotisation"]) ? $context["cotisation"] : $this->getContext($context, "cotisation")), "etat") == true)) {
                            // line 26
                            echo "\t\t\t\t\t    <td><span class=\"label label-success\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.done", array(), "EdahiraDahiraBundle"), "html", null, true);
                            echo "</span></td>
\t\t\t\t\t    ";
                        } else {
                            // line 28
                            echo "\t\t\t\t\t    <td><span class=\"label label-important\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.undone", array(), "EdahiraDahiraBundle"), "html", null, true);
                            echo "</span></td>
\t\t\t\t\t    ";
                        }
                        // line 30
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cotisation'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membres'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t\t\t";
                // line 44
                echo " 
\t\t\t</tbody>
\t\t</table>
\t";
            } else {
                // line 48
                echo "\t\t<p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.fem.aucun", array("%objet%" => "cotisation"), "EdahiraDahiraBundle"), "html", null, true);
                echo "</p>
\t";
            }
            // line 50
            echo "
";
        } else {
            // line 52
            echo "    <span class='alert alert-info'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.type.choose", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Etats:ajax.evenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 52,  125 => 50,  119 => 48,  113 => 44,  111 => 33,  104 => 31,  98 => 30,  92 => 28,  86 => 26,  83 => 25,  79 => 24,  75 => 23,  72 => 22,  68 => 21,  62 => 17,  52 => 14,  46 => 13,  43 => 12,  39 => 11,  35 => 10,  30 => 7,  28 => 6,  25 => 5,  23 => 4,  19 => 2,);
    }
}
