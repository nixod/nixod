<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_301cebb9cc031d94e9d56895e0d6cab91ce079e62f5509a495929ff435d42a48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Web Configurator Bundle";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  555 => 95,  550 => 94,  547 => 93,  524 => 90,  512 => 84,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  480 => 75,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  461 => 70,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  426 => 58,  423 => 57,  414 => 52,  405 => 49,  403 => 48,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  374 => 36,  368 => 34,  366 => 33,  337 => 22,  316 => 16,  311 => 14,  299 => 8,  271 => 374,  268 => 373,  266 => 366,  260 => 363,  250 => 341,  245 => 335,  240 => 326,  238 => 312,  230 => 303,  225 => 298,  217 => 289,  215 => 280,  204 => 267,  186 => 239,  169 => 210,  146 => 181,  129 => 148,  126 => 147,  124 => 132,  114 => 111,  71 => 19,  65 => 22,  20 => 1,  350 => 26,  308 => 13,  462 => 202,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  415 => 180,  408 => 50,  401 => 172,  394 => 168,  387 => 164,  373 => 156,  348 => 140,  342 => 23,  338 => 135,  335 => 21,  325 => 129,  323 => 128,  320 => 127,  298 => 120,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 304,  226 => 84,  220 => 290,  207 => 269,  200 => 72,  181 => 232,  150 => 55,  81 => 40,  53 => 11,  63 => 21,  810 => 492,  807 => 491,  796 => 183,  792 => 488,  788 => 486,  775 => 485,  749 => 162,  746 => 161,  727 => 476,  710 => 149,  706 => 473,  702 => 472,  698 => 471,  694 => 138,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 122,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 92,  517 => 404,  165 => 60,  153 => 56,  84 => 41,  389 => 160,  386 => 159,  378 => 157,  371 => 35,  358 => 151,  355 => 27,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 6,  290 => 5,  281 => 411,  276 => 395,  269 => 107,  259 => 103,  253 => 342,  248 => 336,  241 => 90,  232 => 88,  229 => 85,  227 => 301,  222 => 297,  216 => 79,  213 => 78,  210 => 270,  208 => 76,  194 => 248,  155 => 47,  152 => 46,  127 => 35,  70 => 24,  363 => 32,  357 => 123,  344 => 24,  332 => 20,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  315 => 125,  312 => 124,  309 => 129,  306 => 286,  303 => 122,  291 => 102,  283 => 115,  278 => 410,  274 => 110,  265 => 105,  263 => 365,  258 => 354,  255 => 353,  243 => 327,  235 => 311,  231 => 83,  224 => 81,  212 => 279,  202 => 266,  190 => 76,  185 => 66,  174 => 217,  143 => 51,  119 => 117,  104 => 90,  61 => 2,  58 => 13,  672 => 345,  668 => 344,  664 => 342,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 119,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  593 => 105,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 96,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 91,  525 => 280,  522 => 406,  519 => 278,  515 => 85,  509 => 83,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 69,  457 => 245,  454 => 244,  448 => 240,  444 => 238,  438 => 236,  436 => 235,  428 => 59,  422 => 184,  418 => 224,  412 => 222,  410 => 221,  402 => 215,  400 => 47,  397 => 213,  393 => 211,  383 => 207,  380 => 160,  376 => 205,  367 => 339,  365 => 197,  361 => 146,  353 => 328,  351 => 141,  347 => 191,  341 => 118,  329 => 131,  317 => 185,  313 => 15,  304 => 181,  300 => 121,  297 => 104,  295 => 178,  288 => 4,  285 => 3,  273 => 394,  205 => 108,  197 => 249,  188 => 90,  184 => 233,  179 => 224,  170 => 84,  159 => 196,  90 => 27,  77 => 25,  191 => 246,  178 => 64,  175 => 58,  172 => 62,  161 => 202,  140 => 58,  134 => 161,  118 => 49,  113 => 40,  102 => 30,  100 => 36,  76 => 31,  67 => 16,  59 => 13,  34 => 4,  87 => 26,  38 => 6,  201 => 106,  196 => 92,  183 => 82,  171 => 216,  166 => 209,  163 => 82,  158 => 80,  156 => 195,  151 => 188,  142 => 59,  138 => 57,  136 => 168,  121 => 131,  117 => 39,  105 => 34,  91 => 56,  62 => 14,  49 => 14,  31 => 3,  28 => 6,  26 => 6,  21 => 2,  25 => 4,  94 => 57,  89 => 47,  85 => 23,  75 => 24,  68 => 12,  56 => 12,  24 => 3,  19 => 1,  93 => 28,  88 => 32,  78 => 18,  46 => 13,  44 => 11,  27 => 7,  79 => 32,  72 => 18,  69 => 13,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 93,  157 => 89,  145 => 74,  139 => 169,  131 => 160,  123 => 42,  120 => 31,  115 => 43,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 31,  74 => 20,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 73,  199 => 265,  193 => 73,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 54,  144 => 176,  141 => 175,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 116,  112 => 36,  109 => 105,  106 => 104,  103 => 32,  99 => 68,  95 => 34,  92 => 28,  86 => 46,  82 => 28,  80 => 29,  73 => 23,  64 => 11,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 8,  42 => 8,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}