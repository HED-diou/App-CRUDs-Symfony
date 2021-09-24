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

/* articles/index.html.twig */
class __TwigTemplate_80a38841c1d2e026d693be09d8da45cd10d7ff3ab2359a9cf222358d49372baf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
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
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "email", [], "any", false, false, false, 97), "html", null, true);
        echo "</h2><h3 class=\"typeUser\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "type", [], "any", false, false, false, 97), "html", null, true);
        echo "</h3></div>
    ";
        // line 98
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "type", [], "any", false, false, false, 98), "vendeur"))) {
            // line 99
            echo "        <a type=\"button\" class=\"btn btn btn-outline-secondary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesarticles");
            echo "\">mes articles</a> <br>  
    ";
        }
        // line 101
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send");
        echo "\" class=\"btn btn btn-outline-secondary\">Envoyer un message</a>
    </div><h1 >&darr; Liste des Articles &darr;</h1>
<table class=\"blue\">
  <thead>
    <tr>
      <th >#</th>
      <th >Titre</th>
      <th >Article de</th>
      <th >Prix</th>
      <th >Image</th>
      <th >Publié le</th>
      ";
        // line 113
        echo "      <th >info</th>
      ";
        // line 115
        echo "      
    </tr>
  </thead>
  <tbody>
    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 120
            echo "
        
          <tr>
            <th scope=\"row\"> ";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 123), "html", null, true);
            echo " </th>
            <td>
              ";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 125), "html", null, true);
            echo " 
            </td>
            <td> 
              ";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 128), "html", null, true);
            echo " 
            </td>
            <td>
            ";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 131), "html", null, true);
            echo " DH
            </td>
            ";
            // line 134
            echo "            <td>
              <img class=\"card\" style=\"width: 10rem;\" src=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/img/" . twig_get_attribute($this->env, $this->source, $context["article"], "getImagesProduct", [], "any", false, false, false, 135))), "html", null, true);
            echo "\"/>
            </td> 
            <td>
            ";
            // line 138
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getCreatedAt", [], "any", false, false, false, 138)), "html", null, true);
            echo " 
          </td>
            <td>
              
                <a type=\"button\" class=\"btn btn-outline-success\" href=\"/article/";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 142), "html", null, true);
            echo "\">Plus d'Info</a>
              
            </td>
          </tr> 
        

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "  </tbody>
</table>
<br><br>
<div class=\"bottom-0 end-0\">
<nav><ul>
";
        // line 154
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 154, $this->source); })()));
        echo "</ul>
</nav>
<br>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 154,  276 => 149,  263 => 142,  256 => 138,  250 => 135,  247 => 134,  242 => 131,  236 => 128,  230 => 125,  225 => 123,  220 => 120,  216 => 119,  210 => 115,  207 => 113,  192 => 101,  186 => 99,  184 => 98,  178 => 97,  88 => 9,  78 => 8,  59 => 3,  36 => 1,);
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
    </div><h1 >&darr; Liste des Articles &darr;</h1>
<table class=\"blue\">
  <thead>
    <tr>
      <th >#</th>
      <th >Titre</th>
      <th >Article de</th>
      <th >Prix</th>
      <th >Image</th>
      <th >Publié le</th>
      {#{% if app.user.type == \"client\" %}#}
      <th >info</th>
      {#{% endif %}#}
      
    </tr>
  </thead>
  <tbody>
    {% for article in articles %}

        
          <tr>
            <th scope=\"row\"> {{ article.id }} </th>
            <td>
              {{ article.titre }} 
            </td>
            <td> 
              {{ article.slug }} 
            </td>
            <td>
            {{ article.prix }} DH
            </td>
            {# <td> <img src=\"img/{{ article.images_product }}\" alt=\"image du produit {{ article.titre }}\" class=\"img-thumbnail\">  </td>#}
            <td>
              <img class=\"card\" style=\"width: 10rem;\" src=\"{{ asset('/img/'~article.getImagesProduct) }}\"/>
            </td> 
            <td>
            {{ article.getCreatedAt|date }} 
          </td>
            <td>
              
                <a type=\"button\" class=\"btn btn-outline-success\" href=\"/article/{{ article.slug }}\">Plus d'Info</a>
              
            </td>
          </tr> 
        

    {% endfor %}
  </tbody>
</table>
<br><br>
<div class=\"bottom-0 end-0\">
<nav><ul>
{{ knp_pagination_render(articles) }}</ul>
</nav>
<br>
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
{% endblock %}", "articles/index.html.twig", "C:\\wamp64\\www\\TPwaveV1principale\\templates\\articles\\index.html.twig");
    }
}
