<?php

/* AppBundle:product:index.html.twig */
class __TwigTemplate_7415afb90e6fc633e7f6779e0461a72f8e9cc9175f66ee57ecdab9204f65a3c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:product:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Products list</h1>
    <br>
    <select class=\"filter-category\">
        <option value=\"all\">All</option>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorys"] ?? $this->getContext($context, "categorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 9
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
            echo "\" ";
            if ((($context["category"] ?? $this->getContext($context, "category")) == $this->getAttribute($context["cat"], "name", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </select>
    <br>
    <div id=\"block-message\"></div>
    <br>
    <table border=\"1\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Qte</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"data-product-table\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 28
            echo "                <tr id=\"block-content-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\">
                    <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "qte", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            if ($this->getAttribute($context["product"], "categorie", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "categorie", array()), "name", array()), "html", null, true);
                echo " ";
            } else {
                echo " --- ";
            }
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                            <li>
                                ";
            // line 44
            echo "                                <a href data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\" class=\"delete-product\">delete</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_new");
        echo "\">Create a new product</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function deleteProduct(id) {
        ";
        // line 64
        echo "                console.log(id);
            }

            \$('.delete-product').on('click', function (e) {
                e.preventDefault();
                var id = \$(this).data('id');
                if (confirm('Voulez vous supprimez le produit avec l\\'id ' + id)) {
                    \$.ajax({
                        url: Routing.generate(\"product_remove\", {id: id}),
                        method: \"DELETE\",
                        data: {},
                        success: function (result) {
        ";
        // line 77
        echo "                            \$('#block-message').html(result);
                            \$('#block-content-' + id).remove();
                        },
                        error: function (error) {

                        }
                    });
                }
            });

        ";
        // line 90
        echo "            \$('.filter-category').on('change', function () {
                \$.ajax({
                    url: Routing.generate('product_index_json', {category: \$('.filter-category').val()}),
                    method: \"POST\",
                    data: {},
                    success: function (result) {
                        var data = '';
                        for (var i = 0; i < result.length; i++) {
                            var produit = result[i];
                            var html = '<tr id=\"block-content-' + produit.id + '\">' +
                                    '<td><a href=\"' + Routing.generate('product_show', {'id': produit.id}) + '\">' + produit.id + '</a></td>' +
                                    '<td>' + produit.name + '</td>' +
                                    '<td>' + produit.price + '</td>' +
                                    '<td>' + produit.qte + '</td>' +
                                    '<td>' + produit.categorie.name + '</td>' +
                                    '<td>' +
                                    '<ul>' +
                                    '<li>' +
                                    '<a href=\"' + Routing.generate('product_show', {'id': produit.id}) + '\">show</a>' +
                                    '</li>' +
                                    '<li>' +
                                    '<a href=\"' + Routing.generate('product_edit', {'id': produit.id}) + '\">edit</a>' +
                                    '</li>' +
                                    '<li>' +
                                    '<a href data-id=\"' + produit.id + '\" class=\"delete-product\">delete</a>' +
                                    '</li>' +
                                    '</ul>' +
                                    '</td>' +
                                    '</tr>';
                            data += html;
                        }
                        
                            \$('#data-product-table tr').remove();
                            \$('#data-product-table').append(data);
                    }
                });
            });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 90,  208 => 77,  194 => 64,  187 => 60,  178 => 59,  164 => 54,  158 => 50,  145 => 44,  139 => 40,  133 => 37,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  102 => 29,  97 => 28,  93 => 27,  75 => 11,  60 => 9,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::base.html.twig' %}

{% block body %}
    <h1>Products list</h1>
    <br>
    <select class=\"filter-category\">
        <option value=\"all\">All</option>
        {% for cat in categorys %}
            <option value=\"{{ cat.name }}\" {% if category == cat.name %}selected{% endif %}>{{ cat.name }}</option>
        {% endfor %}
    </select>
    <br>
    <div id=\"block-message\"></div>
    <br>
    <table border=\"1\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Qte</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"data-product-table\">
            {% for product in products %}
                <tr id=\"block-content-{{ product.id }}\">
                    <td><a href=\"{{ path('product_show', { 'id': product.id }) }}\">{{ product.id }}</a></td>
                    <td>{{ product.name }}</td>
                    <td>{{ product.price }}</td>
                    <td>{{ product.qte }}</td>
                    <td>{% if product.categorie %} {{ product.categorie.name }} {% else %} --- {% endif %}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('product_show', { 'id': product.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('product_edit', { 'id': product.id }) }}\">edit</a>
                            </li>
                            <li>
                                {#                                <a href=\"#\" onclick=\"deleteProduct('{{ product.id }}')\">delete</a>#}
                                <a href data-id=\"{{ product.id }}\" class=\"delete-product\">delete</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"{{ path('product_new') }}\">Create a new product</a>
        </li>
    </ul>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        function deleteProduct(id) {
        {#            alert(id);#}
                console.log(id);
            }

            \$('.delete-product').on('click', function (e) {
                e.preventDefault();
                var id = \$(this).data('id');
                if (confirm('Voulez vous supprimez le produit avec l\\'id ' + id)) {
                    \$.ajax({
                        url: Routing.generate(\"product_remove\", {id: id}),
                        method: \"DELETE\",
                        data: {},
                        success: function (result) {
        {#                            location.reload();#}
                            \$('#block-message').html(result);
                            \$('#block-content-' + id).remove();
                        },
                        error: function (error) {

                        }
                    });
                }
            });

        {#\$('.filter-category').on('change', function (){
            window.location.replace(Routing.generate('product_index', {category: \$('.filter-category').val()}));
        });#}
            \$('.filter-category').on('change', function () {
                \$.ajax({
                    url: Routing.generate('product_index_json', {category: \$('.filter-category').val()}),
                    method: \"POST\",
                    data: {},
                    success: function (result) {
                        var data = '';
                        for (var i = 0; i < result.length; i++) {
                            var produit = result[i];
                            var html = '<tr id=\"block-content-' + produit.id + '\">' +
                                    '<td><a href=\"' + Routing.generate('product_show', {'id': produit.id}) + '\">' + produit.id + '</a></td>' +
                                    '<td>' + produit.name + '</td>' +
                                    '<td>' + produit.price + '</td>' +
                                    '<td>' + produit.qte + '</td>' +
                                    '<td>' + produit.categorie.name + '</td>' +
                                    '<td>' +
                                    '<ul>' +
                                    '<li>' +
                                    '<a href=\"' + Routing.generate('product_show', {'id': produit.id}) + '\">show</a>' +
                                    '</li>' +
                                    '<li>' +
                                    '<a href=\"' + Routing.generate('product_edit', {'id': produit.id}) + '\">edit</a>' +
                                    '</li>' +
                                    '<li>' +
                                    '<a href data-id=\"' + produit.id + '\" class=\"delete-product\">delete</a>' +
                                    '</li>' +
                                    '</ul>' +
                                    '</td>' +
                                    '</tr>';
                            data += html;
                        }
                        
                            \$('#data-product-table tr').remove();
                            \$('#data-product-table').append(data);
                    }
                });
            });
    </script>
{% endblock %}
", "AppBundle:product:index.html.twig", "/opt/lampp/htdocs/formation/src/AppBundle/Resources/views/product/index.html.twig");
    }
}
