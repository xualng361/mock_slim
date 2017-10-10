/**
 * Created by xulang on 2017/9/12.
 */
$(function(){
    $('.deleteMock').on('click', function(){
        var id = $(this).attr('mockId');
        layer.confirm('确定删除吗？', {
            btn: ['确实','取消'] //按钮
        }, function(){
            $.ajax({
                url:"/mock/delete",
                type:"POST",
                async:false,
                data:{
                    mockId:id
                },
                success:function(response){
                    if(response.success){
                        layer.msg('删除成功');
                        window.location.reload();
                    }
                }
            });
        }, function(){

        });

    });
    $('#queryMock').on('click', function(){
        var url = $.trim($("#url-select").val());
        url= encodeURIComponent(url);console.log(url);
        window.location.href='/mock/page-0?url='+url;
    })
})