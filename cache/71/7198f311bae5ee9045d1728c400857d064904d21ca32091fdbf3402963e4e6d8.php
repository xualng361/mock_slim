<?php

/* mock/add.html */
class __TwigTemplate_6338a1ff1cce9c52ab14b8a4e0562b0de124de44633e2a88b2312a9d5dab5c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mock/main.html", "mock/add.html", 1);
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
        echo "<style>
    .mtop{margin-top: 10px;}
</style>
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 9
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "mock_id", array()) > 0)) {
            echo "编辑";
        } else {
            echo "新增";
        }
        echo "</h3>
        <!--<div class=\"panel-options\">-->
            <!--<a href=\"#\" data-toggle=\"panel\">-->
                <!--<span class=\"collapse-icon\">–</span>-->
                <!--<span class=\"expand-icon\">+</span>-->
            <!--</a>-->
            <!--<a href=\"#\" data-toggle=\"remove\">-->
                <!--×-->
            <!--</a>-->
        <!--</div>-->
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"list-group-item list-group-item-success\" role=\"alert\" style=\"margin-bottom:1px;height: 10pz;\">
                    基本信息:
                    <button class=\"btn  btn-xs btn-blue pull-right\" id=\"mockSave\" style=\"\">保 存</button>
                    <input type=\"hidden\" id=\"mockId\" name=\"mockId\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "mock_id", array()), "html", null, true);
        echo "\">
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <textarea class=\"form-control\" placeholder=\"描述\" style=\"resize:none;height: 100px\" id=\"baseComment\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "common", array()), "html", null, true);
        echo "</textarea>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-7\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" ><span style=\"color:red;\">*</span>请求URL</span>
                    <input type=\"text\" class=\"form-control\" placeholder=\"请求URL\" aria-describedby=\"basic-addon1\" id=\"reUrl\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "url", array()), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" ><span style=\"color:red;height: 30px;\">*</span>请求参数类型</span>
                    <select class=\"select \" style=\"width:100%;height: 30px;\" id=\"reType\" tabindex=\"-1\" aria-hidden=\"true\"  >
                        <option>请选择</option>
                        <option value=\"1\" ";
        // line 49
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type", array()) == 1)) {
            echo "selected=\"selected\"";
        }
        echo ">JSON</option>
                        <option value=\"2\" ";
        // line 50
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type", array()) == 2)) {
            echo "selected=\"selected\"";
        }
        echo ">XML</option>
                        <option value=\"3\" ";
        // line 51
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type", array()) == 3)) {
            echo "selected=\"selected\"";
        }
        echo ">表单</option>
                    </select>
                    <!--<span class=\"select2 select2-container select2-container&#45;&#45;bootstrap\" dir=\"ltr\" style=\"width: 100%;\"><span class=\"selection\"><span class=\"select2-selection select2-selection&#45;&#45;single\" role=\"combobox\" aria-autocomplete=\"list\" aria-haspopup=\"true\" aria-expanded=\"false\" tabindex=\"0\" aria-labelledby=\"select2-reType-container\"><span class=\"select2-selection__rendered\" id=\"select2-reType-container\" title=\"JSON\"><span class=\"select2-selection__clear\">×</span>JSON</span><span class=\"select2-selection__arrow\" role=\"presentation\"><b role=\"presentation\"></b></span></span></span><span class=\"dropdown-wrapper\" aria-hidden=\"true\"></span></span>-->
                </div>
            </div>

        </div>
        <div class=\"row mtop responseArea \" style=\"margin-top: 15px;";
        // line 58
        if (( !$this->getAttribute((isset($context["data"]) ? $context["data"] : null), "mock_id", array(), "any", true, true) || (null === $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "mock_id", array())))) {
            echo " display: none; ";
        }
        echo "\">
            <div class=\"col-md-12\">
                <div class=\"list-group-item list-group-item-success\" role=\"alert\" style=\"margin-bottom:1px;height: 10pz;\">
                    响应信息:
                </div>
            </div>
        </div>
        <div class=\"responseArea\" id=\"responseArea\" style=\"";
        // line 65
        if (( !$this->getAttribute((isset($context["data"]) ? $context["data"] : null), "mock_id", array(), "any", true, true) || (null === $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "mock_id", array())))) {
            echo " display: none; ";
        }
        echo " border: thin solid #8dc63f; min-height: 350px;\">
            <div class=\"row mtop mpadding\">
                <div class=\"col-md-4\">
                    <div class=\"input-group\">
                        <div class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"1px solid \">请求IP
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a id=\"addReIp\">新增</a></li>
                                <!--<li><a id=\"delReIp\">编辑</a></li>-->
                            </ul>
                        </div>
                        <select class=\"select \" style=\"width:100% ;height: 31px;\" id=\"reIp\" tabindex=\"-1\" aria-hidden=\"true\">
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <!--<button class=\"btn btn-orange\" id=\"timeoutResponse\"><i class=\"glyphicon glyphicon-time\"></i> 超时</button>-->
                    <!--<button class=\"btn btn-pink\" id=\"addAbnormalResponse\">异常响应</button>-->
                </div>
            </div>
            <div class=\"row mtop mpadding\">
                <div class=\"col-md-12\">
                    <div class=\"list-group-item list-group-item-warning\" role=\"alert\" style=\"margin-bottom:1px;background-color:#f9e491;color: #555\">
                        添加变量:
                    </div>
                </div>
            </div>
            <div class=\"row mpadding\">
                <div class=\"col-md-12\">
                    <div class=\"col-md-3 text-center\" style=\"border:solid thin black;\">
                        <span style=\"font-size: 20px\"><b>key</b></span>
                    </div>
                    <div class=\"col-md-4 text-center\" style=\"border:solid thin black;\">
                        <span style=\"font-size: 20px\"><b>value</b></span>
                    </div>
                    <div class=\"col-md-3 text-center\" style=\"border:solid thin black;\">
                        <span style=\"font-size: 20px\"><b>备注</b></span>
                    </div>
                    <div class=\"col-md-2 text-center\" style=\"border:solid thin black;height: 30px;\">
                        <span style=\"font-size: 20px\"><b>操作</b></span>
                        <button class=\"btn green btn-xs btn-info pull-right\" style=\"margin-top: 4px;margin-right:-10px;\" id=\"addVar\">添加变量</button>
                    </div>
                </div>
            </div>
            <div id=\"varInit\">

            </div>
            <div class=\"row mtop mpadding\">
                <div class=\"col-md-12\">
                    <div class=\"list-group-item list-group-item-warning\" role=\"alert\" style=\"margin-bottom:1px; height: 40px;background-color:#f9e491;color: #555\">
                        响应:
                        <!--<button class=\"btn btn-info btn-xs\" id=\"myResponse\">我的响应</button>-->
                        <!--<button class=\"btn btn-info btn-xs\" id=\"allResponse\">全部响应</button>-->
                    </div>
                </div>
            </div>
            <div class=\"row mpadding\">
                <div class=\"col-md-12\">
                    <div class=\"col-md-1 text-center\" style=\"border:solid thin black;height:68px;padding-top:15px\">
                        <span style=\"font-size: 20px\"><b>编号</b></span>
                    </div>
                    <div class=\"col-md-11\">
                        <div class=\"row\">
                            <div class=\"col-md-12 text-center\" style=\"border:solid thin black;\">
                                <span style=\"font-size: 20px\"><b>响应</b></span>
                                <button class=\"btn btn-info btn-xs pull-right\" style=\"margin-top: 4px;margin-left:5px\" id=\"addResponse\">添加响应</button>
                                <button class=\"btn btn-info btn-xs pull-right\" style=\"margin-top: 4px;\" id=\"addRuleResponse\">添加规则响应</button>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-2 text-center\" style=\"border:solid thin black;\">
                                <span style=\"font-size: 20px\"><b>xpath</b></span>
                            </div>
                            <div class=\"col-md-2 text-center\" style=\"border:solid thin black;\">
                                <span style=\"font-size: 20px\"><b>value</b></span>
                            </div>
                            <div class=\"col-md-1 text-center\" style=\"border:solid thin black;\">
                                <span style=\"font-size: 20px\"><b>状态码</b></span>
                            </div>
                            <div class=\"col-md-1 text-center\" style=\"border:solid thin black;\">
                                <span style=\"font-size: 20px\"><b>超时</b></span>
                            </div>
                            <div class=\"col-md-3 text-center\" style=\"border:solid thin black;\">
                                <span style=\"font-size: 20px\"><b>响应</b></span>
                            </div>
                            <div class=\"col-md-2 text-center\" style=\"border:solid thin black;\">
                                <span style=\"font-size: 20px\"><b>备注</b></span>
                            </div>
                            <div class=\"col-md-1 text-center\" style=\"border:solid thin black;\">
                                <span style=\"font-size: 20px\"><b>操作</b></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"addResponseInit\" style=\"padding-bottom: 15px\">

            </div>
        </div>
    </div>
