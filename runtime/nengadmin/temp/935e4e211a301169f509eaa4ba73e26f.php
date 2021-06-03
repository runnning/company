<?php /*a:5:{s:65:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\category\index.html";i:1585990006;s:62:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\public\meta.html";i:1605534304;s:62:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\public\left.html";i:1606668990;s:61:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\public\top.html";i:1606669188;s:62:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\public\foot.html";i:1605534304;}*/ ?>
<!DOCTYPE html>

<html>

<head>
        <meta charset="utf-8">

    <meta name="viewport"
        content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>nengadmin</title>

    <link rel="stylesheet" type="text/css" href="/public/static/admin/css/admin.css" />

    <link rel="stylesheet" type="text/css" href="/public/static/index/layui/css/layui.css" />

</head>

<body>


    <div class="container">
         <div class="left_content">
            <div class="login text_center ">
                <a class="display_inline_block" href="<?php echo url('nengadmin/index/index'); ?>">后台管理系统</a>
                <span class="display_inline_block">V0.0.1</span>
            </div>
            <ul class="layui-nav layui-nav-tree layui-inline" lay-filter="demo" style="margin-right: 10px; margin-top: 10px">
                    <li class="layui-nav-item <?php if($left_menu == 1): ?>layui-nav-itemed<?php endif; ?>">
                    <a href="javascript:;"><i class="iconfont icon-neirong"></i> 栏目内容</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('category/index'); ?>">栏目管理</a></dd>
                        <dd><a href="<?php echo url('content/index'); ?>">文档管理</a></dd>

                    </dl>
                </li>
                <li class="layui-nav-item <?php if($left_menu == 2): ?>layui-nav-itemed<?php endif; ?>">
                    <a href="javascript:;"><i class="iconfont icon-tupian"></i> 广告管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('ad/index'); ?>">广告管理</a></dd>
                        <dd><a href="<?php echo url('ad/adtype'); ?>">广告分组</a></dd>
                    </dl>
                </li>

                <li class="layui-nav-item <?php if($left_menu == 3): ?>layui-nav-itemed<?php endif; ?>">
                        <a href="javascript:;"><i class="iconfont icon-shezhi"></i> 系统管理</a>
                        <dl class="layui-nav-child">
                            <dd><a href="<?php echo url('config/index'); ?>">系统参数</a></dd>
                            <dd><a href="<?php echo url('flink/index'); ?>">友情链接</a></dd>
                            <dd><a href="<?php echo url('config/del_cache'); ?>">清空缓存</a></dd>
                            <dd><a href="<?php echo url('config/edit_password'); ?>">修改密码</a></dd>
                        </dl>
                    </li>
            </ul>




        </div>
        <div class="right_content">
            <div class="right_content_top">
    <a href="#">联系QQ：2467634970</a>
    <a href="http://www.blog.com" target="_blank">网站首页</a>
    <a href="<?php echo url('index/logout'); ?>">退出登录</a>
</div>
            <div class="right_content_main">
                <div class="right_content_main_box padding_20">
                        <span class="layui-breadcrumb">
                                <a href="<?php echo url('index/index'); ?>">首页</a>
                                <a><cite>栏目分类列表</cite></a>
                            </span>
                            <div class="mar_t_15">
                                <a class="layui-btn " href="<?php echo url('category/add'); ?>">+添加分类</a>

                            </div>
                            <div class="mar_t_15">
                                <table class="layui-table ">
                                   
                                    <tbody>
                                            <?php if(is_array($categoryTree) || $categoryTree instanceof \think\Collection || $categoryTree instanceof \think\Paginator): $i = 0; $__LIST__ = $categoryTree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <tr id="<?php echo htmlentities($vo['id']); ?>" parentid="<?php echo htmlentities($vo['parent_id']); ?>">
                                        <td align="center"><span class="open">+</span></td>
                                        <td><?php echo htmlentities($vo['id']); ?></td>
                                        <td style="text-align: left;<?php if($vo['cate_level'] == 0): ?>font-weight:bold;<?php endif; ?>">

                                          <a href="<?php echo url('content/index',array('cate_id'=>$vo['id'])); ?>"><?php echo str_repeat('-', 8*$vo['cate_level']); ?><?php echo htmlentities($vo['cate_name']); ?></a>
                            
                                      </td>
                                      <td class="text-c listorder">
                                          <input size="10" attr-id="<?php echo htmlentities($vo['id']); ?>" attr-model="category" class="public_listorder" name="listorder"  value="<?php echo htmlentities($vo['listorder']); ?>"/>
                                        </td>
                                        <td>
                                          <a href="<?php echo url('category/edit',array('id'=>$vo['id'])); ?>" title="修改"><i class="layui-icon layui-icon-edit"></i></a>

                                          <a onClick="public_del('<?php echo url('category/del', ['id'=>$vo['id']]); ?>')" href="javascript:;"  title="删除"><i class="layui-icon layui-icon-delete"></i></a>
                                        </td>
                                      </tr>
                                      <?php endforeach; endif; else: echo "" ;endif; ?>
            
                                    </tbody>
                                  </table>
                            </div>
                           
                </div>
                

            </div>
        </div>
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

    <script>
        //栏目伸缩状态js
           $('tr[parentid!=0]').hide();
           $('.open').click(function(){
               var id=$(this).parents('tr').attr('id');
               if($(this).text()=='+'){
                   $(this).text('-');
                   $('tr[parentid='+id+']').show();
               }else{
                   $(this).text('+');
                   $('tr[parentid='+id+']').hide();
               }
           });
       </script>


</body>

</html>