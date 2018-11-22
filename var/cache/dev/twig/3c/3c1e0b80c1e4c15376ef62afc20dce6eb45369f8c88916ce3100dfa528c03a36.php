<?php

/* AppBundle:layout:nav.html.twig */
class __TwigTemplate_caf2addd5081340f1dfd24fa7ac4f112955704aa57feccdc200ae717a49ac225 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:layout:nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:layout:nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-fixed-top navbar-dark bg-inverse\">
    <a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\" style=\"margin-right: 100px\">Project Formation</a>
    <ul class=\"nav navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Home<span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Produit</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Contact</a>
        </li>
    </ul>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:layout:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-fixed-top navbar-dark bg-inverse\">
    <a class=\"navbar-brand\" href=\"{{ path('app_homepage') }}\" style=\"margin-right: 100px\">Project Formation</a>
    <ul class=\"nav navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Home<span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('product_index') }}\">Produit</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Contact</a>
        </li>
    </ul>
</nav>", "AppBundle:layout:nav.html.twig", "/opt/lampp/htdocs/formation/src/AppBundle/Resources/views/layout/nav.html.twig");
    }
}
