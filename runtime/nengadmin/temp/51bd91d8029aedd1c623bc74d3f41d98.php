<?php /*a:5:{s:64:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\content\index.html";i:1605965574;s:62:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\public\meta.html";i:1605534304;s:62:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\public\left.html";i:1606668990;s:61:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\public\top.html";i:1606669188;s:62:"D:\phpEnv\www\www.blog.com\app\nengadmin\view\public\foot.html";i:1605534304;}*/ ?>
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
                                <a><cite>文档管理</cite></a>
                            </span>
                            <div class="mar_t_15 ">

                                <a class="layui-btn " href="<?php echo url('content/add',array('cate_id'=>$cate_id)); ?>">+添加</a>
                         
                                <form class="public_search_form mar_b_30">
                                    <input type="text" name="searchkey" autocomplete="off" class="layui-input fleft"  value="<?php echo htmlentities((isset($searchkey) && ($searchkey !== '')?$searchkey:'搜索关键字')); ?>" >
      
                                    <select name="cate_id" class="public_select fleft">
                                        
                                      <option value="">全部</option>
                                      <?php if(is_array($categoryData) || $categoryData instanceof \think\Collection || $categoryData instanceof \think\Paginator): $i = 0; $__LIST__ = $categoryData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo htmlentities($vo['id']); ?>"
                                              <?php if($vo['id'] == $cate_id): ?>
                                        selected="" 
                                        <?php endif; ?>
                                        ><?php echo str_repeat('-', 8*$vo['cate_level']); ?><?php echo htmlentities($vo['cate_name']); ?></option>
                                      <?php endforeach; endif; else: echo "" ;endif; ?>
                                                        
                                      </select>  
                                    <button class="layui-btn fleft" type="submit">搜索</button>
                                </form>
                            </div>
                            <div class="mar_t_15">
                                <table class="layui-table ">
            
                                    <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>标题</th>
                                        <th>所属分类</th>
                                        <th>排序序号<br><span class="tishi" style="font-weight: normal;">数字越小越靠前</span></th>
                                        <th>发布时间</th>
                                        <th>操作</th>
                                      </tr> 
                                    </thead>
                                    <tbody>
                                            <?php if(is_array($archivesData) || $archivesData instanceof \think\Collection || $archivesData instanceof \think\Paginator): $i = 0; $__LIST__ = $archivesData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                        <td><?php echo htmlentities($vo['id']); ?></td>
                                        <td><?php echo htmlentities($vo['title']); ?></td>
                                        <td><?php echo htmlentities($vo['cate_name']); ?></td>
                                        <td class="text-c listorder"><input type="number" size="4" attr-id="<?php echo htmlentities($vo['id']); ?>" attr-model="archives" name="listorder" value="<?php echo htmlentities($vo['listorder']); ?>" class="public_listorder"></td>
                                        <td><?php echo htmlentities(date("Y-m-d H:i",!is_numeric($vo['time'])? strtotime($vo['time']) : $vo['time'])); ?></td>
                                        <td>
                                          <a href="<?php echo url('content/edit',array('id'=>$vo['id'])); ?>" title="修改"><i class="layui-icon layui-icon-edit"></i></a>
                                          <a onClick="public_del('<?php echo url('content/delect', ['id'=>$vo['id']]); ?>')" href="javascript:;"  title="删除"><i class="layui-icon layui-icon-delete"></i></a>
                                        </td>
                                      </tr>
                                      <?php endforeach; endif; else: echo "" ;endif; ?>
            
                                    </tbody>
                                  </table>
                                  <?php echo $archivesData; ?>
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




</body>

</html>