</div>
<script src=\"/js/mock/add.js?v=201709121000\"></script>
";
    }

    public function getTemplateName()
    {
        return "mock/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 65,  118 => 58,  106 => 51,  100 => 50,  94 => 49,  83 => 41,  72 => 33,  62 => 26,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'mock/main.html' %}*/
/* */
/* {% block body %}*/
/* <style>*/
/*     .mtop{margin-top: 10px;}*/
/* </style>*/
/* <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*         <h3 class="panel-title">{% if(data.mock_id>0) %}编辑{% else %}新增{% endif %}</h3>*/
/*         <!--<div class="panel-options">-->*/
/*             <!--<a href="#" data-toggle="panel">-->*/
/*                 <!--<span class="collapse-icon">–</span>-->*/
/*                 <!--<span class="expand-icon">+</span>-->*/
/*             <!--</a>-->*/
/*             <!--<a href="#" data-toggle="remove">-->*/
/*                 <!--×-->*/
/*             <!--</a>-->*/
/*         <!--</div>-->*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="list-group-item list-group-item-success" role="alert" style="margin-bottom:1px;height: 10pz;">*/
/*                     基本信息:*/
/*                     <button class="btn  btn-xs btn-blue pull-right" id="mockSave" style="">保 存</button>*/
/*                     <input type="hidden" id="mockId" name="mockId" value="{{data.mock_id}}">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="form-group">*/
/*                     <textarea class="form-control" placeholder="描述" style="resize:none;height: 100px" id="baseComment">{{data.common}}</textarea>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-7">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon" ><span style="color:red;">*</span>请求URL</span>*/
/*                     <input type="text" class="form-control" placeholder="请求URL" aria-describedby="basic-addon1" id="reUrl" value="{{data.url}}">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-2">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon" ><span style="color:red;height: 30px;">*</span>请求参数类型</span>*/
/*                     <select class="select " style="width:100%;height: 30px;" id="reType" tabindex="-1" aria-hidden="true"  >*/
/*                         <option>请选择</option>*/
/*                         <option value="1" {% if(data.type == 1) %}selected="selected"{% endif %}>JSON</option>*/
/*                         <option value="2" {% if(data.type == 2) %}selected="selected"{% endif %}>XML</option>*/
/*                         <option value="3" {% if(data.type == 3) %}selected="selected"{% endif %}>表单</option>*/
/*                     </select>*/
/*                     <!--<span class="select2 select2-container select2-container&#45;&#45;bootstrap" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection&#45;&#45;single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-reType-container"><span class="select2-selection__rendered" id="select2-reType-container" title="JSON"><span class="select2-selection__clear">×</span>JSON</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>-->*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="row mtop responseArea " style="margin-top: 15px;{% if (data.mock_id is not defined or data.mock_id is null) %} display: none; {%endif%}">*/
/*             <div class="col-md-12">*/
/*                 <div class="list-group-item list-group-item-success" role="alert" style="margin-bottom:1px;height: 10pz;">*/
/*                     响应信息:*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="responseArea" id="responseArea" style="{% if (data.mock_id is not defined or data.mock_id is null) %} display: none; {%endif%} border: thin solid #8dc63f; min-height: 350px;">*/
/*             <div class="row mtop mpadding">*/
/*                 <div class="col-md-4">*/
/*                     <div class="input-group">*/
/*                         <div class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="1px solid ">请求IP*/
/*                                 <span class="caret"></span>*/
/*                             </button>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a id="addReIp">新增</a></li>*/
/*                                 <!--<li><a id="delReIp">编辑</a></li>-->*/
/*                             </ul>*/
/*                         </div>*/
/*                         <select class="select " style="width:100% ;height: 31px;" id="reIp" tabindex="-1" aria-hidden="true">*/
/*                             <option></option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <!--<button class="btn btn-orange" id="timeoutResponse"><i class="glyphicon glyphicon-time"></i> 超时</button>-->*/
/*                     <!--<button class="btn btn-pink" id="addAbnormalResponse">异常响应</button>-->*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row mtop mpadding">*/
/*                 <div class="col-md-12">*/
/*                     <div class="list-group-item list-group-item-warning" role="alert" style="margin-bottom:1px;background-color:#f9e491;color: #555">*/
/*                         添加变量:*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row mpadding">*/
/*                 <div class="col-md-12">*/
/*                     <div class="col-md-3 text-center" style="border:solid thin black;">*/
/*                         <span style="font-size: 20px"><b>key</b></span>*/
/*                     </div>*/
/*                     <div class="col-md-4 text-center" style="border:solid thin black;">*/
/*                         <span style="font-size: 20px"><b>value</b></span>*/
/*                     </div>*/
/*                     <div class="col-md-3 text-center" style="border:solid thin black;">*/
/*                         <span style="font-size: 20px"><b>备注</b></span>*/
/*                     </div>*/
/*                     <div class="col-md-2 text-center" style="border:solid thin black;height: 30px;">*/
/*                         <span style="font-size: 20px"><b>操作</b></span>*/
/*                         <button class="btn green btn-xs btn-info pull-right" style="margin-top: 4px;margin-right:-10px;" id="addVar">添加变量</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="varInit">*/
/* */
/*             </div>*/
/*             <div class="row mtop mpadding">*/
/*                 <div class="col-md-12">*/
/*                     <div class="list-group-item list-group-item-warning" role="alert" style="margin-bottom:1px; height: 40px;background-color:#f9e491;color: #555">*/
/*                         响应:*/
/*                         <!--<button class="btn btn-info btn-xs" id="myResponse">我的响应</button>-->*/
/*                         <!--<button class="btn btn-info btn-xs" id="allResponse">全部响应</button>-->*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row mpadding">*/
/*                 <div class="col-md-12">*/
/*                     <div class="col-md-1 text-center" style="border:solid thin black;height:68px;padding-top:15px">*/
/*                         <span style="font-size: 20px"><b>编号</b></span>*/
/*                     </div>*/
/*                     <div class="col-md-11">*/
/*                         <div class="row">*/
/*                             <div class="col-md-12 text-center" style="border:solid thin black;">*/
/*                                 <span style="font-size: 20px"><b>响应</b></span>*/
/*                                 <button class="btn btn-info btn-xs pull-right" style="margin-top: 4px;margin-left:5px" id="addResponse">添加响应</button>*/
/*                                 <button class="btn btn-info btn-xs pull-right" style="margin-top: 4px;" id="addRuleResponse">添加规则响应</button>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-md-2 text-center" style="border:solid thin black;">*/
/*                                 <span style="font-size: 20px"><b>xpath</b></span>*/
/*                             </div>*/
/*                             <div class="col-md-2 text-center" style="border:solid thin black;">*/
/*                                 <span style="font-size: 20px"><b>value</b></span>*/
/*                             </div>*/
/*                             <div class="col-md-1 text-center" style="border:solid thin black;">*/
/*                                 <span style="font-size: 20px"><b>状态码</b></span>*/
/*                             </div>*/
/*                             <div class="col-md-1 text-center" style="border:solid thin black;">*/
/*                                 <span style="font-size: 20px"><b>超时</b></span>*/
/*                             </div>*/
/*                             <div class="col-md-3 text-center" style="border:solid thin black;">*/
/*                                 <span style="font-size: 20px"><b>响应</b></span>*/
/*                             </div>*/
/*                             <div class="col-md-2 text-center" style="border:solid thin black;">*/
/*                                 <span style="font-size: 20px"><b>备注</b></span>*/
/*                             </div>*/
/*                             <div class="col-md-1 text-center" style="border:solid thin black;">*/
/*                                 <span style="font-size: 20px"><b>操作</b></span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="addResponseInit" style="padding-bottom: 15px">*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script src="/js/mock/add.js?v=201709121000"></script>*/
/* {% endblock %}*/
