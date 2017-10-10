<?php

/* mock/main.html */
class __TwigTemplate_c87f8fe48a2465126e4c27b75516dc201002ecae3a911bfc68d2d230897e36b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>测试桩注册中心</title>
    <link rel=\"stylesheet\" href=\"/css/fonts/linecons.css\">
    <link rel=\"stylesheet\" href=\"/css/fonts/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"/css/xenon-core.css\">
    <link rel=\"stylesheet\" href=\"/css/xenon-forms.css\">
    <link rel=\"stylesheet\" href=\"/css/xenon-components.css\">
    <link rel=\"stylesheet\" href=\"/css/xenon-skins.css\">
    <link rel=\"stylesheet\" href=\"/css/custom.css\">
    <link rel=\"stylesheet\" href=\"/plugins/select2/select2.min.css\">
    <script src=\"/js/jquery.min.js\"></script>
    <script src=\"/js/xenon-toggles.js\"></script>
    <script src=\"/plugins/bootstrap/bootstrap.min.js\"></script>
    <script src=\"/plugins/layer/layer.js\"></script>
    <script src=\"/plugins/select2/select2.full.min.js\"></script>
</head>
<body>

<div class=\"page-title\">
    <div class=\"title-env col-md-offset-1\" style=\"margin-left: 12px\">
        <h1 class=\"title\"><a href=\"/\">测试桩注册中心</a></h1>
        <p class=\"description\">Test Mock Registe Center</p>
    </div>
</div>
";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "</body>
</html>";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "mock/main.html";
    }

    public function getDebugInfo()
    {
        return array (  60 => 30,  57 => 29,  52 => 32,  50 => 29,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>测试桩注册中心</title>*/
/*     <link rel="stylesheet" href="/css/fonts/linecons.css">*/
/*     <link rel="stylesheet" href="/css/fonts/font-awesome.min.css">*/
/*     <link rel="stylesheet" href="/css/bootstrap.css">*/
/*     <link rel="stylesheet" href="/css/xenon-core.css">*/
/*     <link rel="stylesheet" href="/css/xenon-forms.css">*/
/*     <link rel="stylesheet" href="/css/xenon-components.css">*/
/*     <link rel="stylesheet" href="/css/xenon-skins.css">*/
/*     <link rel="stylesheet" href="/css/custom.css">*/
/*     <link rel="stylesheet" href="/plugins/select2/select2.min.css">*/
/*     <script src="/js/jquery.min.js"></script>*/
/*     <script src="/js/xenon-toggles.js"></script>*/
/*     <script src="/plugins/bootstrap/bootstrap.min.js"></script>*/
/*     <script src="/plugins/layer/layer.js"></script>*/
/*     <script src="/plugins/select2/select2.full.min.js"></script>*/
/* </head>*/
/* <body>*/
/* */
/* <div class="page-title">*/
/*     <div class="title-env col-md-offset-1" style="margin-left: 12px">*/
/*         <h1 class="title"><a href="/">测试桩注册中心</a></h1>*/
/*         <p class="description">Test Mock Registe Center</p>*/
/*     </div>*/
/* </div>*/
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* </body>*/
/* </html>*/
