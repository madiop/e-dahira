<?php

/* EdahiraDahiraBundle:Cotisation:etat.html.twig */
class __TwigTemplate_f9fe22fd432f448d261e5cb1686607098befb96a72d19b2748ac4d2527a9fc9c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, "label.cotisation"), array(), "EdahiraDahiraBundle"), "html", null, true);
    }

    // line 16
    public function block_body_header($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if ((twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "typeevenement"), "nom")) == "dahira")) {
            // line 18
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.cotisation.dahira", array("%membre%" => $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "membre"), "affichage")), "EdahiraDahiraBundle"), "html", null, true);
            echo "<small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "date"), "d-m-Y"), "html", null, true);
            echo "</small></h1>
    ";
        } elseif ((twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "typeevenement"), "nom")) == "mensualité")) {
            // line 20
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.cotisation.mensualite", array(), "EdahiraDahiraBundle"), "html", null, true);
            echo " &</h1>
    ";
        }
        // line 22
        echo "
";
    }

    // line 24
    public function block_body_content($context, array $blocks = array())
    {
        // line 25
        echo "
    ";
        // line 26
        $this->displayParentBlock("body_content", $context, $blocks);
        echo "
    
    ";
        // line 28
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "cotisations")) > 0)) {
            // line 29
            echo "        <table class=\"table table-striped table-bordered table-condensed\">
            <thead>
                <tr>
                    <th>";
            // line 32
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("label.nom", array(), "EdahiraDahiraBundle")), "html", null, true);
            echo "</th>
                    <th>";
            // line 33
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("label.cotisation", array(), "EdahiraDahiraBundle")), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "cotisations"));
            foreach ($context['_seq'] as $context["_key"] => $context["cotisation"]) {
                // line 38
                echo "                <tr class=\"list-users\">
                    <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cotisation"]) ? $context["cotisation"] : $this->getContext($context, "cotisation")), "membre"), "affichage"), "html", null, true);
                echo "</td>
                    ";
                // line 40
                if (($this->getAttribute((isset($context["cotisation"]) ? $context["cotisation"] : $this->getContext($context, "cotisation")), "etat") == true)) {
                    // line 41
                    echo "                        <td><span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.done", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo "</span></td>
                    ";
                } else {
                    // line 43
                    echo "                        <td><span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.undone", array(), "EdahiraDahiraBundle"), "html", null, true);
                    echo "</span></td>
                    ";
                }
                // line 45
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cotisation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            </tbody>
        </table>
        
    ";
        } else {
            // line 51
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("text.aucun", array("%objet%" => "membre"), "EdahiraDahiraBundle"), "html", null, true);
            echo "</p>
    ";
        }
        // line 53
        echo "        
    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotisation_editer", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-success\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.edit", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>

    <div class=\"page-header\">
        <h1><small>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.dons", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</small></h1>
    </div>
    <div id=\"dons_id\" style=\"width:45%\">
        ";
        // line 60
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EdahiraDahiraBundle:Don:index", array("type" => 1, "idType" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))));
        echo "
        
        <a id=\"ajouter_don\" href=\"\" class=\"btn btn-success\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ajouter", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>
    </div>

";
    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        // line 68
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
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("don_editer", array("idType" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"), "type" => 1, "id" => null)), "html", null, true);
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
        return "EdahiraDahiraBundle:Cotisation:etat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 75,  186 => 68,  183 => 67,  175 => 62,  170 => 60,  164 => 57,  156 => 54,  153 => 53,  147 => 51,  141 => 47,  134 => 45,  128 => 43,  122 => 41,  120 => 40,  116 => 39,  113 => 38,  109 => 37,  102 => 33,  98 => 32,  93 => 29,  91 => 28,  86 => 26,  83 => 25,  80 => 24,  75 => 22,  69 => 20,  61 => 18,  58 => 17,  55 => 16,  47 => 14,  35 => 6,  32 => 5,);
    }
}
