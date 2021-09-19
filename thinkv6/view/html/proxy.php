<!DOCTYPE html>
<html>
<head>
    {include file="common/head" /}
</head>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            {include file="common/menu" /}
            <div class="navbar-inner" style="padding-left: 10px">
                <div class="container" style="width: 100%">
                    <p></p>
                    <p>
                        &nbsp;&nbsp;&nbsp;关于代理：从多个代理网站上抓取最新代理IP地址，对每个IP进行10轮筛选，根据响应时间进行评分，评分最高则最优。每天更新并重新筛选。
                    </p>
                    <p>
                        &nbsp;&nbsp;&nbsp;代理接口：如自己编写程序时想直接调用代理IP地址数据，可直接访问<a href="proxy-ip.php" target="_blank">proxy-ip.php</a>，返回按得分排序的ip地址列表。
                    </p>
                    <p>
                        &nbsp;&nbsp;&nbsp;联系我们：TideSec安全团队
                    </p>
                </div>
            </div>
            <br>
            <div class="tabbable" id="tabs-25550">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#panel-941070" data-toggle="tab">代理列表</a>
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
                                <th>
                                    序号
                                </th>
                                <th>
                                    代理地址
                                </th>
                                <th>
                                    测试次数
                                </th>
                                <th>
                                    失败次数
                                </th>
                                <th>
                                    平均耗时
                                </th>
                                <th>
                                    代理评分
                                </th>

                                <th>
                                    操作
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php echo $html_str;?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>