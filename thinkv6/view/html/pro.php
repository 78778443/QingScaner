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
                        <a href="#panel-941070" data-toggle="tab">插件列表</a>
                    </li>
                    <!--<li>-->
                    <!--<a href="#panel-941050" data-toggle="tab">专项检测</a>-->
                    <!--</li>-->
                    <li>
                        <a href="#panel-910581" data-toggle="tab">添加插件</a>
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
                                    插件名称
                                </th>
                                <th style="text-align:center">
                                    插件描述
                                </th>
                                <th style="text-align:center">
                                    插件类型
                                </th>
                                <th style="text-align:center">
                                    插件地址
                                </th>
                                <th style="text-align:center">
                                    备注
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

                        <div action="?m=pro&c=new" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">插件名称</label>
                                <div class="col-sm-10"><input type="text" class="form-control"  name="username"/></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">插件描述</label>
                                <div class="col-sm-10"><input type="text"  class="form-control"  style="width:300px" name="passwd"/></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">插件类型</label>
                                <div class="col-sm-10"><select  class="form-control"  name="type">
                                        <option value="1">POC插件</option>
                                        <option value="2">爬虫插件</option>
                                        <option value="3">通用插件</option>
                                    </select></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">插件地址</label>
                                <div class="col-sm-10"><input type="text"  class="form-control"  style="width:300px" name="phone"/></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">详细代码</label>
                                <div class="col-sm-10">
                                    <textarea   class="form-control"  rows="10" cols="200" style="width:500px"
                                              name="remark"></textarea></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">备注信息</label>
                                <div class="col-sm-10">
                                    <textarea  class="form-control"  rows="2" cols="200" style="width:500px"
                                              name="remark"></textarea></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
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
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                    </button>
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