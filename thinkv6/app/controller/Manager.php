<?php

namespace app\controller;

use app\BaseController;
use app\model\Customer;
use think\facade\Db;
use think\facade\Request;
use think\facade\View;

class Manager extends BaseController
{
    public function index()
    {
        $totalnum = Db::table("info")->field('id')->count();

        $pagesize = 50;
        //总共有几页
        $maxpage = ceil($totalnum / $pagesize);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        if ($page < 1) {
            $page = 1;
        }
        if ($page > $maxpage) {
            $page = $maxpage;
        }
        $limit = " limit " . ($page - 1) * $pagesize . ",$pagesize";

        //$sql = "SELECT * FROM info LEFT JOIN  customer ON info.customer = customer.id  LEFT JOIN  spider ON spider.hash = info.hash  LEFT JOIN  scan_list ON scan_list.hash = info.hash order by info.id DESC {$limit}";
        $sql = "SELECT * FROM info INNER JOIN  customer ON info.customer = customer.id  INNER JOIN  spider ON spider.hash = info.hash  INNER JOIN  scan_list ON scan_list.hash = info.hash order by info.id DESC {$limit}";

        $results = Db::query($sql);

        $html_str = "";
        if ($results) {
            foreach ($results as $i => $fs) {
                $id = $i;
                $cus_id = $fs["customer"];
                $url = substr($fs["1"], 0, 28);
                $link_url = $fs["1"];
                $hash = $fs["2"];
                $ip = $fs["ip"];
                $status = $fs["67"];
                $customer = $fs["name"];
                $port_num = $fs["port_num"];
                $sub_num = $fs["sub_num"];
                $cms = mb_substr($fs["cms"], 0, 8, "utf-8");
                $waf = substr($fs["waf"], 0, 8);
                $os = substr(str_replace("Microsoft ", "", $fs["os"]), 0, 13);
                $language = substr($fs["language"], 0, 12);
                $middleware = substr($fs["middleware"], 0, 12);
                $weakfile_num = $fs["weakfile_num"];
                $high = $fs["high"];
                $medium = $fs["medium"];
                $low = $fs["low"];

                $key_num = $fs["key_num"];
                $bad_num = $fs["bad_num"];
                $evil_num = $fs["evil_num"];

                $title = mb_substr($fs["title"], 0, 10, "utf-8");

                if ($status == 'ok') {
                    $class = 'success';
                    $responsive = "已完成";
                } else if ($status == 'ing') {
                    $class = 'warning';
                    $responsive = "扫描中";
                } else if ($status == 'new') {
                    $class = 'info';
                    $responsive = "队列中";
                } else {
                    $class = 'error';
                }


                $html_str .= "<tr class=\"$class\">
                                        <td style=\"text-align:center\">
                                            <div style=\"width: 10px;\">$id</div>
                                        </td>
                                        <td style=\"word-break:break-all; word-wrap:break-word;text-align:center\">
                                            <div style=\"width: 210px;\"><a href=$link_url target=\"_blank\">$url</a></div>
                                        </td>
                                    
                                        <td style=\"text-align:center\">
                                            <div style=\"width: 140px;\"><a href=\"?m=vul&p={$hash}\">$title</a></div>
                                        </td>
                                        <td style=\"text-align:center\">
                                            <a href=\"?m=vul&p={$hash}&c=high\"><font color=\"red\">$high</font></a>
                                        </td>
                                        <td style=\"text-align:center\">
                                            <a href=\"?m=vul&p={$hash}&c=medium\"><font color=\"orange\">$medium</font></a>
                                        </td>
                                        <td style=\"text-align:center\">
                                            <a href=\"?m=vul&p={$hash}&c=low\"><font color=\"green\">$low</font></a>
                                        </td>
                                        <td style=\"text-align:center\">
                                            <div style=\"width: 30px;\"><a href=\"?m=siteinfo&p={$hash}\">$port_num</a></div>
                                        </td>
                                        <td style=\"text-align:center\">
                                            <div style=\"width: 30px;\"><a href=\"?m=siteinfo&p={$hash}\">$sub_num</a></div>
                                        </td>
                                        <td style=\"text-align:center\">
                                            <div style=\"width: 30px;\"><a href=\"?m=siteinfo&p={$hash}\">$weakfile_num</a></div>
                                        </td>
                                        <td style=\"text-align:center\">
                                            <a href=\"?m=spiderinfo&p={$hash}\"><font color=\"red\">$evil_num</font></a>
                                        </td>
                                        <td style=\"text-align:center\">
                                            <a href=\"?m=spiderinfo&p={$hash}\"><font color=\"orange\">$key_num</font></a>
                                        </td>
                                        <td style=\"text-align:center\">
                                            <a href=\"?m=spiderinfo&p={$hash}\"><font color=\"green\">$bad_num</font></a>
                                        </td>
                                        <td style=\"text-align:center\">
                                            <div style=\"width: 80px;\"><a href=\"?m=siteinfo&p={$hash}\">$cms</a></div>
                                        </td>
                                        
                                        <td style=\"text-align:center\">
                                            <div style=\"width: 100px;\"><a href=\"?m=siteinfo&p={$hash}\">$os</a></div>
                                        </td>
                                        
                                        <td style=\"text-align:center\">
                                            <div style=\"width: 100px;\"><a href=\"?m=siteinfo&p={$hash}\">$middleware</a></div>
                                        </td>
                                                                                
                                        <td style=\"text-align:center\">
                                            <a href=\"javascript:resetall('{$hash}')\">重置</a>|<a href=\"javascript:delall('{$hash}')\">删除</a>|<a href=\"javascript:exportreport('{$hash}')\">报告</a>
                                        </td>
                                    </tr>";

            }
            $html_str = $html_str . "<table class=\"table\" style=\"font-size:14px;\"><thead>
								<tr><td style=\"text-align:center\"><b>当前{$page}/{$maxpage}页 &nbsp;&nbsp;&nbsp;共{$totalnum}个项目  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href='?m=manager&page=1'>首页</a> &nbsp;&nbsp;&nbsp;
                   <a href='?m=manager&page=" . ($page - 1) . "'>上一页</a> &nbsp;&nbsp;&nbsp;
                   <a href='?m=manager&page=" . ($page + 1) . "'>下一页</a> &nbsp;&nbsp;&nbsp;
                   <a href='?m=manager&page={$maxpage}'>尾页</a></b>
                                       </td></tr></thead>\r\n";
            return $html_str;
        }

        $data = [];
        $data['html_str'] = $html_str;
        $data['customer'] = Customer::getCustomer();
        return View::fetch('html/manager', $data);
    }


