<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* articles/mesarticles.html.twig */
class __TwigTemplate_a9c920d93570ec8760b8e02ea046b132015692b5d9198bdc69816010bacbdd7e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/mesarticles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/mesarticles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/mesarticles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Articles";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .tab{ padding: 100px; }
    .tab2{
  padding-left: 200px;
  position: relative;
}
.typeUser{
  color: red;
}
</style>

    <div class=\"tab\"><div class=\"tab2\">
    <div><h2>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "email", [], "any", false, false, false, 23), "html", null, true);
        echo "</h2><h3 class=\"typeUser\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "type", [], "any", false, false, false, 23), "html", null, true);
        echo "</h3></div>
    ";
        // line 24
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "type", [], "any", false, false, false, 24), "vendeur"))) {
            // line 25
            echo "        <a type=\"button\" class=\"btn btn btn-outline-secondary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesarticles");
            echo "\">mes articles</a> <br>  
    ";
        }
        // line 27
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send");
        echo "\" class=\"btn btn btn-outline-secondary\">Envoyer un message</a>
    <a type=\"button\" class=\"btn btn-outline-secondary\" href=\"/article/new\">Ajouter un article</a>
    </div><h1 >&darr; Liste des Articles &darr;</h1>
    
<table class=\"blue\">
  <thead>
    <tr>
      <th scope=\"col\">ID</th>
      <th scope=\"col\">Titre</th>
      <th scope=\"col\">Article de</th>
      <th scope=\"col\">Prix</th>
      <th scope=\"col\">Image</th>
      <th scope=\"col\">Publié le</th>
      ";
        // line 41
        echo "      <th scope=\"col\">info</th>
      ";
        // line 43
        echo "      ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "type", [], "any", false, false, false, 43), "vendeur"))) {
            // line 44
            echo "      <th scope=\"col\">Action</th>
      ";
        }
        // line 46
        echo "    </tr>
  </thead>
  <tbody>
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 50
            echo "    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "type", [], "any", false, false, false, 50), "vendeur"))) {
                // line 51
                echo "      ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "getUsers", [], "method", false, false, false, 51), "id", [], "any", false, false, false, 51)))) {
                    // line 52
                    echo "          <tr>
            <th scope=\"row\"> ";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 53), "html", null, true);
                    echo " </th>
            <td>
              ";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 55), "html", null, true);
                    echo " 
            </td>
            <td> 
              ";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "getUsers", [], "method", false, false, false, 58), "email", [], "any", false, false, false, 58), "html", null, true);
                    echo " 
            </td>
            <td>
            ";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 61), "html", null, true);
                    echo " 
            </td>
            ";
                    // line 64
                    echo "            <td>
              <img class=\"card\" style=\"width: 10rem;\" src=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/img/" . twig_get_attribute($this->env, $this->source, $context["article"], "getImagesProduct", [], "any", false, false, false, 65))), "html", null, true);
                    echo "\"/>
            </td> 
            <td>
              ";
                    // line 68
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getCreatedAt", [], "any", false, false, false, 68)), "html", null, true);
                    echo " 
            </td>
            <td>
              ";
                    // line 72
                    echo "                <a type=\"button\" class=\"btn btn-info\" href=\"/article/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 72), "html", null, true);
                    echo "\">Voir mon article</a>
            </td> 
            <td>
              ";
                    // line 76
                    echo "              ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "type", [], "any", false, false, false, 76), "vendeur"))) {
                        // line 77
                        echo "                <a type=\"button\" class=\"btn btn-outline-secondary\" href=\"/article/modifier/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 77), "html", null, true);
                        echo "\">Modifier</a>
                <a type=\"button\" class=\"btn btn-outline-secondary\" href=\"/deletearticle/";
                        // line 78
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 78), "html", null, true);
                        echo "\">Suprimer</a>
              ";
                    }
                    // line 80
                    echo "            </td>
          </tr> 
          ";
                }
                // line 83
                echo "        ";
            }
            // line 84
            echo "        

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "  </tbody>
</table>
<br><br>
</div>

<div class=\"position-absolute top-100 start-50 translate-middle\">
<nav><ul>
";
        // line 94
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 94, $this->source); })()));
        echo "</ul>
</nav>
<br>        hello

© 2010–2021 | Hamza Ed-diouri
</div>

<script
  src=\"https://code.jquery.com/jquery-3.6.0.slim.js\"
  integrity=\"sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=\"
  crossorigin=\"anonymous\"></script>
