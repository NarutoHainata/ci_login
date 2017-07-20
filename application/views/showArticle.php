


    <?php
     // echo $this->pagination->create_links();
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
<div class="row"> 
  <div class="col-md-6 col-md-offset-3">

 <ul class="pagination">
      <li><a href="#">&laquo;</a></li>
      
      <li><a href="http://localhost/cipro/index.php/welcome/index/showarticle/0">1</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>
  </div>
</div>

   