<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_946a674c07eeb474e46a3cce541e4582b31321f9e3024dc506b52823484a43a8 extends Twig_Template
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
        // line 1
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-minitoolbar\">
        <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
                document.getElementById('sfToolbarMainContent-";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                document.getElementById('sfToolbarClearer-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                elem.style.display = 'block';
            } else {
                document.getElementById('sfToolbarMainContent-";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                document.getElementById('sfToolbarClearer-";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                elem.style.display = 'none'
            }

            Sfjs.setPreference('toolbar/displayState', 'block');
        \">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\">
        </a>
    </div>
    <style>
        ";
            // line 22
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "floatable" => true)));
            // line 23
            echo "    </style>
    <div id=\"sfToolbarClearer-";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 26
        echo "
<div id=\"sfToolbarMainContent-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset\">
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "profiler_url" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "token" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token"), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 38
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 39
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
            Sfjs.setPreference('toolbar/displayState', 'none');
        \"></a>
    ";
        }
        // line 47
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  350 => 327,  308 => 287,  462 => 202,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 164,  373 => 156,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  325 => 129,  323 => 128,  320 => 127,  298 => 120,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 87,  226 => 84,  220 => 81,  207 => 75,  200 => 72,  181 => 65,  150 => 55,  81 => 23,  53 => 12,  63 => 18,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 462,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  517 => 404,  165 => 60,  153 => 56,  84 => 24,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  358 => 151,  355 => 329,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  281 => 114,  276 => 111,  269 => 107,  259 => 103,  253 => 100,  248 => 94,  241 => 90,  232 => 88,  229 => 85,  227 => 86,  222 => 83,  216 => 79,  213 => 78,  210 => 77,  208 => 76,  194 => 70,  155 => 47,  152 => 46,  127 => 35,  70 => 26,  363 => 153,  357 => 123,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  315 => 125,  312 => 124,  309 => 129,  306 => 286,  303 => 122,  291 => 102,  283 => 115,  278 => 106,  274 => 110,  265 => 105,  263 => 95,  258 => 94,  255 => 101,  243 => 92,  235 => 89,  231 => 83,  224 => 81,  212 => 78,  202 => 94,  190 => 76,  185 => 66,  174 => 65,  143 => 51,  119 => 40,  104 => 32,  61 => 23,  58 => 25,  672 => 345,  668 => 344,  664 => 342,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 408,  525 => 280,  522 => 406,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  457 => 245,  454 => 244,  448 => 240,  444 => 238,  438 => 236,  436 => 235,  428 => 230,  422 => 184,  418 => 224,  412 => 222,  410 => 221,  402 => 215,  400 => 214,  397 => 213,  393 => 211,  383 => 207,  380 => 160,  376 => 205,  367 => 339,  365 => 197,  361 => 146,  353 => 328,  351 => 141,  347 => 191,  341 => 118,  329 => 131,  317 => 185,  313 => 183,  304 => 181,  300 => 121,  297 => 104,  295 => 178,  288 => 118,  285 => 175,  273 => 174,  205 => 108,  197 => 71,  188 => 90,  184 => 63,  179 => 98,  170 => 84,  159 => 90,  90 => 37,  77 => 20,  191 => 69,  178 => 64,  175 => 58,  172 => 62,  161 => 63,  140 => 58,  134 => 47,  118 => 49,  113 => 38,  102 => 33,  100 => 39,  76 => 28,  67 => 18,  59 => 22,  34 => 5,  87 => 41,  38 => 6,  201 => 106,  196 => 92,  183 => 82,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 59,  142 => 59,  138 => 57,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 35,  62 => 24,  49 => 14,  31 => 4,  28 => 3,  26 => 3,  21 => 2,  25 => 4,  94 => 21,  89 => 20,  85 => 24,  75 => 28,  68 => 30,  56 => 16,  24 => 3,  19 => 1,  93 => 38,  88 => 32,  78 => 40,  46 => 12,  44 => 20,  27 => 3,  79 => 29,  72 => 27,  69 => 26,  47 => 21,  40 => 7,  37 => 10,  22 => 2,  246 => 93,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 43,  111 => 47,  108 => 47,  101 => 43,  98 => 45,  96 => 30,  83 => 35,  74 => 14,  66 => 25,  55 => 13,  52 => 12,  50 => 15,  43 => 9,  41 => 19,  35 => 9,  32 => 7,  29 => 4,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 58,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 42,  141 => 51,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 52,  106 => 51,  103 => 32,  99 => 31,  95 => 39,  92 => 43,  86 => 28,  82 => 28,  80 => 29,  73 => 20,  64 => 24,  60 => 6,  57 => 14,  54 => 21,  51 => 13,  48 => 9,  45 => 10,  42 => 11,  39 => 10,  36 => 8,  33 => 4,  30 => 5,);
    }
}
