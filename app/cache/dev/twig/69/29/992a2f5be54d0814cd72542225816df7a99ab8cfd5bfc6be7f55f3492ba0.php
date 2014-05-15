<?php

/* EdahiraDahiraBundle:Etats:ajax.membre.html.twig */
class __TwigTemplate_6929992a2f5be54d0814cd72542225816df7a99ab8cfd5bfc6be7f55f3492ba0 extends Twig_Template
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
        if ((null === (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) {
            // line 4
            echo "    <span class='alert alert-info'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.type.choose", array(), "EdahiraDahiraBundle"), "html", null, true);
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
            echo "\t";
            if ((twig_length_filter($this->env, (isset($context["cotisations"]) ? $context["cotisations"] : $this->getContext($context, "cotisations"))) > 0)) {
                // line 9
                echo "\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<thead align=\"center\">
\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "nom"), "html", null, true);
                echo "</th>
\t\t\t\t    <th>";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.etatcotis", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 17
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cotisations"]) ? $context["cotisations"] : $this->getContext($context, "cotisations")));
                foreach ($context['_seq'] as $context["_key"] => $context["cotisation"]) {
                    // line 18
                    echo "\t\t\t\t<tr class=\"list-users\">
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                    // line 20
                    if ($this->getAttribute($this->getAttribute((isset($context["cotisation"]) ? $context["cotisation"] : $this->getContext($context, "cotisation")), "evenement"), "membre")) {
                        // line 21
                        echo "\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cotisation"]) ? $context["cotisation"] : $this->getContext($context, "cotisation")), "evenement"), "membre"), "affichage"), "html", null, true);
                        echo " (";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cotisation"]) ? $context["cotisation"] : $this->getContext($context, "cotisation")), "evenement"), "date"), "d-m-Y"), "html", null, true);
                        echo ")
\t\t\t\t\t\t";
                    } elseif ((twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cotisation"]) ? $context["cotisation"] : $this->getContext($context, "cotisation")), "evenement"), "typeevenement"), "nom")) == "mensualité")) {
                        // line 23
                        echo "\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.mensualite", array(), "EdahiraDahiraBundle"), "html", null, true);
                        echo " (";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cotisation"]) ? $context["cotisation"] : $this->getContext($context, "cotisation")), "evenement"), "date"), "F Y"), "html", null, true);
                        echo ")
\t\t\t\t\t\t";
                    } else {
                        // line 25
                        echo "\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cotisation"]) ? $context["cotisation"] : $this->getContext($context, "cotisation")), "evenement"), "date"), "d-m-Y"), "html", null, true);
                        echo "
\t\t\t\t\t\t";
                    }
                    // line 27
                    echo "\t\t\t\t\t</td>
\t\t\t\t\t";
                    // line 28
                    if (($this->getAttribute((isset($context["cotisation"]) ? $context["cotisation"] : $this->getContext($context, "cotisation")), "etat") == true)) {
                        // line 29
                        echo "\t\t\t\t\t    <td><span class=\"label label-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.done", array(), "EdahiraDahiraBundle"), "html", null, true);
                        echo "</span></td>
\t\t\t\t\t";
                    } else {
                        // line 31
                        echo "\t\t\t\t\t    <td><span class=\"label label-important\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.undone", array(), "EdahiraDahiraBundle"), "html", null, true);
                        echo "</span></td>
\t\t\t\t\t";
                    }
                    // line 33
                    echo "\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cotisation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "\t\t\t</tbody>
\t\t</table>
\t\t
\t\t<a id=\"modifier_cotisation\" href=\"\" class=\"btn btn-success\">";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.edit", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a>

\t";
            } else {
                // line 41
                echo "\t\t<p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.fem.aucun", array("%objet%" => "cotisation"), "EdahiraDahiraBundle"), "html", null, true);
                echo "</p>
\t";
            }
            // line 43
            echo "
    <script>
\t\t\$(\"#modifier_cotisation\").click(function(){
\t\t    \$.ajax({
\t\t        type: \"GET\",
\t\t        url: \"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membre_cotiser", array("membre" => $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "id"), "type" => $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id"))), "html", null, true);
            echo "\",
\t\t        cache: false,
\t\t        success: function(data){
\t\t           \$('#etats').html(data);
\t\t        }
\t\t    });    
\t\t    return false;
\t\t});

\t</script>

";
        }
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Etats:ajax.membre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 48,  128 => 43,  122 => 41,  116 => 38,  111 => 35,  104 => 33,  98 => 31,  92 => 29,  90 => 28,  87 => 27,  81 => 25,  73 => 23,  65 => 21,  63 => 20,  59 => 18,  55 => 17,  48 => 13,  44 => 12,  39 => 9,  36 => 8,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }
}
