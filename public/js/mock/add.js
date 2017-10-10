var responseArea = {
    disabled: function (pos,res){
        $.each(pos,function(i){
            $(this).children().eq(0).attr("readonly",res);
        });
    },
    button: function (a,b){
        switch(b){
            case 1:
                a.parent().html(
                    '<a id=ruleEdit>编辑</a> | '+
                    '<a id=ruleDel>删除</a>'
                );
                break;
            case 2:
                a.parent().html(
                    '<a id=ruleSave>保存</a> | '+
                    '<a id=ruleCancel>取消</a>'
                );
                break;
        }
    },
    add: function(id){
        $('#varInit').append(
            '<div class="row mpadding" varid="0">'
            +'<div class="col-md-12">'
            +'<div class="col-md-3 text-center" style="border:solid thin black;padding-left:0;padding-right:0">'
            +'<input class="form-control">'
            +'</div>'
            +'<div class="col-md-4 text-center" style="border:solid thin black;padding-left:0;padding-right:0">'
            +'<input class="form-control">'
            +'</div>'
            +'<div class="col-md-3 text-center" style="border:solid thin black;padding-left:0;padding-right:0">'
            +'<input class="form-control">'
            +'</div>'
            +'<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:34px">'
            +'<div style="margin-top:8px"><a id="varSave">保存</a> | <a id="varDel">取消</a></div>'
            +'</div>'
            +'</div>'
            +'</div>'
        );
    },
    addResponse: function(){
        $('#addResponseInit').append(
            '<div class="row mpadding root">'+
            '<div class="col-md-12">'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px;padding-top:25px" detailId="0">'+
            // '<span class="form-control"></span>'+
            '</div>'+
            '<div class="col-md-11">'+
            '<div  class="row">'+
            '<div class="col-md-4 text-center" style="border:solid thin black;padding-left:0;padding-right:0;padding-top:23px;height:73px">'+
            '<span style="font-size: 15px">无</span>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px">'+
            '<input class="form-control" style="resize:none;height:71px;" placeholder="code" readonly></input>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px">'+
            '<input class="form-control" style="resize:none;height:71px;" placeholder="timeout" readonly></input>'+
            '</div>'+
            '<div class="col-md-3 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<textarea class="form-control" style="resize:none;height:71px"></textarea>'+
            '</div>'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<textarea class="form-control" style="resize:none;height:71px"></textarea>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;padding-top:15px;height:73px">'+
            '<div style="margin-top:8px">'+
            '<a id="ruleSave">保存</a> | '+
            '<a id="ruleDel">取消</a>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'
        );
    },
    addRuleResponse: function(){
        $('#addResponseInit').append(
            '<div class="row mpadding root">'+
            '<div class="col-md-12">'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px;padding-top:25px" detailId="0" ruleId="0">'+
            // '<input class="form-control"></input>'+
            '<a id="addRule">【添加】</a>'+
            '</div>'+
            '<div class="col-md-11">'+
            '<div  class="row">'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px">'+
            '<input class="form-control" style="height:71px"></input>'+
            '</div>'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px">'+
            '<input class="form-control" style="height:71px"></input>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px">'+
            '<input class="form-control" style="resize:none;height:71px;" placeholder="code" readonly></input>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px">'+
            '<input class="form-control" style="resize:none;height:71px;" placeholder="timeout" readonly></input>'+
            '</div>'+
            '<div class="col-md-3 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<textarea class="form-control" style="resize:none;height:71px"></textarea>'+
            '</div>'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<textarea class="form-control" style="resize:none;height:71px"></textarea>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;padding-top:15px;height:73px">'+
            '<div style="margin-top:8px">'+
            '<a id="ruleSave" save="1">保存</a> | '+
            '<a id="ruleDel" rule="1">取消</a>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'
        );
    },
    addRule: function(a){
        var ruleId=a.parents("div").eq(0).attr("ruleId");
        var detailId=a.parents("div").eq(0).attr("detailId");
        var pos=a.parents("div").eq(2).nextAll(".root");
        var html='<div class="row mpadding proot">'+
            '<div class="col-md-12">'+
            '<div class="col-md-1 text-center" style="border-left:solid thin black;border-bottom:solid thin black;border-right:solid thin black;height:73px;padding-top:25px" detailId="'+detailId+'" ruleId="0">'+
            // '<input class="form-control"></input>'+
            '</div>'+
            '<div class="col-md-11">'+
            '<div  class="row">'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px">'+
            '<input class="form-control" style="height:71px"></input>'+
            '</div>'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px">'+
            '<input class="form-control" style="height:71px"></input>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px">'+
            '<input class="form-control" style="resize:none;height:71px;" placeholder="code" readonly></input>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px">'+
            '<input class="form-control" style="resize:none;height:71px;" placeholder="timeout" readonly></input>'+
            '</div>'+
            '<div class="col-md-3 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<textarea class="form-control" style="resize:none;height:71px"></textarea>'+
            '</div>'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<textarea class="form-control" style="resize:none;height:71px"></textarea>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;padding-top:15px;height:73px">'+
            '<div style="margin-top:8px">'+
            '<a id="ruleSave">保存</a> | '+
            '<a id="ruleDel">取消</a>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>';
        if(pos.length>0){
            pos.eq(0).prev().children().eq(0).children().eq(0).css("border-bottom","none");
            pos.eq(0).before(html);
        }else{
            var len=parseInt($("#addResponseInit").children().length)-1;
            $("#addResponseInit").children().eq(len).children().eq(0).children().eq(0).css("border-bottom","none");
            $("#addResponseInit").append(html);
        }
    },
    saveResponse: function(a) {
        var div=a.parents("div").eq(2);
        var requestData={};
        if(a.parents("div").eq(2).children().length==6){//响应保存
            var timeout=$.trim(div.children().eq(2).find("input").val());
            var codeStatus=$.trim(div.children().eq(1).find("input").val());
            requestData={
                mockId:$('#mockId').val(),
                type:0,
                detailId:a.parents("div").eq(4).children().eq(0).attr("detailId"),
                timeout:timeout==""?0:parseInt(timeout)*1000,
                codeStatus:codeStatus==""?0:codeStatus,
                response:div.children().eq(3).find("textarea").val(),
                comment:div.children().eq(4).find("textarea").val()
            }
        }else if(a.parents("div").eq(2).children().length==7){//规则响应保存
            var timeout=$.trim(div.children().eq(3).find("input").val());
            var codeStatus=$.trim(div.children().eq(2).find("input").val());
            requestData={
                mockId:$('#mockId').val(),
                type:1,
                detailId:a.parents("div").eq(4).children().eq(0).attr("detailId"),
                ruleId:a.parents("div").eq(4).children().eq(0).attr("ruleId"),
                xpath:div.children().eq(0).find("input").val(),
                value:div.children().eq(1).find("input").val(),
                timeout:timeout==""?0:parseInt(timeout)*1000,
                codeStatus:codeStatus==""?0:codeStatus,
                response:div.children().eq(4).find("textarea").val(),
                comment:div.children().eq(5).find("textarea").val()
            }
        }
        net.responseSave(requestData,function(data){
            if(data.success){
                var list=data.data;
                for(var key in list){
                    if(key=='detailId'){
                        if(a.parents("div").eq(4).children().eq(0).attr(key)==0){
                            a.parents("div").eq(4).children().eq(0).attr(key,list[key]);
                            var tmp=a.parents("div").eq(4).children().eq(0);
                            a.parents("div").eq(4).children().eq(0).html('<input class="detailRadio" name="detailRadio" type="radio" detailId="'+list[key]+'">'+
                                list[key]+
                                '<br/><a id="addRule">添加</a>'
                            );
                        }
                        responseArea.disabled(a.parents("div").eq(2).children(),true);
                        responseArea.button(a,1);
                    }else{
                        a.parents("div").eq(4).children().eq(0).attr(key,list[key]);
                    }
                }
            }else{
                layer.msg('保存失败');
            }
        });
    },
    edit: function(a){
        var mappingId = $("#reIp").val();
        if (mappingId==""){
            layer.msg("请先选择一个IP");
            return false;
        }
        var id = $("#reIp").val();
        responseArea.disabled(a.parents("div").eq(2).children(),false);
        responseArea.button(a,2);
    },
    ruleCancel: function(a){
        responseArea.disabled(a.parents("div").eq(2).children(),true);
        responseArea.button(a,1);
    },
    addResponse2: function(data,id){
        var checked=(id==data.id?"checked:checked":"");
        $("#addResponseInit").append(
            '<div class="row mpadding root">'+
            '<div class="col-md-12">'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px;padding-top:25px" detailId="'+data.id+'">'+
            // '<span class="form-control"></span>'+
            '<input class="detailRadio" name="detailRadio" type="radio" detailId="'+data.id+'" '+checked+'>'+	data.id+
            '</div>'+
            '<div class="col-md-11">'+
            '<div  class="row">'+
            '<div class="col-md-4 text-center" style="border:solid thin black;padding-left:0;padding-right:0;padding-top:23px;height:73px">'+
            '<span style="font-size: 15px">无</span>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<input class="form-control" value="'+(data.codeStatus==null?"":data.codeStatus)+'" style="resize:none;height:71px;" placeholder="code" readonly></input>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<input class="form-control" value="'+(data.timeout==null?"":parseInt(data.timeout)/1000)+'" style="resize:none;height:71px;" placeholder="timeout" readonly></input>'+
            '</div>'+
            '<div class="col-md-3 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<textarea class="form-control" style="resize:none;height:71px" readonly>'+data.response+'</textarea>'+
            '</div>'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<textarea class="form-control" style="resize:none;height:71px" readonly>'+data.tips+'</textarea>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;padding-top:15px;height:73px">'+
            '<div style="margin-top:8px">'+
            '<a id=ruleEdit>编辑</a> | '+
            '<a id=ruleDel>删除</a>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'
        );
    },
    addRuleResponse2: function(data,detailId,id){
        var checked=(id==data.id?"checked:checked":"");
        $("#addResponseInit").append(
            '<div class="row mpadding root">'+
            '<div class="col-md-12">'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px;padding-top:25px" detailId="'+detailId+'" ruleId="'+data.id+'">'+
            '<input class="detailRadio" name="detailRadio" type="radio" detailId="'+detailId+'" '+checked+'>'+	detailId+
            '<br/>'+
            '<a id="addRule">添加</a> '+
            '</div>'+
            '<div class="col-md-11">'+
            '<div  class="row">'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px">'+
            '<input class="form-control" style="height:71px" value="'+data.xpath+'" readonly></input>'+
            '</div>'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px">'+
            '<input class="form-control" style="height:71px" value="'+data.value+'" readonly></input>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<input class="form-control" value="'+(data.codeStatus==null?"":data.codeStatus)+'" style="resize:none;height:71px;" placeholder="code" readonly></input>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<input class="form-control" value="'+(data.timeout==null?"":parseInt(data.timeout)/1000)+'" style="resize:none;height:71px;" placeholder="timeout" readonly></input>'+
            '</div>'+
            '<div class="col-md-3 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<textarea class="form-control" style="resize:none;height:71px" readonly>'+data.response+'</textarea>'+
            '</div>'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<textarea class="form-control" style="resize:none;height:71px" readonly>'+data.tips+'</textarea>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;padding-top:15px;height:73px">'+
            '<div style="margin-top:8px">'+
            '<a id=ruleEdit>编辑</a> | '+
            '<a id=ruleDel>删除</a>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'
        );
    },
    addRule2: function(data,id){
        var html='<div class="row mpadding proot">'+
            '<div class="col-md-12">'+
            '<div class="col-md-1 text-center" style="border-left:solid thin black;border-bottom:solid thin black;border-right:solid thin black;height:73px;padding-top:25px" detailId="'+id+'" ruleId="'+data.id+'">'+
            '</div>'+
            '<div class="col-md-11">'+
            '<div  class="row">'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px">'+
            '<input class="form-control" style="height:71px" value="'+data.xpath+'" readonly></input>'+
            '</div>'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:73px">'+
            '<input class="form-control" style="height:71px" value="'+data.value+'" readonly></input>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<input class="form-control" value="'+(data.codeStatus==null?"":data.codeStatus)+'" style="resize:none;height:71px;" placeholder="code" readonly></input>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<input class="form-control" value="'+(data.timeout==null?"":parseInt(data.timeout)/1000)+'" style="resize:none;height:71px;" placeholder="timeout" readonly></input>'+
            '</div>'+
            '<div class="col-md-3 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<textarea class="form-control" style="resize:none;height:71px" readonly>'+data.response+'</textarea>'+
            '</div>'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;">'+
            '<textarea class="form-control" style="resize:none;height:71px" readonly>'+data.tips+'</textarea>'+
            '</div>'+
            '<div class="col-md-1 text-center" style="border:solid thin black;padding-left:0;padding-right:0;padding-top:15px;height:73px">'+
            '<div style="margin-top:8px">'+
            '<a id=ruleEdit>编辑</a> | '+
            '<a id=ruleDel>删除</a>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>';
        var len=parseInt($("#addResponseInit").children().length)-1;
        $("#addResponseInit").children().eq(len).children().eq(0).children().eq(0).css("border-bottom","none");
        $("#addResponseInit").append(html);
    },
    find2: function(){
        $(".detailRadio").removeAttr("checked");
        var eip=$("#reIp").find("option:selected").text();
        if(eip!="" && eip!="请选择"){
            var requestData={
                mockId:$('#mockId').val(),
                eip:eip
            };
            net.find2(requestData,function(data){
                var json = data.data;
                var detailId=json.detailId;
                var input=$("input[detailId='"+detailId+"']");
                input.parents("div").eq(2).show();
                if(parseInt(json.codeStatus)>0){
                    $("#addAbnormalResponse").text("异常响应(启用)");
                }else{
                    $("#addAbnormalResponse").text("异常响应(未启用)");
                }
                if(input.length>0){
                    requestData={
                        detailId:detailId,
                        mockId:$('#mockId').val()
                    };
                    net.findVar(requestData);
                    input.prop("checked","checked");
                    input.attr("checked","checked");
                }else{
                    $("#varInit").empty();
                }
            });
        }else{
            $(".detailRadio").removeAttr("checked");
            $("#varInit").empty();
        }
    }
}
var addVar = {
    add: function(id){
        $('#varInit').append(
            '<div class="row mpadding" varid="0">'
            +'<div class="col-md-12">'
            +'<div class="col-md-3 text-center" style="border:solid thin black;padding-left:0;padding-right:0">'
            +'<input class="form-control">'
            +'</div>'
            +'<div class="col-md-4 text-center" style="border:solid thin black;padding-left:0;padding-right:0">'
            +'<input class="form-control">'
            +'</div>'
            +'<div class="col-md-3 text-center" style="border:solid thin black;padding-left:0;padding-right:0">'
            +'<input class="form-control">'
            +'</div>'
            +'<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:34px">'
            +'<div style="margin-top:8px"><a id="varSave">保存</a> | <a id="varDel">取消</a></div>'
            +'</div>'
            +'</div>'
            +'</div>'
        );
    },
    addInit: function(data){
        $("#varInit").append(
            '<div class="row mpadding" varId="'+data.id+'">'+
            '<div class="col-md-12">'+
            '<div class="col-md-3 text-center" style="border:solid thin black;padding-left:0;padding-right:0">'+
            '<input class="form-control" value="'+data.keyword+'" readonly></input>'+
            '</div>'+
            '<div class="col-md-4 text-center" style="border:solid thin black;padding-left:0;padding-right:0">'+
            '<input class="form-control" value="'+data.val+'" readonly></input>'+
            '</div>'+
            '<div class="col-md-3 text-center" style="border:solid thin black;padding-left:0;padding-right:0">'+
            '<input class="form-control" value="'+data.comment+'" readonly></input>'+
            '</div>'+
            '<div class="col-md-2 text-center" style="border:solid thin black;padding-left:0;padding-right:0;height:34px">'+
            '<div style="margin-top:8px">'+
            '<a id=varEdit>编辑</a> | '+
            '<a id=varDel>删除</a>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>');
    },
    disabled: function (pos,res){
        pos.find("div").eq(0).find("input").attr("readonly",res);
        pos.find("div").eq(1).find("input").attr("readonly",res);
        pos.find("div").eq(2).find("input").attr("readonly",res);
    },
    button: function (a,b){
        switch(b){
            case 1:
                a.parent().html(
                    '<a id=varEdit>编辑</a> | '+
                    '<a id=varDel>删除</a>'
                );
                break;
            case 2:
                a.parent().html(
                    '<a id=varSave>保存</a> | '+
                    '<a id=varCancel>取消</a>'
                );
                break;
        }
    },
    edit: function(a){
        var pos=a.parents("div").eq(2);
        disabled(pos,false);
        button(a,2);
    }

};

