<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_4e1fe957dff96d33f9b59574ff50cac4eab2fa7f208c1d508f8062ab50dd09bc extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 164,  373 => 156,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  325 => 129,  323 => 128,  320 => 127,  298 => 120,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 87,  226 => 84,  220 => 81,  207 => 75,  200 => 72,  181 => 65,  150 => 55,  81 => 23,  53 => 12,  63 => 18,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 462,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  517 => 404,  165 => 60,  153 => 56,  84 => 24,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  358 => 151,  355 => 143,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  281 => 114,  276 => 111,  269 => 107,  259 => 103,  253 => 100,  248 => 94,  241 => 90,  232 => 88,  229 => 85,  227 => 86,  222 => 83,  216 => 79,  213 => 78,  210 => 77,  208 => 76,  194 => 70,  155 => 47,  152 => 46,  127 => 35,  70 => 19,  363 => 153,  357 => 123,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  315 => 125,  312 => 124,  309 => 129,  306 => 107,  303 => 122,  291 => 102,  283 => 115,  278 => 106,  274 => 110,  265 => 105,  263 => 95,  258 => 94,  255 => 101,  243 => 92,  235 => 89,  231 => 83,  224 => 81,  212 => 78,  202 => 94,  190 => 76,  185 => 66,  174 => 65,  143 => 51,  119 => 40,  104 => 32,  61 => 17,  58 => 25,  672 => 345,  668 => 344,  664 => 342,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 408,  525 => 280,  522 => 406,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  457 => 245,  454 => 244,  448 => 240,  444 => 238,  438 => 236,  436 => 235,  428 => 230,  422 => 184,  418 => 224,  412 => 222,  410 => 221,  402 => 215,  400 => 214,  397 => 213,  393 => 211,  383 => 207,  380 => 160,  376 => 205,  367 => 155,  365 => 197,  361 => 146,  353 => 149,  351 => 141,  347 => 191,  341 => 118,  329 => 131,  317 => 185,  313 => 183,  304 => 181,  300 => 121,  297 => 104,  295 => 178,  288 => 118,  285 => 175,  273 => 174,  205 => 108,  197 => 71,  188 => 90,  184 => 63,  179 => 98,  170 => 84,  159 => 90,  90 => 27,  77 => 20,  191 => 69,  178 => 64,  175 => 58,  172 => 62,  161 => 63,  140 => 58,  134 => 47,  118 => 49,  113 => 38,  102 => 33,  100 => 39,  76 => 25,  67 => 18,  59 => 14,  34 => 5,  87 => 41,  38 => 6,  201 => 106,  196 => 92,  183 => 82,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 59,  142 => 59,  138 => 57,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 27,  49 => 14,  31 => 4,  28 => 3,  26 => 5,  21 => 2,  25 => 4,  94 => 21,  89 => 20,  85 => 24,  75 => 19,  68 => 30,  56 => 9,  24 => 3,  19 => 1,  93 => 27,  88 => 32,  78 => 40,  46 => 13,  44 => 20,  27 => 3,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 7,  37 => 10,  22 => 2,  246 => 93,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 43,  111 => 47,  108 => 37,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 14,  66 => 15,  55 => 13,  52 => 12,  50 => 22,  43 => 9,  41 => 19,  35 => 5,  32 => 6,  29 => 4,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 58,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 42,  141 => 51,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 52,  106 => 51,  103 => 32,  99 => 31,  95 => 28,  92 => 43,  86 => 28,  82 => 28,  80 => 27,  73 => 20,  64 => 17,  60 => 6,  57 => 14,  54 => 21,  51 => 13,  48 => 9,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
