<div id="myCarousel" class="carousel slide">
      <!-- 轮播指标 -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- 轮播项目 -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://localhost/cipro/bs/images/6.jpg" alt="first slide" >
        </div>
        <div class="item">
          <img src="http://localhost/cipro/bs/images/7.jpg" alt="second slide" >
        </div>
        <div class="item">
          <img src="http://localhost/cipro/bs/images/9.jpg" alt="third slide" >
        </div>
      </div>
      <!-- 轮播导航 -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="trie"></span>
      </a>
    </div>
    <!-- 标签 -->
    <div class="row row-lab1">
      <div class="col-md-6 col-md-offset-3">
        <span class="label label-default">情感治愈</span>
        <span class="label label-default">生活真理</span>
        <span class="label label-default">悬疑侦探</span>
        <span class="label label-default">惊悚冒险</span>
        <span class="label label-default">科幻探险</span>
        <span class="label label-default">心灵鸡汤</span>
        <div class="btn-group" role="group" aria-label="..." style="float:right; margin-top:-10px;">
          <button type="button" class="btn btn-default">
            更多热门<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
          </button>
          <!-- <a href="#">更多热门<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a> -->
         </div>
        
        
      </div>
    </div>

    <!-- 正文 -->
    <!-- 循环 -->
    <div id="msg">
       <?php
  foreach ($msg as $art): 
    
?><div class="row" style="margin-top:40px;">
      <div class="col-md-6 col-md-offset-3">
        <div class="row" style="border-top-color:gray;border-top-width:1px; border-top-style:solid;padding:10px;">
          <div class="col-sm-12">
            <img src="http://localhost/cipro/bs/images/jr.png" alt="头像" class="img-circle">
            <label><span><?php echo $art['author'];?></span></label>
            <label><span><?php echo $art['public_time'];?></span></label>
          </div>
          <div class="col-sm-12">
            <!-- 标题 -->
            <label><?php echo $art['title'];?></label>
          </div>
          <div class="col-sm-12"><?php echo $art['text'];?>
          </div>
          <div class="col-sm-12">
            <span class="label label-default">生活真理</span>
            <!-- 浏览 -->
            <label><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><?php echo $art['num_scan'];?></label>
            <!-- 评论 -->
            <label><span class="glyphicon glyphicon-comment" aria-hidden="true"></span><?php echo $art['num_comment'];?></label>
            <!-- 点赞 -->
            <label><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span><?php echo $art['num_up'];?></label>
            <!-- 打赏 -->
            <label><span class="glyphicon glyphicon-jpy" aria-hidden="true"></span><?php echo $art['num_money'];?></label>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    </div>
   

<!-- 加载更多 -->
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <button type="button" value="加载更多" name="加载更多" id="moreMsg" onclick="fun()" class="button button-block button-rounded button-large" style="width:100%;margin:30px 0;">加载更多</button> 
  </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="http://localhost/cipro/bs/js/bootstrap.min.js"></script>  
</body>
</html>