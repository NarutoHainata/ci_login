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
    <!-- json解析 -->
    <script src="<?php echo base_url();?>bs/js/json_parse.js"></script>
    
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bs/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bs/css/show.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bs/css/buttons.css">
    <script src="http://localhost/cipro/bs/js/style.js"></script>
    <script src="<?php echo base_url();?>bs/js/base.js"></script>
    
  </head>
  <body onload="load()">
    <!-- 导航 -->
    <div id="up" onclick="scrollToTop()" style="position:fixed;bottom:20px;right:40px;width:40px;height:50px;background-color:#e6b27f;">
      <span class="glyphicon glyphicon-arrow-up" style="margin: 15px 12px;"></span>
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
            <!-- <li><a href="http://localhost/cipro/index.php/welcome/index/showArticle">热文</a></li> -->
            <!-- <li><a href="http://localhost/cipro/index.php/welcome/index/showImages">热图</a></li> -->
            <!-- <li><a href="http://localhost/cipro/index.php/welcome/index/showTime">时光轴</a></li> -->
            <li><a href="#">下载app</a></li>
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
          <ul class="nav navbar-nav navbar-right">
          <button id="btn1" type="button" class="btn btn-default navbar-btn" onclick="window.location='http://localhost/cipro/index.php/LoginCon/index'">登录 </button>
          <button id="btn2" type="button" class="btn btn-default navbar-btn" onclick="window.location='http://localhost/cipro/index.php/LoginCon/siginin'">注册 </button>
          <!-- <a id="userimg" href="#"><img src="http://localhost/cipro/bs/images/jr.png" alt="头像" class="img-circle"></a> -->
        </ul>
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