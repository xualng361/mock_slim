<?php

/* mock/index.html */
class __TwigTemplate_9710d417bc356ca6a0610d8863397ea161e5fd49c5b7a8a1b7958d70a33d9ff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mock/main.html", "mock/index.html", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mock/main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Test Mock</h3>

        <div class=\"panel-options\">
            <a href=\"#\" data-toggle=\"panel\">
                <span class=\"collapse-icon\">–</span>
                <span class=\"expand-icon\">+</span>
            </a>
            <a href=\"#\" data-toggle=\"remove\">
                ×
            </a>
        </div>
    </div>
    <div class=\"panel-body\">

        <div id=\"example-1_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
            <div class=\"row\">
                <!--<div class=\"col-xs-3\">-->
                    <!--<div class=\"dataTables_length\" id=\"example-1_length\">-->
                        <!--<label>Show <select name=\"example-1_length\" aria-controls=\"example-1\" class=\"form-control input-sm\">-->
                            <!--<option value=\"10\">10</option><option value=\"25\">25</option><option value=\"50\">50</option><option value=\"100\">100</option><option value=\"-1\">All</option></select> entries</label>-->
                    <!--</div>-->
                <!--</div>-->
                <div class=\"col-xs-10\">
                    <div id=\"example-1_filter\" class=\"dataTables_filter\" style=\"float: right\">
                        <label>请求url:<input type=\"search\" id=\"url-select\" class=\"form-control input-sm\"  value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\">
                        </label>
                    </div>
                </div>
                <div class=\"col-xs-1\">
                    <a  style=\"float: right\" href=\"#\" style=\"color: white\"><button class=\"btn  btn-primary\" id=\"queryMock\">查询</button></a>
                </div>
                <div class=\"col-xs-1\">
                    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["add_route"]) ? $context["add_route"] : null), "html", null, true);
        echo "\" style=\"color: white\"><button class=\"btn btn-primary\">新增</button></a>
                </div>
            </div>
            <table id=\"example-1\" class=\"table table-striped table-bordered dataTable\" cellspacing=\"0\" width=\"100%\" role=\"grid\" aria-describedby=\"example-1_info\" style=\"width: 100%;\">
                <thead>
                <tr role=\"row\">
                    <th rowspan=\"1\" colspan=\"1\" width=\"39%\">请求URL</th>
                    <th rowspan=\"1\" colspan=\"1\" width=\"39%\">描述</th>
                    <th rowspan=\"1\" colspan=\"1\">请求参数类型</th>
                    <th rowspan=\"1\" colspan=\"1\" width=\"140px\">操作</th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["k"] => $context["item"]) {
            // line 53
            echo "                <tr role=\"row\" class=\" ";
            if ((($context["k"] % 2) == 0)) {
                echo "odd";
            } else {
                echo "even ";
            }
            echo "\">
                    <td class=\"sorting_1\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "common", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["types"]) ? $context["types"] : null), $this->getAttribute($context["item"], "type", array()), array(), "array"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["add_route"]) ? $context["add_route"] : null), "html", null, true);
            echo "id-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mock_id", array()), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-sm btn-icon icon-left\">
                            编辑
                        </a>

                        <a href=\"#\"  class=\"btn btn-danger btn-sm btn-icon icon-left deleteMock\" mockId=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mock_id", array()), "html", null, true);
            echo "\">
                            删除
                        </a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </tbody>
            </table>
            <div class=\"row\">
                <div class=\"col-xs-7\">
                    <div class=\"dataTables_paginate paging_simple_numbers\" id=\"example-1_paginate\" style=\"float:right;\">
                        <ul class=\"pagination\">
                            ";
        // line 74
        if ((0 != $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array()))) {
            // line 75
            echo "                            <li class=\"paginate_button previous \" ><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["this_route"]) ? $context["this_route"] : null), "html", null, true);
            echo "page-0?url=";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">首页</a></li>
                            ";
        }
        // line 77
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "pages", array()));
        foreach ($context['_seq'] as $context["page"] => $context["title"]) {
            // line 78
            echo "                                ";
            if (($context["page"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array()))) {
                // line 79
                echo "                                    <li class=\"paginate_button active\" ><a href=\"#\">";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</a></li>
                                ";
            } else {
                // line 81
                echo "                                    <li class=\"paginate_button \" ><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["this_route"]) ? $context["this_route"] : null), "html", null, true);
                echo "page-";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "?url=";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</a></li>
                                ";
            }
            // line 83
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['page'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                            ";
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "max", array()) != $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array()))) {
            // line 85
            echo "                            <li class=\"paginate_button next\" ><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["this_route"]) ? $context["this_route"] : null), "html", null, true);
            echo "page-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "max", array()), "html", null, true);
            echo "?url=";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">末页</a></li>
                            ";
        }
        // line 87
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src=\"/js/mock/index.js?v=201709121000\"></script>
";
    }

    public function getTemplateName()
    {
        return "mock/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 87,  187 => 85,  184 => 84,  178 => 83,  166 => 81,  160 => 79,  157 => 78,  152 => 77,  144 => 75,  142 => 74,  134 => 68,  122 => 62,  113 => 58,  108 => 56,  104 => 55,  100 => 54,  91 => 53,  87 => 52,  70 => 38,  59 => 30,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'mock/main.html' %}*/
/* */
/* {% block body %}*/
/* <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*         <h3 class="panel-title">Test Mock</h3>*/
/* */
/*         <div class="panel-options">*/
/*             <a href="#" data-toggle="panel">*/
/*                 <span class="collapse-icon">–</span>*/
/*                 <span class="expand-icon">+</span>*/
/*             </a>*/
/*             <a href="#" data-toggle="remove">*/
/*                 ×*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel-body">*/
/* */
/*         <div id="example-1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">*/
/*             <div class="row">*/
/*                 <!--<div class="col-xs-3">-->*/
/*                     <!--<div class="dataTables_length" id="example-1_length">-->*/
/*                         <!--<label>Show <select name="example-1_length" aria-controls="example-1" class="form-control input-sm">-->*/
/*                             <!--<option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label>-->*/
/*                     <!--</div>-->*/
/*                 <!--</div>-->*/
/*                 <div class="col-xs-10">*/
/*                     <div id="example-1_filter" class="dataTables_filter" style="float: right">*/
/*                         <label>请求url:<input type="search" id="url-select" class="form-control input-sm"  value="{{url}}">*/
/*                         </label>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-xs-1">*/
/*                     <a  style="float: right" href="#" style="color: white"><button class="btn  btn-primary" id="queryMock">查询</button></a>*/
/*                 </div>*/
/*                 <div class="col-xs-1">*/
/*                     <a href="{{add_route}}" style="color: white"><button class="btn btn-primary">新增</button></a>*/
/*                 </div>*/
/*             </div>*/
/*             <table id="example-1" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example-1_info" style="width: 100%;">*/
/*                 <thead>*/
/*                 <tr role="row">*/
/*                     <th rowspan="1" colspan="1" width="39%">请求URL</th>*/
/*                     <th rowspan="1" colspan="1" width="39%">描述</th>*/
/*                     <th rowspan="1" colspan="1">请求参数类型</th>*/
/*                     <th rowspan="1" colspan="1" width="140px">操作</th>*/
/*                 </tr>*/
/*                 </thead>*/
/* */
/*                 <tbody>*/
/*                 {% for k,item in data %}*/
/*                 <tr role="row" class=" {% if(k%2==0) %}odd{% else %}even {% endif %}">*/
/*                     <td class="sorting_1">{{ item.url}}</td>*/
/*                     <td>{{ item.common}}</td>*/
/*                     <td>{{ types[item.type] }}</td>*/
/*                     <td>*/
/*                         <a href="{{add_route}}id-{{item.mock_id}}" class="btn btn-secondary btn-sm btn-icon icon-left">*/
/*                             编辑*/
/*                         </a>*/
/* */
/*                         <a href="#"  class="btn btn-danger btn-sm btn-icon icon-left deleteMock" mockId="{{item.mock_id}}">*/
/*                             删除*/
/*                         </a>*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             <div class="row">*/
/*                 <div class="col-xs-7">*/
/*                     <div class="dataTables_paginate paging_simple_numbers" id="example-1_paginate" style="float:right;">*/
/*                         <ul class="pagination">*/
/*                             {% if 0!=pagination.current %}*/
/*                             <li class="paginate_button previous " ><a href="{{ this_route }}page-0?url={{url}}">首页</a></li>*/
/*                             {% endif %}*/
/*                             {% for page,title in pagination.pages %}*/
/*                                 {% if page==pagination.current %}*/
/*                                     <li class="paginate_button active" ><a href="#">{{ title }}</a></li>*/
/*                                 {% else %}*/
/*                                     <li class="paginate_button " ><a href="{{ this_route }}page-{{ page }}?url={{url}}">{{ title }}</a></li>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                             {% if pagination.max!=pagination.current %}*/
/*                             <li class="paginate_button next" ><a href="{{ this_route }}page-{{ pagination.max }}?url={{url}}">末页</a></li>*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* <script src="/js/mock/index.js?v=201709121000"></script>*/
/* {% endblock %}*/
