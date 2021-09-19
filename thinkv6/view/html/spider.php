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
                        <a href="#panel-941070" data-toggle="tab">爬虫列表</a>
                    </li>
                    <li>
                        <a href="#panel-910581" data-toggle="tab">新建爬虫</a>
                    </li>
                    <li>
                        <a href="#panel-910582" data-toggle="tab">URL检索</a>
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
                                    客户
                                </th>
                                <th style="text-align:center">
                                    状态
                                </th>
                                <th style="text-align:center">
                                    URL总量
                                </th>
                                <th style="text-align:center">
                                    动态URL
                                </th>
                                <th style="text-align:center">
                                    暗链检测
                                </th>
                                <th style="text-align:center">
                                    敏感词检测
                                </th>
                                <th style="text-align:center">
                                    坏链检测
                                </th>
                                <th style="text-align:center">
                                    网页快照
                                </th>
                                <th style="text-align:center">
                                    爬取周期
                                </th>
                                <th style="text-align:center">
                                    完成时间
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

                        <form action="?m=spider&c=new" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">URL </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" cols="200" style="width:500px"
                                              placeholder="添加多个URL时使用回车换行，每行一个URL地址"
                                              name="url"></textarea>
                                </div>
                            </div>
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
                                <label class="col-sm-2 control-label">爬取周期</label>
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
                                    <input type="text" class="form-control" name="user"/></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">密码</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="pwd"/></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="auth"/> 登录爬取
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn">提交爬取</button>
                                    <button type="submit" class="btn">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane" id="panel-910582">
                        <form action="?m=search&c=spider" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label control-label"><font color="orange"
                                                            size="2px">检索tag：请输入想要查询的关键字即可</font></label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">URL</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="url"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">所属客户</label>
                                <div class="col-sm-10">
                                    <select name="customer" class="form-control">
                                        <option value="">所有客户</option>
                                        {foreach $customer as $key=>$vo }
                                        <option value="{$vo.id}">{$vo.name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">URL关键字<font color="orange" size="2px">&nbsp;&nbsp;&nbsp;如：.action&nbsp;&nbsp;.do等</font></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="url_key"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
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