<?php

/* EdahiraDahiraBundle:Charges:formCharges.html.twig */
class __TwigTemplate_9f4a2ceab2f527a9e6ee6bbcb9e4a34ee6ed58d4341669fc0ccd82e023864fdb extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("charges_editer", array("id" => $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t<fieldset>
\t\t<div class=\"control-group\">
\t\t\t<label class=\"control-label\" for=\"\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet"), 'label');
        echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet"), 'widget');
        echo "
\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet"), 'errors');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t\t\t<label class=\"control-label\" for=\"\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "echeance"), 'label');
        echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "echeance"), 'widget');
        echo "
\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "echeance"), 'errors');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group\">
\t\t\t<label class=\"control-label\" for=\"\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "caisse"), 'label');
        echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "caisse"), 'widget');
        echo "
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "caisse"), 'errors');
        echo "
\t\t\t</div>
\t\t</div>

\t\t";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montants"));
        foreach ($context['_seq'] as $context["_key"] => $context["montant"]) {
            // line 29
            echo "\t\t<div class=\"control-group\">
\t\t\t<label class=\"control-label\" for=\"\">";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montants"), 'label');
            echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t\t";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "categorie"), 'widget');
            echo "
\t\t\t\t";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "categorie"), 'errors');
            echo "
\t\t\t\t";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "montant"), 'widget');
            echo "
\t\t\t\t";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "montant"), 'errors');
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['montant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
\t\t<div class=\"control-group\">
\t\t\t<label class=\"control-label\" for=\"\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat"), 'label');
        echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat"), 'widget');
        echo "
\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat"), 'errors');
        echo "
\t\t\t</div>
\t\t</div>


\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " 

        <div class=\"form-actions\">
\t\t\t<input type=\"submit\" class=\"btn btn-success btn-large\" value=";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enregistrer", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo " />
\t\t\t<a class=\"btn\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "last_route"), "method"), array("id" => $this->getAttribute((isset($context["charge"]) ? $context["charge"] : $this->getContext($context, "charge")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.annuler", array(), "EdahiraDahiraBundle"), "html", null, true);
        echo "</a>
\t\t</div>
\t</fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "EdahiraDahiraBundle:Charges:formCharges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 53,  143 => 52,  137 => 49,  129 => 44,  125 => 43,  120 => 41,  116 => 39,  106 => 35,  102 => 34,  98 => 33,  94 => 32,  89 => 30,  86 => 29,  82 => 28,  75 => 24,  71 => 23,  66 => 21,  59 => 17,  55 => 16,  50 => 14,  43 => 10,  39 => 9,  34 => 7,  28 => 4,  22 => 3,  19 => 2,);
    }
}
