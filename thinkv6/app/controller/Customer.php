<?php

namespace app\controller;

use app\BaseController;
use think\facade\Db;
use think\facade\Request;
use think\facade\View;

class Customer extends BaseController
{


    public function index()
    {
        #$sql = "SELECT * FROM scan_list as a,target_info as b where a.hash = b.hash";
        $sql = "SELECT * FROM customer  order by id asc";
        $results = Db::query($sql);
        $data['html_str'] = "";
        if ($results) {
            foreach ($results as $i => $fs) {
                $id = $fs["id"];
                $name = $fs["name"];

                $sitenum = Db::table('scan_list')->where(['customer' => $id])->count();


                $sitenum = $sitenum;
                $contact = $fs["contact"];
                $phone = $fs["phone"];
                $email = $fs["email"];
                $address = $fs["address"];
                $date1 = $fs["date1"];
                $date2 = $fs["date2"];
                $type = $fs["type"];
                $delay = $fs["delay"];
                $remark = $fs["remark"];


                if ($delay == '1') {
                    $class = 'success';
                    $scan_delay = "每月一次";
                } else if ($delay == '2') {
                    $class = 'warning';
                    $scan_delay = "每季度一次";
                } else if ($delay == '3') {
                    $class = 'error';
                    $scan_delay = "每半年一次";
                } else if ($delay == '4') {
                    $class = 'info';
                    $scan_delay = "仅一次";
                } else {
                    $class = 'info';
                    $scan_delay = "仅一次";
                }

                if ($type == '1') {
                    $scan_type = "定扫+预警+敏检";
                } else if ($type == '2') {
                    $scan_type = "预警+敏检";
                } else if ($type == '3') {
                    $scan_type = "定扫+预警";
                } else if ($type == '4') {
                    $scan_type = "预警";
                } else {
                    $scan_type = "定扫+预警+敏检";
                }
                $hash = "111";

                $data['html_str'] .= "
									<tr class=\"$class\">
										<td style=\"text-align:center\">
											$id
										</td>
										<td style=\"text-align:center\">
											<a href=\"?m=cusinfo&id={$id}\"> $name</a>
										</td>
										<td style=\"text-align:center\">
											<a href=\"?m=cusinfo&id={$id}\">$sitenum</a>
										</td>
										<td style=\"text-align:center\">
											$contact
										</td>
										<td style=\"text-align:center\">
											$phone
										</td>
										<td style=\"text-align:center\">
											$email
										</td>
										
										<td style=\"text-align:center\">
											$date1 -- $date2
										</td>
										
										<td style=\"text-align:center\">
											$scan_type
										</td>
										<td style=\"text-align:center\">
											$scan_delay
										</td>
										<td style=\"text-align:center\">
											$remark
										</td>
										<td style=\"text-align:center\">
											<a href=\"?m=cusinfo&id={$id}\">详情</a>|<a id=\"modal - 978241\" href=\"#$id\" role=\"button\"  data-toggle=\"modal\" >编辑</a>|<a href=\"javascript:delcustomer('{$id}')\">删除</a>
										</td>
									</tr>\r\n";
            }

        }
        return View::fetch('html/customer', $data);
    }

    public function new()
    {
        //新添加
        if (!empty($_POST['name'])) {
            $in_arr['name'] = $_POST['name'];
            $in_arr['contact'] = $_POST['contact'];
            $in_arr['phone'] = $_POST['phone'];
            $in_arr['email'] = $_POST['email'];
            $in_arr['address'] = $_POST['address'];
            $in_arr['date1'] = $_POST['date1'];
            $in_arr['date2'] = $_POST['date2'];
            $in_arr['type'] = $_POST['type'];
            $in_arr['delay'] = $_POST['delay'];
            $in_arr['remark'] = $_POST['remark'];
            $in_arr['ctime'] = time();
            db::table("customer")->insert($in_arr);
            echo "<script>alert('添加成功');location.href='" . url('customer/index') . "'</script>";
        }

    }

    public function update()
    {
        //更新
        if (!empty($_POST['name'])) {
            $in_arr['id'] = $_GET['id'];
            $in_arr['name'] = $_POST['name'];
            $in_arr['contact'] = $_POST['contact'];
            $in_arr['phone'] = $_POST['phone'];
            $in_arr['email'] = $_POST['email'];
            $in_arr['address'] = $_POST['address'];
            $in_arr['date1'] = $_POST['date1'];
            $in_arr['date2'] = $_POST['date2'];
            $in_arr['type'] = $_POST['type'];
            $in_arr['delay'] = $_POST['delay'];
            $in_arr['remark'] = $_POST['remark'];

            db::table("customer")->save($in_arr);
            echo "<script>alert('更新成功');location.href='?m=customer'</script>";

        }

    }

}