<?php

/* EdahiraDahiraBundle:Charges:details.html.twig */
class __TwigTemplate_40934d0b6b3a9b4aff47fa7664815714ff673e570d10506f314062a1fef7982e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EdahiraDahiraBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body_header' => array($this, 'block_body_header'),
            'body_content' => array($this, 'block_body_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #edahira_dahirabundle_dons_date select{
            width:73px
        }
    </style>
";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.charge"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 16
    public function block_body_header($context, array $blocks = array())
    {
        // line 17
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.versement", array("%objet%" => "charge"), "EdahiraDahiraBundle"), "html", null, true);
        echo "  <small>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "objet"), "html", null, true);
        echo "</small></h1>
";
    }

    // line 20
    public function block_body_content($context, array $blocks = array())
    {
        // line 21
        echo "\t";
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "


\t<b>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.totalverse", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->env->getExtension('EdahiraCharge')->getSoldeCharge((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge"))), "html", null, true);
        echo "</b> FCFA
\t<br/>
\t<br/>

\t";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres"))) > 0)) {
            // line 29
            echo "\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.membre", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.categorie", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.montantverse", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.restant", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
            foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                // line 40
                echo "\t\t\t\t<tr class=\"list-users\">
\t\t\t\t\t<td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "affichage"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "categorie"), "nom"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->env->getExtension('EdahiraCharge')->getMontantCharge((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "categorie")), "html", null, true);
                echo ")</td>
\t\t\t\t\t<td>";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('EdahiraCharge')->getBalanceMembre((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), (isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre"))), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 44
                echo twig_escape_filter($this->env, ($this->env->getExtension('EdahiraCharge')->getMontantCharge((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "categorie")) - $this->env->getExtension('EdahiraCharge')->getBalanceMembre((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), (isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")))), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t\t</tbody>
\t\t</table>
\t\t<br/>
\t\t<span class=\"alert alert-info\"><a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("etats_chargemembre");
            echo "\" title=\"\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.voirdetailparmembre", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo "</a></span>
\t";
        } else {
            // line 52
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.aucun", array("%objet%" => "membre"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</p>
\t";
        }
        // line 54
        echo "
\t<div class=\"page-header\">
        <h1><small>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.dons", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</small></h1>
    </div>
    <div id=\"dons_id\" >
        ";
        // line 59
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EdahiraDahiraBundle:Don:index", array("type" => 2, "idType" => $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "id"))));
        echo "
        
        <a id=\"ajouter_don\" href=\"\" class=\"btn btn-success\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ajouter", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>
    </div>

";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(\"#ajouter_don\").click(function(e){
            /* e.preventDefault(); */
            /* var DATA = \$(this).serialize(); */
            \$.ajax({
                type: \"GET\",
                url: \"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("don_editer", array("idType" => $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "id"), "type" => 2, "id" => null)), "html", null, true);
        echo "\",
             /* data: DATA,*/
                cache: false,
                success: function(data){
                   \$('#dons_id').html(data);
                }
            });    
            return false;
        });
        function editDon(don){
            /* alert(link); */
            \$.ajax({
                type: \"GET\",
                url: don,
                cache: false,
                success: function(data){
                   \$('#dons_id').html(data);
                }
            });    
            return false;
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Charges:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 74,  186 => 67,  183 => 66,  175 => 61,  170 => 59,  164 => 56,  160 => 54,  154 => 52,  147 => 50,  142 => 47,  133 => 44,  129 => 43,  123 => 42,  119 => 41,  116 => 40,  112 => 39,  105 => 35,  101 => 34,  97 => 33,  93 => 32,  88 => 29,  86 => 28,  77 => 24,  70 => 21,  67 => 20,  58 => 17,  55 => 16,  47 => 14,  35 => 6,  32 => 5,);
    }
}
