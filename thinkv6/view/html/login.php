<!Doctype html>
<html>
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- 国产双核浏览器用 start -->
	<meta name="renderer" content="webkit" />
	<!-- 国产双核浏览器用 end -->
	<meta name="title" content="汤青松Web分布式漏洞扫描系统">
	<meta name="keywords" content="漏洞扫描工具,网站漏洞检测工具,网站安全检测," />
	<meta name="description" content="汤青松在线漏洞扫描、分布式漏洞扫描、漏洞扫描、Web漏洞扫描、网站在线安全检测，一键式扫描，快速、全面诊断网站安全状况，深度扫描永久免费的漏洞扫描工具，不仅提供网站安全在线检测，更能提供基于云的安全防护的服务，让您的网站更安全。" />

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5">

	<title><?php echo $soft_name?></title>
	<style>
		.navbar1 {
			margin-bottom: 20px;
			overflow: visible;
		}
		.checkbox1 {
			min-height: 10px;
			padding-left: 10px;
			font-size: 15px;
		}
		.form-control {
			width: 206px;
			color: #b94a48;
		}

		input:focus:invalid:focus, textarea:focus:invalid:focus, select:focus:invalid:focus {
			border-color: #e9322d;
			box-shadow: 0 0 6px #f8504f;
		}

	</style>

	<link rel="stylesheet" href="static/css/vendor.css">

	<link rel="stylesheet" href="static/css/frame-all.css">

	<link rel="stylesheet" href="static/css/securitysearch.css">



</head>

<div id="root">

	<div class="headline-bg"></div>
	<section class="features-video section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<br>
					<div style="color: #fff;font-size: 30px;font-weight: 400;text-align: center;">汤青松分布式Web漏洞扫描系统</div>
					<br>

					<div class="search-input">
						<div style="text-align:center">
							<form class="form" action="?m=login" method="POST">
								<h3>Please sign in</h3><br>
								<h3>用户名：</h3>
								<input type="username" name="username" class="form-control" placeholder="Username" value="<?php echo $_COOKIE['user'];?>" required="" autofocus="">
								<br>
								<h3>密&nbsp;&nbsp;&nbsp;码：</h3>

								<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $_COOKIE['pass'];?>"  required="">
								<div class="checkbox1">
									<label>
										<?php if($_COOKIE['remember'] == 1){?><input style="margin: 10px 5px" type="checkbox" name="remember" value="1" checked>Remember me
										<?php }else{($_COOKIE['remember'] == "")?><input style="margin: 10px 5px" type="checkbox" name="remember" value="1">Remember me<?php }?></label>
								</div>
								<button class="btn" type="submit">Sign in</button>
							</form>
						</div>

					</div>

				</div>
			</div>
		</div>
	</section>
</div>
<div class="navbar1">

	<div class="navbar-inner">
		<div class="container" style="width: 100%;padding-left: 3px;padding-right: 3px;">
			<!--<div align="center">-->
			<ul class="breadcrumb">
				<li>
					关于我们
				</li>

			</ul>
			<p>
				&nbsp;&nbsp;&nbsp;关于我们：QingScanner漏洞扫描平台是汤青松的免费专业的分布式漏洞扫描平台，主机、域名一键式扫描，快速、全面诊断网站安全状况。
			</p>
			<p>
				&nbsp;&nbsp;&nbsp;联系方式：汤青松http://www.songboy.site
			</p>
		</div>
	</div>
</div>

</body>

</html>
