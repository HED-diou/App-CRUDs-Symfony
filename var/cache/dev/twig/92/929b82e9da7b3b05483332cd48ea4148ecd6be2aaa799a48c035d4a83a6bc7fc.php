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

/* messages/sent.html.twig */
class __TwigTemplate_8a8bafa001abb4e30cf33f0c88804ced6081b9c22328ace18447f3be5006d484 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/sent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/sent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "messages/sent.html.twig", 1);
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

        echo "Messagerie
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<section class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>Messagerie</h1>
\t\t\t\t<h2>Eléments envoyés</h2>
\t\t\t\t<p>Vous avez envoyé
\t\t\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "sent", [], "any", false, false, false, 13)), "html", null, true);
        echo "
\t\t\t\t\tmessages</p>
\t\t\t</div>
\t\t\t<div class=\"col-3\">De</div>
\t\t\t<div class=\"col-3\">Sujet</div>
\t\t\t<div class=\"col-3\">Date</div>
\t\t\t<div class=\"col-3\">Actions</div>
\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "sent", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "\t\t\t\t";
            $context["bold"] = "";
            // line 22
            echo "\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["message"], "isRead", [], "any", false, false, false, 22), 0))) {
                // line 23
                echo "\t\t\t\t\t";
                $context["bold"] = "fw-bold";
                // line 24
                echo "\t\t\t\t";
            }
            // line 25
            echo "
\t\t\t\t<div class=\"col-3 ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["bold"]) || array_key_exists("bold", $context) ? $context["bold"] : (function () { throw new RuntimeError('Variable "bold" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 26), "email", [], "any", false, false, false, 26), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"col-3 ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["bold"]) || array_key_exists("bold", $context) ? $context["bold"] : (function () { throw new RuntimeError('Variable "bold" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "\">
\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("read", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-3 ";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["bold"]) || array_key_exists("bold", $context) ? $context["bold"] : (function () { throw new RuntimeError('Variable "bold" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 30)), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"col-3\">
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-excel-fill text-danger\" viewbox=\"0 0 16 16\">
                            <path d=\"M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5.884 4.68L8 7.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 8l2.233 2.68a.5.5 0 0 1-.768.64L8 8.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 8 5.116 5.32a.5.5 0 1 1 .768-.64z\"/>
                        </svg>
                    </a>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "

\t\t\t<div class=\"col\">
\t\t\t\t<a class=\"btn btn-primary\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample\" role=\"button\" aria-controls=\"offcanvasExample\">
\t\t\t\t\tVoir mes dossiers
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send");
        echo "\" class=\"btn btn-primary\">Envoyer un message</a>
\t\t\t</div>
\t\t</div>
\t</section>
\t<div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"offcanvasExample\" aria-labelledby=\"offcanvasExampleLabel\">
\t\t<div class=\"offcanvas-header\">
\t\t\t<h2 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">Mes dossiers</h2>
\t\t\t<button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t\t</div>
\t\t<div class=\"offcanvas-body\">
\t\t\t<div class=\"list-group\">
\t\t\t\t<a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages");
        echo "\" class=\"list-group-item list-group-item-action\">Accueil</a>
\t\t\t</div>
\t\t\t<div class=\"list-group\">
\t\t\t\t<a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("received");
        echo "\" class=\"list-group-item list-group-item-action\">Boîte de réception</a>
\t\t\t</div>
\t\t\t<div class=\"list-group\">
\t\t\t\t<a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sent");
        echo "\" class=\"list-group-item list-group-item-action active\">Eléments envoyés</a>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "messages/sent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 62,  191 => 59,  185 => 56,  171 => 45,  163 => 39,  150 => 32,  143 => 30,  136 => 28,  132 => 27,  126 => 26,  123 => 25,  120 => 24,  117 => 23,  114 => 22,  111 => 21,  107 => 20,  97 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Messagerie
{% endblock %}

{% block body %}
\t<section class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>Messagerie</h1>
\t\t\t\t<h2>Eléments envoyés</h2>
\t\t\t\t<p>Vous avez envoyé
\t\t\t\t\t{{ app.user.sent|length }}
\t\t\t\t\tmessages</p>
\t\t\t</div>
\t\t\t<div class=\"col-3\">De</div>
\t\t\t<div class=\"col-3\">Sujet</div>
\t\t\t<div class=\"col-3\">Date</div>
\t\t\t<div class=\"col-3\">Actions</div>
\t\t\t{% for message in app.user.sent %}
\t\t\t\t{% set bold = \"\" %}
\t\t\t\t{% if message.isRead == 0 %}
\t\t\t\t\t{% set bold = \"fw-bold\" %}
\t\t\t\t{% endif %}

\t\t\t\t<div class=\"col-3 {{bold}}\">{{ message.sender.email }}</div>
\t\t\t\t<div class=\"col-3 {{bold}}\">
\t\t\t\t\t<a href=\"{{ path(\"read\", {id: message.id}) }}\">{{ message.title }}</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-3 {{bold}}\">{{ message.createdAt|date }}</div>
\t\t\t\t<div class=\"col-3\">
                    <a href=\"{{ path(\"delete\", {id: message.id}) }}\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-file-excel-fill text-danger\" viewbox=\"0 0 16 16\">
                            <path d=\"M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5.884 4.68L8 7.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 8l2.233 2.68a.5.5 0 0 1-.768.64L8 8.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 8 5.116 5.32a.5.5 0 1 1 .768-.64z\"/>
                        </svg>
                    </a>
\t\t\t\t</div>
\t\t\t{% endfor %}


\t\t\t<div class=\"col\">
\t\t\t\t<a class=\"btn btn-primary\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample\" role=\"button\" aria-controls=\"offcanvasExample\">
\t\t\t\t\tVoir mes dossiers
\t\t\t\t</a>
\t\t\t\t<a href=\"{{path(\"send\")}}\" class=\"btn btn-primary\">Envoyer un message</a>
\t\t\t</div>
\t\t</div>
\t</section>
\t<div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"offcanvasExample\" aria-labelledby=\"offcanvasExampleLabel\">
\t\t<div class=\"offcanvas-header\">
\t\t\t<h2 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">Mes dossiers</h2>
\t\t\t<button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t\t</div>
\t\t<div class=\"offcanvas-body\">
\t\t\t<div class=\"list-group\">
\t\t\t\t<a href=\"{{ path(\"messages\") }}\" class=\"list-group-item list-group-item-action\">Accueil</a>
\t\t\t</div>
\t\t\t<div class=\"list-group\">
\t\t\t\t<a href=\"{{ path(\"received\") }}\" class=\"list-group-item list-group-item-action\">Boîte de réception</a>
\t\t\t</div>
\t\t\t<div class=\"list-group\">
\t\t\t\t<a href=\"{{ path(\"sent\") }}\" class=\"list-group-item list-group-item-action active\">Eléments envoyés</a>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "messages/sent.html.twig", "C:\\wamp64\\www\\TPwaveV1principale\\templates\\messages\\sent.html.twig");
    }
}
