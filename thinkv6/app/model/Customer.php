<?php

namespace app\model;

use think\facade\Db;

class Customer
{
    static function getCustomer()
    {

        $sql = "SELECT * FROM customer order by convert(name using gbk) ASC";
        $results = Db::query($sql);

        return $results;
    }
}