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
                        <a href="#panel-941070" data-toggle="tab">节点列表</a>
                    </li>
                    <li>
                        <a href="#panel-910581" data-toggle="tab">添加节点</a>
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
                                    节点IP
                                </th>
                                <th style="text-align:center">
                                    端口
                                </th>
                                <th style="text-align:center">
                                    任务状态
                                </th>
                                <th style="text-align:center">
                                    启用状态
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

                        <form action="?m=point&c=new" method="POST" class="form-horizontal">
                            <div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">节点IP</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="ip"/></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">节点端口</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="port"/></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">状态</label>
                                    <div class="col-sm-10"><select name="status" class="form-control">
                                            <option value="1">启用</option>
                                            <option value="0">禁用</option>
                                        </select></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn">添加节点</button>
                                        <button type="submit" class="btn" data-dismiss="modal">取消</button>
                                    </div>
                                </div>
                        </form>

                    </div>

                    <?php echo point_display(); ?>


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