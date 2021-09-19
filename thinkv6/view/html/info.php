<!DOCTYPE html>
<html>
<head>
    {include file="common/head" /}
</head>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            {include file="common/menu" /}
			<div class="tabbable" id="tabs-25550">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-941070" data-toggle="tab">信息搜集</a>
					</li>
					<li>
						<a href="#panel-910580" data-toggle="tab">新建搜集</a>
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
									IP地址
								</th>
								<th style="text-align:center">
									端口
								</th>
								<th style="text-align:center">
									子域
								</th>
								<th style="text-align:center">
									敏感
								</th>
								<th style="text-align:center">
									CMS
								</th>
								<th style="text-align:center">
									WAF
								</th>
								<th style="text-align:center">
									OS
								</th>
								<th style="text-align:center">
									中间件
								</th>
								<th style="text-align:center">
									其他
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

					<div class="tab-pane" id="panel-910580">

						<form action="?m=info&c=new" method="POST">
							<fieldset>
								<label>URL&nbsp;&nbsp;&nbsp;<font color="orange" size="2px">tag：添加多个URL时使用回车换行，每行一个URL地址</font></label><textarea rows="5" cols="200" style="width:500px" name="url"></textarea>

								<label>所属客户</label>

								<select name="customer">
                                    {foreach $customer as $key=>$vo }
                                    <option value="{$vo.id}">{$vo.name}</option>
                                    {/foreach}
								</select>


								<label>账号</label><input type="text" name="user"/>
								<label>密码</label><input type="text" name="pwd"/>

								<label class="checkbox"><input type="checkbox" name="auth" /> 登录搜集 </label>
								<button type="submit" class="btn">提交搜集</button>
								<button type="submit" class="btn">取消</button>
							</fieldset>
						</form>

					</div>


					<?php echo info_display();?>

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