<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="title" content="">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<title>客户管理 - <?php echo $soft_name?></title>

	<!-- Le styles -->
	<link href="static/css/bootstrap-combined.min.css" rel="stylesheet">
	<link href="static/css/layoutit.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="static/js/html5shiv.js"></script>
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="shortcut icon" href="img/favicon.png">

	<script type="text/javascript" src="static/js/jquery-2.0.0.min.js"></script>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="static/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="static/js/jquery-ui.js"></script>
	<script type="text/javascript" src="static/js/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="static/js/jquery.htmlClean.js"></script>
	<script type="text/javascript" src="static/js/scripts.js"></script>
	<script type="text/javascript" src="static/js/action.js"></script>
</head>


<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container-fluid">
						<a class="btn btn-navbar" data-target=".navbar-responsive-collapse" data-toggle="collapse"></a> <a class="brand" href="?m=index"><?php echo $soft_name?></a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							<ul class="nav">
								<li>
									<a href="?m=manager">管理中心</a>
								</li>
								<li class="active">
									<a href="?m=customer">客户管理</a>
								</li>

								<li>
									<a href="?m=scan">扫描管理</a>
								</li>
								<li>
									<a href="?m=info">信息搜集</a>
								</li>
								<li>
									<a href="?m=spider">站点爬虫</a>
								</li>
								<!--
								<li>
                                    <a href="?m=pro">专项检测</a>
                                </li>
								-->
								<li>
									<a href="?m=point">节点管理</a>
								</li>
								<li>
									<a href="?m=set">系统管理</a>
								</li>
								<li>
									<a href="?m=proxy">代理地址池</a>
								</li>
							</ul>
							<ul class="nav pull-right">
								<li class="active">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $username;?></a>
									<ul class="dropdown-menu">

										<li>
											<a id="modal-978241" href="#cpasswd-<?php echo $username?>" data-toggle="modal">修改密码</a>
										</li>
										<li>
											<a href="?m=logout">退出</a>
										</li>

									</ul>
								</li>
							</ul>
						</div>

					</div>
				</div>

			</div>
			<div class="tabbable" id="tabs-25550">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-941070" data-toggle="tab">客户详情</a>
					</li>

				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-941070">

						<table class="table" style="font-size:14px;">
							<thead>
							<tr>
								<th style="text-align:center">
									ID
								</th>
								<th style="text-align:center">
									站点
								</th>
								<th style="text-align:center">
									标题
								</th>
								<th style="text-align:center">
									高危
								</th>
								<th style="text-align:center">
									中危
								</th>
								<th style="text-align:center">
									低危
								</th>
								<th style="text-align:center">
									端口
								</th>
								<th style="text-align:center">
									子域
								</th>
								<th style="text-align:center">
									文件
								</th>
								<th style="text-align:center">
									暗链
								</th>
								<th style="text-align:center">
									敏感词
								</th>
								<th style="text-align:center">
									坏链
								</th>
								<th style="text-align:center">
									CMS
								</th>

								<th style="text-align:center">
									OS
								</th>
								<th style="text-align:center">
									中间件
								</th>
								<th style="text-align:center">
									操作
								</th>
							</tr>
							</thead>
							<tbody>
							<?php echo $html_str;?>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="panel-910581">

						<p>part 2.</p>

					</div>

					<?php echo scan_display();?>

					<div id="cpasswd-<?php echo $username?>" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h3 id="myModalLabel">
								<?php echo $username?>的密码修改
							</h3>
						</div>
						<div class="modal-body">
							<fieldset>
								<label>旧 密 码</label><input type="text" value="" name="oldpasswd" id="oldpasswd"/>
								<label>新 密 码</label><input type="text" value="" name="newpasswd" id="newpasswd"/>
								<label>重新输入</label><input type="text" value="" name="repasswd" id="repasswd"/>
							</fieldset>
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button> <button class="btn btn-primary" onclick="cpasswd()">保存设置</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>