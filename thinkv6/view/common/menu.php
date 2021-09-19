<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand hidden-sm" href="<?php echo url('index/index') ?>"><?php echo $soft_name ?></a>
            </div>
            <div class="navbar-collapse collapse" role="navigation">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo url('index/manager') ?>">管理中心</a>
                    </li>
                    <li>
                        <a href="<?php echo url('index/customer') ?>">客户管理</a>
                    </li>
                    <li>
                        <a href="<?php echo url('index/scan') ?>">扫描管理</a>
                    </li>
                    <li>
                        <a href="<?php echo url('index/info') ?>">信息搜集</a>
                    </li>
                    <li>
                        <a href="<?php echo url('index/spider') ?>">站点爬虫</a>
                    </li>
                    <li>
                        <a href="<?php echo url('index/pro') ?>">专项检测</a>
                    </li>
                    <li>
                        <a href="<?php echo url('index/point') ?>">节点管理</a>
                    </li>
                    <li>
                        <a href="<?php echo url('index/set') ?>">系统管理</a>
                    </li>
                    <li>
                        <a href="<?php echo url('index/proxy') ?>">代理地址池</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right hidden-sm">
                    <li class="active">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $username; ?></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a id="modal-978241" href="#cpasswd-<?php echo $username ?>"
                                   data-toggle="modal">修改密码</a>
                            </li>
                            <li>
                                <a href="<?php echo url('index/logout') ?>">退出</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

