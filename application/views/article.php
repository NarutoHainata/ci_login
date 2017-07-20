<div class="row" style="margin-top:20px;">
	<div class="col-md-6 col-md-offset-3">
		<ul class="nav nav-tabs nav-justified">
	<li class="active">
		<a href="<?php echo base_url();?>index.php/welcome/index/articles">文</a>
		</li>
		<li><a href="<?php echo base_url();?>index.php/welcome/index/images">图</a></li>	
</ul>
	</div>
	<div class="col-md-6 col-md-offset-3" style="margin-top:30px;">
		<?php echo validation_errors();?>
		<?php echo form_open('myfile/createArticle')?>
    <input name="title" type="text" placeholder="Title" style="width:100%"/>
    <hr/>
    <textarea name="content" data-provide="markdown" rows="10" style="width:100%"></textarea>

    <hr/>
    <div class="row">
    	<div class="col-md-10 col-md-offset-2">
    		<a href="#" class="button button-glow button-border button-rounded button-primary button-small">情感天地</a>
   		 	<a href="#" class="button button-glow button-border button-rounded button-primary button-small">生活真理</a>
    		<a href="#" class="button button-glow button-border button-rounded button-primary button-small">悬疑推理</a>
    		<a href="#" class="button button-glow button-border button-rounded button-primary button-small">冒险传说</a>
    	</div>
    	<div class="col-md-12" style="margin-top:10px;">
    		 <a href="#" class="button button-glow button-border button-rounded button-primary button-small">鬼怪奇谭</a>
    		<a href="#" class="button button-glow button-border button-rounded button-primary button-small">人文历史</a>
    		<a href="#" class="button button-glow button-border button-rounded button-primary button-small">心灵鸡汤</a>
    		<a href="#" class="button button-glow button-border button-rounded button-primary button-small">为爱所困</a>
    	</div>
    </div>
    
   
    <hr/>
    <button type="submit" class="btn">Submit</button>
  </form>
	</div>
</div>
