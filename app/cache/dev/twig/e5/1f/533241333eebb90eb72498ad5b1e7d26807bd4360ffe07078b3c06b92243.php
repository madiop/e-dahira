<?php

/* EdahiraDahiraBundle:Categorie:index.html.twig */
class __TwigTemplate_e51f533241333eebb90eb72498ad5b1e7d26807bd4360ffe07078b3c06b92243 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.categorie"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 7
    public function block_body_header($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.list", array("%objet%" => "catégories"), "EdahiraDahiraBundle"), "html", null, true);
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
        if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"))) > 0)) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 24
                echo "\t\t\t\t<tr class=\"list-users\">
\t\t\t\t\t<td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nom"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-mini dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_editer", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-pencil\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "EdahiraDahiraBundle"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_supprimer", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"))), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        } else {
            // line 40
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.fem.aucun", array("%objet%" => "catégorie"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</p>
\t";
        }
        // line 42
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("categorie_editer");
        echo "\" class=\"btn btn-success\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ajouter", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Categorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  118 => 40,  113 => 37,  99 => 31,  93 => 30,  88 => 28,  82 => 25,  79 => 24,  75 => 23,  68 => 19,  64 => 18,  59 => 15,  57 => 14,  51 => 12,  48 => 11,  41 => 8,  38 => 7,  30 => 5,);
    }
}
