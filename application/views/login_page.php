<!-- login_page.php -->
<?php echo validation_errors();?>
<?php echo form_open('LoginCon/login_check')?>
<label for="username">Username</label>
<input type="text" name="username" value="username">
<br>
<label for="password">Password</label>
<input type="password" name="password" value="password">
<br>
<input type="submit" name="submit" value="submit">
</form>