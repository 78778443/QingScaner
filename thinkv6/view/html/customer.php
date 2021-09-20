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
                        <a href="#panel-941070" data-toggle="tab">客户列表</a>
                    </li>
                    <li>
                        <a href="#panel-910581" data-toggle="tab">客户录入</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="panel-941070">
                        <!--
                             <button class="btn btn-primary" type="button">启动定时任务</button> <button class="btn btn-primary" type="button">手动刷新</button>
                             -->
                        <table class="table" style="font-size:14px;">
                            <thead>
                            <tr>
                                <th style="text-align:center">
                                    ID
                                </th>
                                <th style="text-align:center">
                                    客户名称
                                </th>
                                <th style="text-align:center">
                                    网站数量
                                </th>
                                <th style="text-align:center">
                                    联系人
                                </th>
                                <th style="text-align:center">
                                    手机
                                </th>
                                <th style="text-align:center">
                                    邮箱
                                </th>

                                <th style="text-align:center">
                                    服务期限
                                </th>
                                <th style="text-align:center">
                                    服务类型
                                </th>
                                <th style="text-align:center">
                                    扫描周期
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
                        <form action="<?=url('customer/new') ?>" method="POST" class="form-horizontal">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">客户名称</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="name"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">联系人</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="contact"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">手机</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="phone"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">邮箱</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">通讯地址</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="address"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">服务期限</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" value="2017.01.20" style="width:180px"
                                           name="date1"/>&nbsp;&nbsp;至&nbsp;&nbsp;<input
                                            type="date" class="form-control" value="2018.01.20" style="width:180px"
                                            name="date2"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">服务类型</label>
                                <div class="col-sm-10">
                                    <select name="type" class="form-control">
                                        <option value="1">定期扫描+漏洞预警+敏感字检测</option>
                                        <option value="2">漏洞预警+敏感字检测</option>
                                        <option value="3">漏洞预警+定期扫描</option>
                                        <option value="4">漏洞预警</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">扫描周期</label>
                                <div class="col-sm-10">
                                    <select name="delay" class="form-control">
                                        <option value="4">仅一次</option>
                                        <option value="1">每月一次</option>
                                        <option value="2">每季度一次</option>
                                        <option value="3">每半年一次</option>
                                    </select>
                                </div>
                            </div>
                            <!--<label class="checkbox"><input type="checkbox" name="auth" /> 定期扫描 </label>-->

                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                <textarea rows="2" cols="200"
                                          style="width:500px"
                                          name="remark"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">备注</label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success">保存</button>
                                    <button type="submit" class="btn">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <?php echo customer_display(); ?>

                    <div id="cpasswd-<?php echo $username ?>" class="modal hide fade" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">
                                <?php echo $username ?>的密码修改
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
                            <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                            <button class="btn btn-primary" onclick="cpasswd()">保存设置</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</html>