<script>
;(function(\$) {
   \$.fn.fixMe = function() {
      return this.each(function() {
         var \$this = \$(this),
            \$t_fixed;
         function init() {
            \$this.wrap('<div class=\"container\" />');
            \$t_fixed = \$this.clone();
            \$t_fixed.find(\"tbody\").remove().end().addClass(\"fixed\").insertBefore(\$this);
            resizeFixed();
         }
         function resizeFixed() {
            \$t_fixed.find(\"th\").each(function(index) {
               \$(this).css(\"width\",\$this.find(\"th\").eq(index).outerWidth()+\"px\");
            });
         }
         function scrollFixed() {
            var offset = \$(this).scrollTop(),
            tableOffsetTop = \$this.offset().top,
            tableOffsetBottom = tableOffsetTop + \$this.height() - \$this.find(\"thead\").height();
            if(offset < tableOffsetTop || offset > tableOffsetBottom)
               \$t_fixed.hide();
            else if(offset >= tableOffsetTop && offset <= tableOffsetBottom && \$t_fixed.is(\":hidden\"))
               \$t_fixed.show();
         }
         \$(window).resize(resizeFixed);
         \$(window).scroll(scrollFixed);
         init();
      });
   };
})(jQuery);

\$(document).ready(function(){
   \$(\"table\").fixMe();
   \$(\".up\").click(function() {
      \$('html, body').animate({
      scrollTop: 0
   }, 2000);
 });
});
</script>
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .tab{ padding: 100px; }

    body{
  font:1.2em normal Arial,sans-serif;
  color:#34495E;
}

h1{
  text-align:center;
  text-transform:uppercase;
  letter-spacing:-2px;
  font-size:2.5em;
  margin:20px 0;
}

.container{
  width:90%;
  margin:auto;
}

table{
  border-collapse:collapse;
  width:100%;
}

.blue{
  border:2px solid #1ABC9C;
}

.blue thead{
  background:#1ABC9C;
}

.purple{
  border:2px solid #9B59B6;
}

.purple thead{
  background:#9B59B6;
}

thead{
  color:white;
}

th,td{
  text-align:center;
  padding:5px 0;
}

tbody tr:nth-child(even){
  background:#ECF0F1;
}

tbody tr:hover{
background:#BDC3C7;
  color:#FFFFFF;
}

.fixed{
  top:0;
  position:fixed;
  width:auto;
  display:none;
  border:none;
}

.scrollMore{
  margin-top:600px;
}

.up{
  cursor:pointer;
}
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "articles/mesarticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 94,  236 => 87,  228 => 84,  225 => 83,  220 => 80,  215 => 78,  210 => 77,  207 => 76,  200 => 72,  194 => 68,  188 => 65,  185 => 64,  180 => 61,  174 => 58,  168 => 55,  163 => 53,  160 => 52,  157 => 51,  154 => 50,  150 => 49,  145 => 46,  141 => 44,  138 => 43,  135 => 41,  118 => 27,  112 => 25,  110 => 24,  104 => 23,  88 => 9,  78 => 8,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Articles{% endblock %}


{# dump(Auth::user()) #}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .tab{ padding: 100px; }
    .tab2{
  padding-left: 200px;
  position: relative;
}
.typeUser{
  color: red;
}
</style>

    <div class=\"tab\"><div class=\"tab2\">
    <div><h2>{{app.user.email}}</h2><h3 class=\"typeUser\">{{app.user.type}}</h3></div>
    {% if app.user.type == \"vendeur\" %}
        <a type=\"button\" class=\"btn btn btn-outline-secondary\" href=\"{{ path(\"mesarticles\") }}\">mes articles</a> <br>  
    {% endif %}
    <a href=\"{{path(\"send\")}}\" class=\"btn btn btn-outline-secondary\">Envoyer un message</a>
    <a type=\"button\" class=\"btn btn-outline-secondary\" href=\"/article/new\">Ajouter un article</a>
    </div><h1 >&darr; Liste des Articles &darr;</h1>
    
<table class=\"blue\">
  <thead>
    <tr>
      <th scope=\"col\">ID</th>
      <th scope=\"col\">Titre</th>
      <th scope=\"col\">Article de</th>
      <th scope=\"col\">Prix</th>
      <th scope=\"col\">Image</th>
      <th scope=\"col\">Publié le</th>
      {#{% if app.user.type == \"client\" %}#}
      <th scope=\"col\">info</th>
      {#{% endif %}#}
      {% if app.user.type == \"vendeur\" %}
      <th scope=\"col\">Action</th>
      {% endif %}
    </tr>
  </thead>
  <tbody>
    {% for article in articles %}
    {% if app.user.type == \"vendeur\" %}
      {% if app.user.id == article.getUsers().id %}
          <tr>
            <th scope=\"row\"> {{ article.id }} </th>
            <td>
              {{ article.titre }} 
            </td>
            <td> 
              {{ article.getUsers().email }} 
            </td>
            <td>
            {{ article.prix }} 
            </td>
            {# <td> <img src=\"img/{{ article.images_product }}\" alt=\"image du produit {{ article.titre }}\" class=\"img-thumbnail\">  </td>#}
            <td>
              <img class=\"card\" style=\"width: 10rem;\" src=\"{{ asset('/img/'~article.getImagesProduct) }}\"/>
            </td> 
            <td>
              {{ article.getCreatedAt|date }} 
            </td>
            <td>
              {#{% if app.user.type == \"client\" %}#}
                <a type=\"button\" class=\"btn btn-info\" href=\"/article/{{ article.slug }}\">Voir mon article</a>
            </td> 
            <td>
              {#{% endif %}#}
              {% if app.user.type == \"vendeur\" %}
                <a type=\"button\" class=\"btn btn-outline-secondary\" href=\"/article/modifier/{{ article.id }}\">Modifier</a>
                <a type=\"button\" class=\"btn btn-outline-secondary\" href=\"/deletearticle/{{ article.id }}\">Suprimer</a>
              {% endif %}
            </td>
          </tr> 
          {% endif %}
        {% endif %}
        

    {% endfor %}
  </tbody>
</table>
<br><br>
</div>

<div class=\"position-absolute top-100 start-50 translate-middle\">
<nav><ul>
{{ knp_pagination_render(articles) }}</ul>
</nav>
<br>        hello

© 2010–2021 | Hamza Ed-diouri
</div>

<script
  src=\"https://code.jquery.com/jquery-3.6.0.slim.js\"
  integrity=\"sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=\"
  crossorigin=\"anonymous\"></script>
<script>
;(function(\$) {
   \$.fn.fixMe = function() {
      return this.each(function() {
         var \$this = \$(this),
            \$t_fixed;
         function init() {
            \$this.wrap('<div class=\"container\" />');
            \$t_fixed = \$this.clone();
            \$t_fixed.find(\"tbody\").remove().end().addClass(\"fixed\").insertBefore(\$this);
            resizeFixed();
         }
         function resizeFixed() {
            \$t_fixed.find(\"th\").each(function(index) {
               \$(this).css(\"width\",\$this.find(\"th\").eq(index).outerWidth()+\"px\");
            });
         }
         function scrollFixed() {
            var offset = \$(this).scrollTop(),
            tableOffsetTop = \$this.offset().top,
            tableOffsetBottom = tableOffsetTop + \$this.height() - \$this.find(\"thead\").height();
            if(offset < tableOffsetTop || offset > tableOffsetBottom)
               \$t_fixed.hide();
            else if(offset >= tableOffsetTop && offset <= tableOffsetBottom && \$t_fixed.is(\":hidden\"))
               \$t_fixed.show();
         }
         \$(window).resize(resizeFixed);
         \$(window).scroll(scrollFixed);
         init();
      });
   };
})(jQuery);

\$(document).ready(function(){
   \$(\"table\").fixMe();
   \$(\".up\").click(function() {
      \$('html, body').animate({
      scrollTop: 0
   }, 2000);
 });
});
</script>
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .tab{ padding: 100px; }

    body{
  font:1.2em normal Arial,sans-serif;
  color:#34495E;
}

h1{
  text-align:center;
  text-transform:uppercase;
  letter-spacing:-2px;
  font-size:2.5em;
  margin:20px 0;
}

.container{
  width:90%;
  margin:auto;
}

table{
  border-collapse:collapse;
  width:100%;
}

.blue{
  border:2px solid #1ABC9C;
}

.blue thead{
  background:#1ABC9C;
}

.purple{
  border:2px solid #9B59B6;
}

.purple thead{
  background:#9B59B6;
}

thead{
  color:white;
}

th,td{
  text-align:center;
  padding:5px 0;
}

tbody tr:nth-child(even){
  background:#ECF0F1;
}

tbody tr:hover{
background:#BDC3C7;
  color:#FFFFFF;
}

.fixed{
  top:0;
  position:fixed;
  width:auto;
  display:none;
  border:none;
}

.scrollMore{
  margin-top:600px;
}

.up{
  cursor:pointer;
}
</style>
{% endblock %}", "articles/mesarticles.html.twig", "C:\\wamp64\\www\\TPwaveV1principale\\templates\\articles\\mesarticles.html.twig");
    }
}
