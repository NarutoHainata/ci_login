	<div class="row login">
		<div class="col-md-4 col-md-offset-4 login_con">

			<div class="row">
				<div class="col-md-12 login_tit">login</div>
				<!-- 登录输入框 -->
				<div class="col-md-12 login_text">

					<?php echo validation_errors();?>
					<?php echo form_open('LoginCon/login_check')?>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" placeholder="username" name="username" value="">
					</div>
					<div class="form-group">
						<label for="pw">password</label>
						<input type="password" class="form-control" id="pw" placeholder="password" name="password" value="">
					</div>
					<!-- <input type="button" name="submit" value="submit" class="btn btn-default"> -->
					<input type="submit" name="submit" value="submit" class="btn btn-default btn-block btn_submit">
					<!-- <label for="username">Username</label>
					<input type="text" name="username" value="" class="input_user">
					<br>
					<label for="password">Password</label>
					<input type="password" name="password" value="">
					<br>
					<input type="submit" name="submit" value="submit"> -->
					</form>
				</div>
			</div>
		</div>
	</div>