    public function new()
    {
        $in_arr = '';
        $in_arr_spider = '';
        $in_arr_info = '';

        //新添加
        if (!empty($_POST['url'])) {
            $pointserver = specify_server();
            if (!empty($pointserver)) {
                $urls = str_replace(array("\r\n", "\r"), "\n", $_POST['url']);
                $urls = explode("\n", $urls);
                foreach ($urls as $url) {
                    $in_arr['url'] = $url;
                    $in_arr['createtime'] = date('Y-m-d');
                    $in_arr['user'] = $_SESSION['username'];//当前session用户
                    $in_arr['pointserver'] = specify_server();//分配节点服务器ip
                    $in_arr['group'] = "";//项目组名称
                    $in_arr['siteuser'] = $_POST['user'];
                    $in_arr['sitepwd'] = $_POST['pwd'];
                    $in_arr['cookie'] = $_POST['cookie'];
                    $in_arr['rule'] = $_POST['rule'];
                    $in_arr['status'] = 'new';
                    $in_arr['customer'] = $_POST['customer'];
                    $in_arr['delay'] = $_POST['delay'];
                    $in_arr['hash'] = md5($in_arr['url'] . time() . authkey);
                    #if ( $_POST['auth'] == 'on' ) nginx_vhost( $in_arr['url'] , $in_arr['cookie'] );
                    Db::table("scan_list")->insert($in_arr);

                    $in_arr_spider['url'] = $url;
                    $in_arr_spider['createtime'] = date('Y-m-d');
                    $in_arr_spider['siteuser'] = $_POST['user'];
                    $in_arr_spider['sitepwd'] = $_POST['pwd'];
                    $in_arr_spider['status'] = 'new';
                    $in_arr_spider['check_status'] = 'wait';
                    $in_arr_spider['customer'] = $_POST['customer'];
                    $in_arr_spider['delay'] = $_POST['delay'];
                    $in_arr_spider['hash'] = $in_arr['hash'];

                    Db::table("spider")->insert($in_arr_spider);

                    $in_arr_info['url'] = $url;
                    $in_arr_info['createtime'] = date('Y-m-d');
                    $in_arr_info['status'] = 'new';
                    $in_arr_info['customer'] = $_POST['customer'];
                    $in_arr_info['hash'] = $in_arr['hash'];

                    Db::table("info")->insert($in_arr_info);
                }

                echo "<script>location.href='?m=manager'</script>";
                exit(0);

            } else {
                Message(" 请配置节点服务器 ", "?m=point", 0, 3000);
            }
        }

    }


}