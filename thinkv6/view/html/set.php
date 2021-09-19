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
                        <a href="#panel-941070" data-toggle="tab">用户列表</a>
                    </li>
                    <li>
                        <a href="#panel-910581" data-toggle="tab">添加用户</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="panel-941070">
                        <table class="table" style="font-size:14px;">
                            <thead>
                            <tr>
                                <th style="text-align:center">
                                    序号
                                </th>
                                <th style="text-align:center">
                                    用户名
                                </th>
                                <th style="text-align:center">
                                    邮箱
                                </th>
                                <th style="text-align:center">
                                    手机
                                </th>
                                <th style="text-align:center">
                                    状态
                                </th>
                                <th style="text-align:center">
                                    操作
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php echo $html_str; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="panel-910581">

                        <form action="?m=set&c=new" method="POST"  class="form-horizontal">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">用户名</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="username"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">密码</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="passwd"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">邮箱</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="mail"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">手机</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="phone"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">状态</label>
                                    <div class="col-sm-10"><select name="status" class="form-control">
                                            <option value="1">启用</option>
                                            <option value="0">禁用</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">角色</label>
                                    <div class="col-sm-10"><select name="group" class="form-control">
                                            <option value="1">admin</option>
                                            <option value="0">user</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-10">
                                        <label class="checkbox"></label>
                                        <button type="submit" class="btn">添加</button>
                                        <button type="submit" class="btn">取消</button>
                                    </div>
                                </div>
                        </form>

                    </div>

                    <?php echo set_display(); ?>


                    <div id="cpasswd-<?php echo $username ?>" class="modal hide fade" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <form action="" method="POST">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="myModalLabel">
                                    <?php echo $username ?>的密码修改
                                </h3>
                            </div>
                            <div class="modal-body">
                                <fieldset>
                                    <label>旧 密 码</label><input type="text" value="" name="oldpasswd"/>
                                    <label>新 密 码</label><input type="text" value="" name="newpasswd"/>
                                    <label>重新输入</label><input type="text" value="" name="repasswd"/>
                                </fieldset>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                                <button class="btn btn-primary" onclick="cpasswd()">保存设置</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>