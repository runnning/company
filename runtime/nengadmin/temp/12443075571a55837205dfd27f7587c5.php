<?php /*a:5:{s:63:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\category\add.html";i:1585987584;s:62:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\public\meta.html";i:1605534304;s:62:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\public\left.html";i:1606668990;s:61:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\public\top.html";i:1606669188;s:62:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\public\foot.html";i:1605534304;}*/ ?>
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
          <form class="layui-form" action="" method="post">
            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
              <ul class="layui-tab-title">
                <li class="layui-this">基本信息</li>
                <li>SEO信息</li>
                <li>栏目内容</li>
              </ul>

              <div class="layui-tab-content mar_t_30">
                <div class="layui-tab-item layui-show">
                  <div class="layui-form-item">
                    <label class="layui-form-label">分类名称</label>
                    <div class="layui-input-block">
                      <input type="text" name="cate_name" class="layui-input">
                    </div>
                  </div>
                
                  <div class="layui-form-item">
                    <label class="layui-form-label">上级栏目</label>
                    <div class="layui-input-block">
                      <select name="parent_id" class="select">

                        <option value="0">顶级分类</option>

                        <?php if(is_array($categoryTree) || $categoryTree instanceof \think\Collection || $categoryTree instanceof \think\Paginator): $i = 0; $__LIST__ = $categoryTree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                        <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo str_repeat('-', 8*$vo['cate_level']); ?><?php echo htmlentities($vo['cate_name']); ?>
                          </option> <?php endforeach; endif; else: echo "" ;endif; ?> 
                      </select> 
                    </div> 
                  </div> 


                    <div class="layui-form-item">
                      <label class="layui-form-label">外部链接</label>
                      <div class="layui-input-block">
                        <input type="text" name="link" class="layui-input">
                      </div>
                    </div>
                    <div class="layui-form-item">
                      <label class="layui-form-label">图片上传</label>
                      <div class="layui-input-block">
                        <button type="button" class="layui-btn" id="test1">
                          <i class="layui-icon">&#xe67c;</i>上传图片
                        </button>
                        <div class="public_thumb_box" attr-model="category">
                            <input type="text" name="thumb" value="" class="public_thumb_input layui-input" style="width: 500px">
                            <img src="" class="public_thumb" width="150">
                            <div class="delete_img"><i class="layui-icon layui-icon-delete"></i></div>
                          
                        </div>

                      </div>
                    </div>
                    
                  </div>

                  <div class="layui-tab-item">


                    <div class="layui-form-item">
                      <label class="layui-form-label">SEO标题</label>
                      <div class="layui-input-block">
                        <input type="text" name="seo_title" class="layui-input">
                      </div>
                    </div>
                    <div class="layui-form-item">
                      <label class="layui-form-label">SEO关键词</label>
                      <div class="layui-input-block">
                        <input type="text" name="seo_keywords" class="layui-input">
                      </div>
                    </div>
                    <div class="layui-form-item">
                      <label class="layui-form-label">SEO描述</label>
                      <div class="layui-input-block">
                        <textarea name="seo_description" class="layui-textarea"></textarea>
                      </div>
                    </div>


                  </div>

                  <div class="layui-tab-item">
                      <script id="editor" type="text/plain" name="content" style="width:100%;height:300px;"></script>
                  </div>

                </div>

                <div class="layui-form-item text_center">
                  <button class="layui-btn" type="submit">立即提交</button>
                </div>
              </div>
          </form>
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
    var ue = UE.getEditor('editor');
  </script>


</body>

</html>