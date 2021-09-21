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
                        <a href="#panel-941070" data-toggle="tab">项目大厅</a>
                    </li>

                    <li>
                        <a href="#panel-910581" data-toggle="tab">检索中心</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="panel-941070">

                        <div class="moretner">
                            <div class="navbar navbar-inverse moretner-left"
                                 style="margin-bottom:10px;float:left;background: #fdffff;padding-top:35px;">
                                <div class="navbar-inner"
                                     style="border-color: #fdffff;background-image: linear-gradient(to bottom, rgb(193,77,73), rgb(193,77,73));">
                                    <div class="container-fluid"
                                         style="padding-top:40px;padding-bottom: 55px;padding-left:15px;height: 90px">
                                        <a class="brand" href="?m=scan"
                                           style="padding:7px 0px;line-height:25px;">扫描任务</a>

                                    </div>
                                </div>
                            </div>
                            <div class="moretner-right">

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
                                            状态
                                        </th>
                                        <th style="text-align:center">
                                            节点
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
                                            Banner
                                        </th>
                                        <th style="text-align:center">
                                            OS
                                        </th>
                                        <th style="text-align:center">
                                            扫描周期
                                        </th>
                                        <th style="text-align:center">
                                            扫描时间
                                        </th>
                                        <th style="text-align:center">
                                            操作
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php echo $scan_index; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--<div class="navbar navbar-inverse" style="margin-bottom:10px;">-->
                        <!--<div class="navbar-inner" style="padding-left: 600px; border-color: #fdffff;background-image: linear-gradient(to bottom, rgb(83,165,83), rgb(83,165,83));">-->
                        <!--<div class="container-fluid">-->
                        <!--<a class="brand" href="?m=info">网站信息</a>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->

                        <div class="moretner">
                            <div class="navbar navbar-inverse moretner-left"
                                 style="margin-bottom:10px;float:left;background: #fdffff;padding-top:35px;">
                                <div class="navbar-inner"
                                     style="border-color: #fdffff;background-image: linear-gradient(to bottom, rgb(83,165,83), rgb(83,165,83));">
                                    <div class="container-fluid"
                                         style="padding-top:40px;padding-bottom: 55px;padding-left:15px;height: 90px">
                                        <a class="brand" href="?m=info"
                                           style="padding:7px 0px;line-height:25px;">网站信息</a>

                                    </div>
                                </div>
                            </div>
                            <div class="moretner-right">

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
                                    <?php echo $info_index; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <!--<div class="navbar navbar-inverse" style="margin-bottom:10px;">-->
                        <!--<div class="navbar-inner" style="padding-left: 600px; border-color: #fdffff;background-image: linear-gradient(to bottom, rgb(51,122,183), rgb(51,122,183));">-->
                        <!--<div class="container-fluid">-->
                        <!--<a class="brand"  href="?m=spider">爬虫任务</a>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->

                        <div class="moretner">
                            <div class="navbar navbar-inverse moretner-left"
                                 style="margin-bottom:10px;float:left;background: #fdffff;padding-top:35px;">
                                <div class="navbar-inner"
                                     style="border-color: #fdffff;background-image: linear-gradient(to bottom, rgb(51,122,183), rgb(51,122,183));">
                                    <div class="container-fluid"
                                         style="padding-top:40px;padding-bottom: 55px;padding-left:15px;height: 90px">
                                        <a class="brand" href="?m=spider"
                                           style="padding:7px 0px;line-height:25px;">爬虫任务</a>

                                    </div>
                                </div>
                            </div>
                            <div class="moretner-right">

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
                                            敏感字检测
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
                                    <?php echo $spider_index; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane" id="panel-910581">
                        <form action="<?php echo url('search/search') ?>" method="POST" class="form-horizontal">
                            <label><font color="orange" size="2px">检索tag：请输入想要查询的关键字即可</font></label>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">站点名称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title"/>
                                </div>
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
                                <label class="col-sm-2 control-label">扫描周期</label>
                                <div class="col-sm-10">
                                    <select name="delay" class="form-control">
                                        <option value="">所有模式</option>
                                        <option value="1">每月一次</option>
                                        <option value="2">每季度一次</option>
                                        <option value="3">每半年一次</option>
                                        <option value="4">不扫描</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">操作系统<font color="orange" size="2px">&nbsp;&nbsp;&nbsp;如：Linux、Win等</font></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="os"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">开放端口<font color="orange" size="2px">&nbsp;&nbsp;&nbsp;如：8080、7001等</font></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="port"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">中间件<font color="orange" size="2px">&nbsp;&nbsp;&nbsp;如：IIS、Apache、Weblogic等</font></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="middleware"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">CMS<font color="orange" size="2px">&nbsp;&nbsp;&nbsp;如：Dede、Jcms、Wordpress等</font></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="cms"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">开发技术<font color="orange" size="2px">&nbsp;&nbsp;&nbsp;如：php、jsp、asp.net等</font></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="language"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn">搜索</button>
                                    <button type="submit" class="btn">取消</button>
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