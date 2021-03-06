<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html>
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8" />
<title>秀管家</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="<?php echo (C("WEB_RES_ROOT")); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo (C("WEB_RES_ROOT")); ?>/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="<?php echo (C("WEB_RES_ROOT")); ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="<?php echo (C("WEB_RES_ROOT")); ?>/css/style.css" rel="stylesheet" />
<link href="<?php echo (C("WEB_RES_ROOT")); ?>/css/style-responsive.css" rel="stylesheet" />
<link href="<?php echo (C("WEB_RES_ROOT")); ?>/css/style-default.css" rel="stylesheet"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
	<div class="lock-header">
		<!-- BEGIN LOGO -->
		<a class="center" id="logo" href="<?php echo (C("ACTION_BASE_DIR")); ?>/">
			<h1>秀管家</h1>
		</a>
		<!-- END LOGO -->
	</div>
	<form action="<?php echo (C("ACTION_BASE_DIR")); ?>/admin/adminLogin" method="post" id="loginForm" class="cmxform">
		<div class="login-wrap">
			<div class="metro single-size red">
				<div class="locked">
					<i class="icon-lock"></i> <span>登录</span>
				</div>
			</div>
			<div class="metro double-size green">
				<div class="input-append lock-input">
					<input type="text" class="" placeholder="管理员用户名" name="admin_name">
				</div>
			</div>
			<div class="metro double-size yellow">
				<div class="input-append lock-input">
					<input type="password" class="" placeholder="密码" name="admin_password">
				</div>
			</div>
			<div class="metro single-size terques login">
				<button type="button" class="btn login-btn" id="login_btn">
					登录 <i class=" icon-long-arrow-right"></i>
				</button>
			</div>
			<!--
			<div class="login-footer">
				<div class="remember-hint pull-left">
					<input type="checkbox" id=""> 记住密码
				</div>
				<div class="forgot-hint pull-right">
					<a id="forget-password" class="" href="javascript:;">忘记密码?</a>
				</div>
			</div>
			-->
		</div>
	</form>
</body>
<!-- END BODY -->
<!-- Begin JavaScript -->
<script type="text/javascript" charset="utf-8">
	var action_base_dir = 	"<?php echo (C("ACTION_BASE_DIR")); ?>";
</script>
<script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/jquery.validate.min.js"></script>
<script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/jquery.form.min.js"></script>
<script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/layer/layer.js"></script>
<script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/customer/common.js"></script>
<script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/customer/login.js"></script>
<!-- End JavaScript -->
</html>