<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* modules/contrib/dxpr_builder/templates/dxpr-license-info.html.twig */
class __TwigTemplate_06053df3675b596d0c54f26a928a94bd extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "<div class=\"user-licenses\">
  <div class=\"user-licenses__title\">
    ";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["block_label"] ?? null), "html", null, true);
        yield "
    ";
        // line 19
        if (($context["more_info_link"] ?? null)) {
            // line 20
            yield "      <a class=\"user-licenses__title--more-link\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["more_info_link"] ?? null), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("User licenses dashboard"));
            yield "</a>
    ";
        }
        // line 22
        yield "  </div>
  <div class=\"user-licenses__stats\">
    <div class=\"user-licenses__stats--users\">
      <span class=\"user-licenses__stats--users-number\">";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["total_count"] ?? null), "html", null, true);
        yield "</span>
      <span class=\"user-licenses__stats--users-label\">
          ";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["total_label"] ?? null), "html", null, true);
        yield "
        </span>
    </div>
    <div class=\"user-licenses__stats--seats\">
      <span class=\"user-licenses__stats--seats-number\">
        ";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["used_count"] ?? null), "html", null, true);
        yield "/";
        if (($context["limit"] ?? null)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["limit"] ?? null), "html", null, true);
        } else {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("unlimited"));
        }
        // line 33
        yield "      </span>
      <span class=\"user-licenses__stats--seats-label\">
          ";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["used_label"] ?? null), "html", null, true);
        yield "
        </span>
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["block_label", "more_info_link", "total_count", "total_label", "used_count", "limit", "used_label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/dxpr_builder/templates/dxpr-license-info.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  92 => 35,  88 => 33,  80 => 32,  72 => 27,  67 => 25,  62 => 22,  54 => 20,  52 => 19,  48 => 18,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/dxpr_builder/templates/dxpr-license-info.html.twig", "/var/www/html/mssrfwebsite/web/modules/contrib/dxpr_builder/templates/dxpr-license-info.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("escape" => 18, "t" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