var init = function(){
    net.findIp();
    net.findResponse($('#mockId').val(),function(json){
        if(json.success){
            $('#addResponseInit').empty();
            var response=json.data.response;
            var ruleResponse=json.data.ruleResponse;
            //下面写响应列表
            for(var key in response){
                responseArea.addResponse2(response[key],0);
            }
            for(var key in ruleResponse){
                var list=ruleResponse[key];
                responseArea.addRuleResponse2(list[0],key,0);
                for(var i=1;i<list.length;i++){
                    responseArea.addRule2(list[i],key);
                }
            }
            //find2();
        }
    });
}
var net = {
    delResponse: function(data,fun){
        $.ajax({
            url:"/mock/delResponse",
            type:"POST",
            async:false,
            data:data,
            success:function(response){
                fun(response);
            }
        });
    },
    turnResponse: function(data,fun){
        $.ajax({
            url:"/mock/turnResponse",
            type:"Post",
            async:false,
            data:data,
            success:function(response){
                fun(response);
            }
        });
    },
    find2: function (data,fun) {
        $.ajax({
            url:"/mock/find2",
            type:"POST",
            async:false,
            data:data,
            success:function(response){
                fun(response);
            }
        });
    },
    findIp: function () {
        $.ajax({
            url: '/mock/findIp',
            type:"GET",
            async:false,
            data: {
                mockId: $('#mockId').val()
            },
            success: function(json){
                if(json.success){
                    var ipList = json.data;
                    $('#reIp').empty();
                    $('#reIp').html('<option>请选择</option>');
                    for(var key in ipList){
                        $('#reIp').append(
                            '<option value="'+ipList[key].id+'">'+
                            ipList[key].ip+
                            '</option>'
                        );
                    }
                }
            }
        });
    },
    findVar: function(data){
        $.ajax({
            url: '/mock/findVar',
            type: "POST",
            async: false,
            data: data,
            success: function(json){
                if(json.success){
                    $("#varInit").empty();
                    for(var key in json.data) {
                        addVar.addInit(json.data[key]);
                    }
                }
            }
        });
    },
    varSave: function(data, fun){
        $.ajax({
            url:"/mock/varSave",
            type:"POST",
            async:false,
            data:data,
            success:function(response){
                fun(response);
            }
        });
    },
    findResponse: function(mockId, fun){
        $.ajax({
            url:"/mock/findResponse",
            type:"GET",
            async:false,
            data:{
                mockId:mockId
            },
            success:function(response){
                fun(response);
            }
        });
    },
    responseSave: function(requestData, fun){
        $.ajax({
            url:"/mock/responseSave",
            type:"POST",
            async:false,
            data:requestData,
            success:function(response){
                fun(response);
            }
        });
    }

}
$(function(){
    init();

    $('#mockSave').on('click',function(){
        var saveUrl = $('#mockId').val()>0 ? "/mock/save/id-"+$('#mockId').val() :"/mock/save/";
        var requestData = {
            url:$('#reUrl').val(),
            common: $('#baseComment').val(),
            type:$('#reType').val()
        }
        for(var i in requestData){
            if(requestData[i] == ''){
                alert('请填写完整');
                return false;
            }
        }
        $.ajax({
            url: saveUrl,
            type:"POST",
            async:false,
            data: requestData,
            success:function(json){
                if(!$('#mockId').val()){
                    location.href="/mock/add/id-"+json.data;
                }else{
                    layer.msg('保存成功',{time: 1000});
                }
            }
        });
    })
    $('#addVar').on('click', function(){
        addVar.add();
    });
    $('#reIp').on('change', function () {
        //net.findVar($(this).val());
        responseArea.find2();
    });
    $('#addReIp').on('click', function(){
        layer.open({
            title: '新增',
            type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['620px', '250px'], //宽高
            content: '<div class="modal-body"><div class="bootbox-body"><form class="form-horizontal"><div class="form-group"><div class="col-md-12" style="overflow:auto;"><input type="text" class="form-control" placeholder="请求Ip" aria-describedby="basic-addon1" id="uiAddReIp"></div></div></form></div></div>',
            btn: ['确定'],
            btn1: function(){
                $.ajax({
                    url:'/mock/mappingSave',
                    type:"POST",
                    async:false,
                    data: {
                        ip: $('#uiAddReIp').val(),
                        mockId: $('#mockId').val(),
                        mappingOwner: '',
                    },
                    success: function(json){
                        if(json.success){
                            net.findIp();
                            layer.close(layer.index)
                        }
                    }
                });
            }
        });
    });
    $('#responseArea').on('click','#varSave', function(){
        var a =$(this);
        var pos=$(this).parents("div").eq(2);
        var key=pos.find("div").eq(0).find("input").val();
        var value=pos.find("div").eq(1).find("input").val();
        var comment=pos.find("div").eq(2).find("input").val();
        var mockId=$('#mockId').val();
        var mappingId=$("#reIp").val();
        if(mappingId!=""){
            var requestData={
                id:pos.parent().attr("varId"),
                key:$.trim(key),
                value:$.trim(value),
                comment:$.trim(comment),
                mockId:mockId,
                detailId:$("input[name='detailRadio']:checked").attr("detailId")
            };
            if(typeof requestData.detailId == 'undefined'){layer.alert('请先绑定响应');return false;}
            net.varSave(requestData,function(json){
                if(json.success){
                    pos.parent().attr("varId",json.data.id)
                    addVar.disabled(pos,true);
                    addVar.button(a,1);
                }else{
                    layer.msg(data.msg);
                }
            });
        }else{
            layer.alert("请求IP不能为空");
        }
    });
    $('#responseArea').on('click', '#addResponse', function(){
        responseArea.addResponse();
    })
    $('#responseArea').on('click', '#addRuleResponse', function(){
        responseArea.addRuleResponse();
    });
    $('#responseArea').on('click', '#addRule', function(){
        responseArea.addRule($(this));
    });
    $('#responseArea').on('click', '#ruleSave', function(){
        responseArea.saveResponse($(this));
    });
    $('#responseArea').on('click', '#ruleEdit', function(){
        responseArea.edit($(this));
    });
    $('#responseArea').on('click', '#ruleCancel', function(){
        responseArea.ruleCancel($(this));
    });
    $('#responseArea').on('click', '#ruleDel', function(){
        var data = {
            detailId: $(this).parents("div").eq(4).children().eq(0).attr("detailId"),
            mappingId: $("#reIp").val()
        };
        layer.confirm('确定删除吗？', {
            btn: ['确实','取消']
        }, function(){
            net.delResponse(data, function(){
                init();
            });
            layer.close(layer.index)
        }, function(){

        });

    });
    $('#responseArea').on('click', '.detailRadio', function(){
        var flag = $(this).attr('checked')=='checked' ? 0 : 1;
        var detailId=$(this).attr("detailId");
        var mappingId=$("#reIp").val();
        if(mappingId!="" && mappingId!="请选择"){
            var requestData={
                mappingId:mappingId,
                detailId:detailId,
                mockId:$('#mockId').val(),
                flag:flag
            };
            net.turnResponse(requestData,function(data){
                if(!data.success){
                    $("input[detailId='"+detailId+"']").removeAttr("checked");
                    layer.msg(data.msg==null?"":data.msg);
                }else{
                    layer.msg(data.msg);
                    $(".detailRadio").removeAttr("checked");
                    $("input[detailId='"+detailId+"']").attr("checked","checked");
                    $("input[detailId='"+detailId+"']").prop("checked","checked");

                    if (data.msg=="响应解绑成功"){
                        $("input[detailId='"+detailId+"']").removeAttr("checked");
                    }
                    //加载响应变量
                    var requestData={
                        detailId:detailId,
                        mockId:$('#mockId').val()
                    };
                    net.findVar(requestData);
                }
            });
        }else{
            $(".detailRadio").removeAttr("checked");
            layer.msg("请先选择一个【请求IP】");
        }
    });

})