<?php

/* EdahiraDahiraBundle:Evenement:index.html.twig */
class __TwigTemplate_479962d04f2316395f0d862ef18a6783e6bdf112781b33763d7c323c929e7a60 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.evenement"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 7
    public function block_body_header($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.list", array("%objet%" => "évènements"), "EdahiraDahiraBundle"), "html", null, true);
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
\t";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["evenements"]) ? $context["evenements"] : $this->getContext($context, "evenements"))) > 0)) {
            // line 14
            echo "\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.prenom", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nom", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.date", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) ? $context["evenements"] : $this->getContext($context, "evenements")));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                if ($this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "membre")) {
                    // line 25
                    echo "\t\t\t\t<tr class=\"list-users\">
\t\t\t\t\t<td>";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "membre"), "prenom"), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "membre"), "nom"), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 28
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "date"), "d/m/Y"), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-mini dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotisation_etat", array("id" => $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "id"))), "html", null, true);
                    echo "\"><i class=\"icon-user\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.detailscotis", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_editer", array("id" => $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "id"))), "html", null, true);
                    echo "\"><i class=\"icon-pencil\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_supprimer", array("id" => $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "id"))), "html", null, true);
                    echo "\"><i class=\"icon-trash\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        } else {
            // line 44
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.aucun", array("%objet%" => "évènement"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</p>
\t";
        }
        // line 46
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("event_editer", array("id" => null));
        echo "\" class=\"btn btn-success\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ajouter", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Evenement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 46,  141 => 44,  136 => 41,  121 => 35,  115 => 34,  109 => 33,  104 => 31,  98 => 28,  94 => 27,  90 => 26,  87 => 25,  82 => 24,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  58 => 14,  56 => 13,  51 => 12,  48 => 11,  41 => 8,  38 => 7,  30 => 5,);
    }
}
