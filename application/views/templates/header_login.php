<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo $tit;?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>bs/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url();?>bs/js/jquery-3.2.1.min.js"></script>
    <!-- 自定义导入 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bs/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bs/css/show.css">
    <script src="http://localhost/cipro/bs/js/style.js"></script>
    <script src="<?php echo base_url();?>bs/js/base.js"></script>

      <!-- Buttons 库的核心文件 -->
  <link rel="stylesheet" href="<?php echo base_url();?>bs/css/buttons.css">
 
  <!-- 当需要使用带下拉菜单的按钮时才需要加载下面的 JavaScript 文件 -->
  <!-- // <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script> -->
  <script type="text/javascript" src="<?php echo base_url();?>bs/js/buttons.js"></script>
   <!-- json解析 -->
    <script src="<?php echo base_url();?>bs/js/json_parse.js"></script>
 
  <!-- 只有使用字体图标时才需要加载 Font-Awesome -->
  <link href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <!-- 自定义导入 -->
    <script type="text/javascript">
    function load () {
  $("#up").hide();

  $(document).bind('scroll',function(){
    var len = $(this).scrollTop();
    console.log(len);
    if (len>=100) {
      $("#up").show();
    }else{
      $("#up").hide();
    }
  });
  
  $('#userimg').find('a').hover(function(){
  // 插入退出a标签
  },function(){
    // 移除退出a标签
  });

  $(".sl").mouseover(function() {
    $(".setting").slideDown(500);
  });
  $(".sli").mouseleave(function() {
    $(".setting").slideUp(500);
  });

}
function scrollToTop () {
  $('body,html').animate({scrollTop:0},1000);
}
    var i = 0;
    function fun () {
      i = i + 1;
    $.ajax({
        type:'POST',
        url:'http://localhost/cipro/index.php/welcome/scan_more',
        data:{
          "num":i
        },
        success:function(art){
          var obj;
         //判断返回的json数据是否为对象 
         // if((typeof obj == 'object') && obj.constructor == Object) {
         //  alert(obj.msg[0].uid);
         // }
         //如果是字符串，进行转对象
         if((typeof art == 'string') && art.constructor == String){
            obj = json_parse(art);
            if (obj.msg.length == 0) {
              $("#moreMsg").text("已经到最后了");
              $('#moreMsg').addClass('disabled');
            }
        }
        // var htmlobj;
        // htmlobj+="<div class='row' style='margin-top:40px'><div class='col-md-6 col-md-offset-3'><div class='row' style='border-top-color:gray;border-top-width:1px;border-top-style:solid;padding:10px;'><div class='col-sm-12'><img src='http://localhost/cipro/bs/images/jr.png' alt='头像' class='img-circle'><label><span>"+obj.msg[i].author+"</span></label><label><span>"+obj.msg[i].public_time+"</span></label></div><div class='col-sm-12'><label>"+obj.msg[i].title+"</label></div><div class='col-sm-12'>"+obj.msg[i].text+"</div><div class='col-sm-12'><span class='label label-default'>生活真理</span><label><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span>"+obj.msg[i].num_scan+"</label><label><span class='glyphicon glyphicon-comment' aria-hidden='true'></span>"+obj.msg[i].num_comment+"</label><label><span class='glyphicon glyphicon-thumbs-up' aria-hidden='true'></span>"+obj.msg[i].num_up+"</label><label><span class='glyphicon glyphicon-jpy' aria-hidden='true'></span>"+obj.msg[i].num_money+"</label></div></div></div></div>";
        for (var i = 0; i <obj.msg.length; i++) {
          //插入html
          // var ped1 = "<div class='row' style='margin-top:40px'>";
          // var ped2 = "<div class='col-md-6 col-md-offset-3'>";
          // var ped3 = "<div class='row' style='border-top-color:gray;border-top-width:1px;border-top-style:solid;padding:10px;'>";
          // var ped4 = "<div class='col-sm-12'>";
          // var ped5 = "<img src='http://localhost/cipro/bs/images/jr.png' alt='头像' class='img-circle'>";
          // var ped6 = "<label><span>"+obj.msg[i].author+"</span></label>";
          // var ped7 = "<label><span>"+obj.msg[i].public_time+"</span></label></div>";
          // var ped8 = "<div class='col-sm-12'><label>"+obj.msg[i].title+"</label></div>";
          // var ped9 = "<div class='col-sm-12'>"+obj.msg[i].text+"</div>";
          // var ped10 = "<div class='col-sm-12'><span class='label label-default'>生活真理</span>";
          // var ped11 = "<label><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span>"+obj.msg[i].num_scan+"</label>";
          // var ped12 = "<label><span class='glyphicon glyphicon-comment' aria-hidden='true'></span>"+obj.msg[i].num_comment+"</label>";
          // var ped13 = "<label><span class='glyphicon glyphicon-thumbs-up' aria-hidden='true'></span>"+obj.msg[i].num_up+"</label>";
          // var ped14 = "<label><span class='glyphicon glyphicon-jpy' aria-hidden='true'></span>"+obj.msg[i].num_money+"</label>";
          // var ped15 = "</div></div></div></div>";
          $('#msg').append("<div class='row' style='margin-top:40px'><div class='col-md-6 col-md-offset-3'><div class='row' style='border-top-color:gray;border-top-width:1px;border-top-style:solid;padding:10px;'><div class='col-sm-12'><img src='http://localhost/cipro/bs/images/jr.png' alt='头像' class='img-circle'><label><span>"+obj.msg[i].author+"</span></label><label><span>"+obj.msg[i].public_time+"</span></label></div><div class='col-sm-12'><label>"+obj.msg[i].title+"</label></div><div class='col-sm-12'>"+obj.msg[i].text+"</div><div class='col-sm-12'><span class='label label-default'>生活真理</span><label><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span>"+obj.msg[i].num_scan+"</label><label><span class='glyphicon glyphicon-comment' aria-hidden='true'></span>"+obj.msg[i].num_comment+"</label><label><span class='glyphicon glyphicon-thumbs-up' aria-hidden='true'></span>"+obj.msg[i].num_up+"</label><label><span class='glyphicon glyphicon-jpy' aria-hidden='true'></span>"+obj.msg[i].num_money+"</label></div></div></div></div>");
          
        }
      }
      });
  }
    </script>
    <style type="text/css">
    .setting {
      position: fixed;
      float: right;
    }
    </style>
  </head>
  <body onload="load()">
    <!-- 导航 -->
    <!-- 回到顶部 -->
    <div id="up" onclick="scrollToTop()" style="position:fixed;bottom:20px;right:40px;width:40px;height:50px;background-color:#e6b27f;">
      <span class="glyphicon glyphicon-arrow-up" style="margin: 15px 12px;"></span>
     <!--  设置 -->
      <!-- <a href="javascript:;" class="btna">hello</a> -->
    </div>
    
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header" id="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url();?>index.php/welcome/index/index">CIPro</a>
        </div>
        <!-- 导航按钮 -->
        <div class="collapse navbar-collapse" id="bs-examples-navbar-collapse-1">
          <ul class="nav navbar-nav" id="yycustom">
            <li id="fir"><a href="http://localhost/cipro/index.php/welcome/index/index">推荐<span class="sr-only">(current)</span></a></li>
          <li><a href="http://localhost/cipro/index.php/welcome/index/showArticle">我的文章</a></li>
            <li><a href="http://localhost/cipro/index.php/welcome/index/showImages">我的图片</a></li>
            <li><a href="http://localhost/cipro/index.php/welcome/index/showTime">时光轴</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">关于<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">介绍</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">活动</a></li>
                <li><a href="#">展示</a></li>
                <li><a href="#">招聘</a></li>
              </ul>
            </li>
          </ul>
          <!-- 浮动到右侧 -->
          <!-- 登录注册 -->
          <div class="nav navbar-nav navbar-right sli">
            <div class="sl"><img src="http://localhost/cipro/bs/images/jr.png" alt="头像" class="img-circle">
            <span class="user">&nbsp;<?php echo $tit;?>&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
            <div class="setting" style="display:none;">
            <ul style="list-style-type:none;">
          <li><a href="#" style="color:red;text-decoration:none;">个人设置</a></li>
          <li><a href="#" style="color:red;text-decoration:none;">修改密码</a></li>
          <li><a href="#" style="color:red;text-decoration:none;">退出</a></li>
        </div>
          </div>
          <!-- <div class="sli">
            <img src="http://localhost/cipro/bs/images/jr.png" alt="头像" class="img-circle">
            <span class="user">&nbsp;<?php echo $tit;?>&nbsp;&nbsp;&nbsp;&nbsp;</span>  
           <div id="sl" class="row sl" >
            <div>
          <ul style="list-style-type:none;">
          <li><a href="#" style="color:white;text-decoration:none;">退出</a></li>
        </div>
      </div>
           </div>    -->
          <!-- <a id="imguser" href="#" style="text-decoration: none;margin-left:60px;height:48px;">
          </a> -->
          <!-- <div>
          <a href="<?php echo base_url();?>index.php/welcome/index/article" class="btn btn-default">写文/传图</a></div> -->    
        <!-- </ul>
      </div> -->
          
          <!-- <a href="#" class="per">个人资料<span class="caret"></span></a> -->
          <!-- <a href="<?php echo base_url();?>"></a> 
          <?php echo anchor("welcome/signout","sign out"); ?>-->
          
          <!-- <div class="btn-group">
          	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">个人资料<span class="caret"></span></button>
          	<ul class="dropdown-menu" role="menu"> -->
          		<!-- <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-user"></span>我的主页</button> -->
          		<!-- <span class="glyphicon glyphicon-user"></span> -->
          		<!-- <li><a href="#">我的主页</a></li> -->
          		<!-- <span class="glyphicon glyphicon-jpy"></span> -->
          		<!-- <li><a href="#">我的钱包</a></li> -->
          		<!-- <span class="glyphicon glyphicon-cog"></span> -->
          		<!-- <li><a href="#">我的设置</a></li> -->
          		<!-- <span class="glyphicon glyphicon-log-out"></span> -->
          		<!-- <li><a href="#">退出</a></li> -->
          	<!-- </ul> -->
          <!-- </div> -->
      
          <!-- 搜索框 -->
        <form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>

        </div>
      </div>
    </nav>