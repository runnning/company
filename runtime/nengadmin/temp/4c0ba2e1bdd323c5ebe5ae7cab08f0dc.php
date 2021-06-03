<?php /*a:2:{s:62:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\login\index.html";i:1605534638;s:62:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\public\foot.html";i:1605534304;}*/ ?>
<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport"
        content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>nengadmin-登录</title>

    <meta name="description" content="" />

    <meta name="keywords" content="" />

    <link rel="stylesheet" type="text/css" href="/public/static/admin/css/admin.css" />

    <link rel="stylesheet" type="text/css" href="/public/static/index/layui/css/layui.css" />


</head>

<body style="background: #fff">

    <div class="layui-container">
        
        <form class="layui-form login_form" action="" method="post">
                <h2 class="text_center mar_b_30">后台登录</h2>
            <div class="layui-form-item">
                    <input type="text" name="username" required lay-verify="required" placeholder="请输入用户名"
                    autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-item">
                    <input type="password" name="password" required lay-verify="required" placeholder="请输入密码"
                    autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-item">
                        <input type="text" name="verifycode" required lay-verify="required" placeholder="请输入两位验证码"
                        autocomplete="off" class="layui-input fleft" style="width: 200px"><?php echo captcha_img(); ?>
                    </div>
            <div class="layui-form-item text_center mar_t_30">
                    <button class="layui-btn" type="submit">立即提交</button>
            </div>
        </form>

<!--        <script>
            //Demo
            layui.use('form', function () {
                var form = layui.form;
            });
        </script>-->
    </div>

    <footer>
    <script type="text/javascript" src="/public/static/index/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/public/static/index/layui/layui.js"></script>

    <script type="text/javascript" src="/public/static/admin/ueditor/1.4.3/ueditor.config.js"></script>
    <script type="text/javascript" src="/public/static/admin/ueditor/1.4.3/ueditor.all.min.js"> </script>
    <script type="text/javascript" src="/public/static/admin/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>

    <script>
            layui.use('element', function () {
                var element = layui.element; //导航的hover效果、二级菜单等功能，需要依赖element模               
            });

            layui.use('form', function(){
            var form = layui.form;
            
            //监听提交
            form.on('submit(formDemo)', function(data){
                layer.msg(JSON.stringify(data.field));
                return false;
            });
            });
        </script>


    <script>
    /*-删除时候确认*/
    function public_del(url){
        layui.use('layer', function(){
            var layer = layui.layer;
            layer.confirm('确认要删除吗？',function(index){
                window.location.href=url;
            });
        });
    }


    layui.use('upload', function () {
      var upload = layui.upload;

      //执行上传实例
      var uploadInst = upload.render({
        elem: '#test1' //绑定元素
        , url: '/nengadmin/uploader/upload' //上传接口
        , done: function (res) {
          //上传完毕回调
          console.log(res);
          //path = JSON.stringify(res.path);
          //path = path.replace("\"", "").replace("\"", "");
          $(".public_thumb_input").val(res.path);
          $(".public_thumb").attr("src", res.path);
          $(".public_thumb_box").css("display", "block");
        }
        , error: function () {
          //请求异常回调
        }
      });
    });


    //实时删除图片
    $(".delete_img").click(function(){
        var path=$(this).parent().children(".public_thumb_input").val();
        var url="/nengadmin/uploader/delete_img";
        var model = $(this).parent().attr('attr-model');//编辑默认删除图片
        var id=$("input[name='id']").val();//编辑默认删除图片
        postData = {'path':path,'model':model,'id':id};
        $.post(url,postData,function(result){
          result=JSON.parse(result);
          if(result.status==1){
            $(".public_thumb_input").val("");
            $(".public_thumb").attr("src", "");
            $(".public_thumb_box").css("display", "none");
            layui.use('layer', function(){
              var layer = layui.layer;
              layer.msg('已经删除成功！');
            }); 
          }
        });
    });

    //排序
    $('.listorder input').blur(function() {
    // 编写我们的抛送的逻辑
    //获取主键id
    var id = $(this).attr('attr-id');
    var model=$(this).attr('attr-model');
    // 获取排序的值
    var listorder = $(this).val();
    if(!listorder){
      return;
    }
    var postData = {

        'id' : id,
        'model':model,
        'listorder':listorder,
    };

    var url = "/nengadmin/base/listorder";
    // 抛送http
    $.post(url, postData, function(result){
        // 逻辑
        if(result.code == 1) {
            location.href=result.data;
        }else {
            alert(result.msg);
        }
    },"json");


});

    </script>
</footer>


</body>

</html>