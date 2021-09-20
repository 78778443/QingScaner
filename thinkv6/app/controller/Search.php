<?php

namespace app\controller;

use app\BaseController;
use app\model\Customer;
use think\facade\Db;
use think\facade\Request;
use think\facade\View;

class Search extends BaseController
{

    function index()
    {
        $data = [];
        $data['customer'] = Customer::getCustomer();
        $data['html_str'] = $this->search_center();
        return View::fetch('html/search', $data);
    }

    function search()
    {
        $in_arr = [];
        if (!empty($_POST['os']) or !empty($_POST['title']) or !empty($_POST['port']) or !empty($_POST['middleware']) or !empty($_POST['cms']) or !empty($_POST['language'])) {

            $os = $_POST['os'];
            $middleware = $_POST['middleware'];
            $cms = $_POST['cms'];
            $language = $_POST['language'];
            $title = $_POST['title'];
            $port = $_POST['port'];
            $sql1 = "select hash from info where language like '%$language%' and cms like '%$cms%' and port like '%$port%' and title like '%$title%' and middleware like '%$middleware%' and os like '%$os%'";
            $results1 = Db::query($sql1);

          var_dump($sql1,$results1);die;
            if ($results1) {
                foreach ($results1 as $i => $fs) {

                    $in_arr[$i] = $fs["0"];
//                    echo $in_arr[$i].'---';
                    $i = $i + 1;
                }
            }
//            echo "<script>alert('info');</script>";
        }

        if (!empty($_POST['url']) or !empty($_POST['name']) or !empty($_POST['customer']) or !empty($_POST['delay'])) {

            $url = $_POST['url'];
            $customer = $_POST['customer'];
            $delay = $_POST['delay'];
            $sql2 = "select hash from scan_list where url like '%$url%' and customer like '%$customer%' and delay like '%$delay%'";
            $results2 = Db::query($sql2);
            if ($results2) {
                foreach ($results2 as $i => $fs) {
                    $in_arr[$i] = $fs["0"];
//                    echo $in_arr[$i].'+++';
                    $i = $i + 1;
                }
            }
//            echo "<script>alert('info');</script>";
        }
        $in_arr = array_unique($in_arr);
        $a = '';

        foreach ($in_arr as $in) {

//            echo '***'.$in.'***';
            $a = $a . $in;
        }
//        echo "<script>location.href='?m=search&hash=$a'</script>";
        echo "<script>location.href='" . url('search/index', ['hash' => $a]) . "'</script>";
        //return $in_arr;

    }

    public function spider()
    {
        $url = $_POST['url'];
        $customer = $_POST['customer'];
        $url_key = $_POST['url_key'];

        $sql1 = "select hash from spider where url like '%$url%' and customer like '%$customer%' and url_all like '%$url_key%'";
//            echo $sql1;

        $results1 = Db::query($sql1);
        if ($results1) {
            foreach ($results1 as $i => $fs) {

                $in_arr[$i] = $fs["0"];
//                    echo $in_arr[$i].'---';
                $i = $i + 1;
            }
        } else {
            $in_arr = '';
        }
        $in_arr = array_unique($in_arr);
        $a = '';
        foreach ($in_arr as $in) {

//            echo '***'.$in.'***';
            $a = $a . $in;
        }
        echo "<script>location.href='?m=spidersearch&key=$url_key&hash=$a'</script>";
        //return $in_arr;

    }

    function search_center()
    {

        $hashs = $_GET['hash'];
        $hash = '';
        $a = strlen($hashs) / 32;
        while ($a >= 1) {
            $x = substr($hashs, ($a - 1) * 32, 32);
            $a = $a - 1;
            $hash = $hash . $x . "','";
        }
        $hash = "'" . substr($hash, 0, -2);


        $sql = "SELECT * FROM info INNER JOIN  customer ON info.customer = customer.id  INNER JOIN  spider ON spider.hash = info.hash where info.hash in ($hash) order by info.id desc";

        $results = Db::query($sql);
        if ($results) {
            foreach ($results as $i => $fs) {
                $id = $i;
                $cus_id = $fs["customer"];
                $url = substr($fs["1"], 0, 28);
                $link_url = $fs["1"];
                $hash = $fs["2"];
                $ip = $fs["ip"];
                $customer = $fs["name"];
                $port_num = $fs["port_num"];
                $sub_num = $fs["sub_num"];
                $cms = mb_substr($fs["cms"], 0, 8, "utf-8");
                $waf = substr($fs["waf"], 0, 8);
                $os = substr(str_replace("Microsoft ", "", $fs["os"]), 0, 13);
                $language = substr($fs["language"], 0, 12);
                $middleware = substr($fs["middleware"], 0, 13);
                $weakfile_num = $fs["weakfile_num"];
                $high = get_severity($hash, 'high');
                $medium = get_severity($hash, 'medium');
                $low = get_severity($hash, 'low');

                $key_num = $fs["key_num"];
                $bad_num = $fs["bad_num"];
                $evil_num = $fs["evil_num"];

                $title = mb_substr($fs["title"], 0, 10, "utf-8");
                $class = 'success';

                $html_str .= "
                                    <tr class=\"$class\">
                                        <td style=\"text-align:center\">
                                            <div style=\"width: 10px;\">$id</div>
                                        </td>
                                        <td style=\"word-break:break-all; word-wrap:break-word;text-align:center\">
                                            <div style=\"width: 210px;\"><a href=$link_url target=\"_blank\">$url</a></div>
                                        </td>
                                    
                                        <td style=\"text-align:center\">
                                            <div style=\"width: 140px;\"><a href=\"?m=siteinfo&p={$hash}\">$title</a></div>
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
                                            <div style=\"width: 80px;\">$cms</div>
                                        </td>
                                        
                                        <td style=\"text-align:center\">
                                            <div style=\"width: 100px;\"><a href=\"?m=siteinfo&p={$hash}\">$os</a></div>
                                        </td>
                                        
                                        <td style=\"text-align:center\">
                                            <div style=\"width: 100px;\">$middleware</div>
                                        </td>
                                                                                
                                        <td style=\"text-align:center\">
                                            <a href=\"javascript:resetall('{$hash}')\">重置</a>|<a href=\"javascript:delall('{$hash}')\">删除</a>|<a href=\"javascript:exportreport('{$hash}')\">报告</a>
                                        </td>
                                    </tr>\r\n";
                $i++;
            }

            return $html_str;
        } else {
            return "";

        }
    }

}