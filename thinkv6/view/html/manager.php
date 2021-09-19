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
                <ul class="nav nav-tabs" style="margin-bottom:15px">
                    <li class="active">
                        <a href="#panel-941071" data-toggle="tab">项目管理</a>
                    </li>
                    <li>
                        <a href="#panel-910581" data-toggle="tab">新建项目</a>
                    </li>
                    <li>
                        <a href="#panel-910582" data-toggle="tab">检索中心</a>
                    </li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane active" id="panel-941071">

                        <div class="navbar navbar-inverse" style="margin-bottom:10px;">
                            <div class="navbar-inner"
                                 style="padding-left: 600px; border-color: #fdffff;background-image: linear-gradient(to bottom, rgb(83,165,83), rgb(83,165,83));">
                                <div class="container-fluid">
                                    <a class="brand" href="?m=info">项目大厅</a>
                                </div>
                            </div>
                        </div>

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
                            <?php echo $html_str; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane" id="panel-910581">
                        <form action="?m=manager&c=new" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">所属客户</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="customer">
                                        {foreach $customer as $key=>$vo }
                                        <option value="{$vo.id}">{$vo.name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">URL <font color="orange" size="2px">tag：添加多个URL时使用回车换行，每行一个URL地址</font>
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" cols="200" style="width:500px"
                                              name="url"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">扫描周期</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="delay">
                                        <option value="4">仅一次</option>
                                        <option value="1">每月一次</option>
                                        <option value="2">每季度一次</option>
                                        <option value="3">每半年一次</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">账号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="user"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">密码</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pwd"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">COOKIE</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" cols="200" style="width:500px"
                                              name="cookie"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">扫描策略</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="rule">
                                        <option value="4">Default</option>
                                        <option value="1">SQL</option>
                                        <option value="2">XSS</option>
                                        <option value="3">CSRF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="auth"/>认证扫描
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn">提交扫描</button>
                                    <button type="submit" class="btn">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="panel-910582">
                        <form action="?m=search&c=search" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> 站点名称 </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" placeholder="站点名称">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">URL</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="url" placeholder="URL">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">所属客户</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="customer">
                                        <option value="">所有客户</option>

                                        {foreach $customer as $key=>$vo }
                                        <option value="{$vo.id}">{$vo.name}</option>
                                        {/foreach}

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">扫描周期</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="delay">
                                        <option value="">所有模式</option>
                                        <option value="1">每月一次</option>
                                        <option value="2">每季度一次</option>
                                        <option value="3">每半年一次</option>
                                        <option value="4">不扫描</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">操作系统</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="os" placeholder="如：Linux、Win等">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">开放端口</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="port" placeholder="如：8080、7001等">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">中间件</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="middleware"
                                           placeholder="如：IIS、Apache、Weblogic等">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">CMS</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="cms"
                                           placeholder="如：Dede、Jcms、Wordpress等">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">开发技术</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="language"
                                           placeholder="如：php、jsp、asp.net等">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn">搜索</button>
                                    <button type="submit" class="btn">取消</button>
                                </div>
                            </div>
                        </form>

                    </div>


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