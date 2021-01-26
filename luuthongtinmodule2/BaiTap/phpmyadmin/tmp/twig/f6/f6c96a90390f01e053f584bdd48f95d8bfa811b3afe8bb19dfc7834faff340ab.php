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

/* table/operations/View.twig */
class __TwigTemplate_910b6032be3cd9abb0fd3ca3c4ac79bc6d759f1273e90af3497980cf26bc70fe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- VIEW operations -->
<div>
    <form method=\"post\" action=\"view_operations.php\">
        ";
        // line 4
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
        <input type=\"hidden\" name=\"reload\" value=\"1\">
        <fieldset>
            <legend>";
        // line 7
        echo _gettext("Operations");
        echo "</legend>
            <table>
                <!-- Change View name -->
                <tr>
                    <td>";
        // line 11
        echo _gettext("Rename View to");
        echo "</td>
                    <td><input type=\"text\" name=\"new_name\" onfocus=\"this.select()\"
                               value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true);
        echo "\"
                               required>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset class=\"tblFooters\">
            <input type=\"hidden\" name=\"submitoptions\" value=\"1\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 21
        echo _gettext("Go");
        echo "\">
        </fieldset>
    </form>
</div>

<div>
    <fieldset class=\"caution\">
        <legend>";
        // line 28
        echo _gettext("Delete data or table");
        echo "</legend>
        <ul>";
        // line 29
        echo ($context["delete_data_or_table_link"] ?? null);
        echo "</ul>
    </fieldset>
</div>
";
    }

    public function getTemplateName()
    {
        return "table/operations/View.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  81 => 28,  71 => 21,  60 => 13,  55 => 11,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/operations/View.twig", "/Users/lananh/Sites/phpmyadmin/templates/table/operations/View.twig");
    }
}
