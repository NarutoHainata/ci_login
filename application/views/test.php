<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>test</title>
	<script src="<?php echo base_url();?>bs/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	function load(){
$(".fi").mouseover(function() {
		$(".sl").slideDown(500);
	});

	}
	
	</script>
</head>
<body onload="load()">
	<div class="content">
		<p class="fi">滑动到这儿</p>
		<div class="sl" style="display:none;">
			<p>111111</p>
			<p>222222</p>
		</div>
	</div>
</body>
</html>