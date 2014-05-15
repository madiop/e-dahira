<?php

/* EdahiraDahiraBundle:Typeevenement:formTypeevenement.html.twig */
class __TwigTemplate_fc863d3c54bd24c4da09a9557c5967d003439e7091d5746ac9716cacc6d140a2 extends Twig_Template
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
<form class=\"form-horizontal\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typeevenement_editer", array("id" => $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <fieldset>
        
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"membre\">";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"membre\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periode"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periode"), 'widget');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periode"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"membre\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "caisse"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "caisse"), 'widget');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "caisse"), 'errors');
        echo "
            </div>
        </div>

    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cotisations"));
        foreach ($context['_seq'] as $context["_key"] => $context["cotisation"]) {
            // line 30
            echo "        <div class=\"control-group\">
            <label class=\"control-label\" for=\"membre\">";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cotisations"), 'label');
            echo "</label>
            <div class=\"controls\">
                ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["cotisation"]) ? $context["cotisation"] : $this->getContext($context, "cotisation")), "categorie"), 'widget');
            echo "
                ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["cotisation"]) ? $context["cotisation"] : $this->getContext($context, "cotisation")), "categorie"), 'errors');
            echo "
                ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["cotisation"]) ? $context["cotisation"] : $this->getContext($context, "cotisation")), "montant"), 'widget');
            echo "
                ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["cotisation"]) ? $context["cotisation"] : $this->getContext($context, "cotisation")), "montant"), 'errors');
            echo "
            </div>
        </div>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cotisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"membre\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jourdesemaine"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jourdesemaine"), 'widget');
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jourdesemaine"), 'errors');
        echo "
            </div>
        </div>
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " 

        <div class=\"form-actions\">
            <input type=\"submit\" class=\"btn btn-success btn-large\" value=";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enregistrer", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo " />
            <a class=\"btn\" href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "last_route"), "method"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.annuler", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>
        </div>
    </fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Typeevenement:formTypeevenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 53,  143 => 52,  137 => 49,  131 => 46,  127 => 45,  122 => 43,  118 => 41,  107 => 36,  103 => 35,  99 => 34,  95 => 33,  90 => 31,  87 => 30,  83 => 29,  76 => 25,  72 => 24,  67 => 22,  60 => 18,  56 => 17,  51 => 15,  44 => 11,  40 => 10,  35 => 8,  28 => 4,  22 => 3,  19 => 2,);
    }
}
