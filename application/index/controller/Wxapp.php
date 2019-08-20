<?php
namespace app\index\controller;
use think\Request;
use think\Db;

class Wxapp
{

    public function index ()
    {
        $arr = array(
            'code' => 1,
            'msg' => 'success',
            'data' => Db::table('articles')->select(),
        );
        return json_encode($arr);
    }

    public function getOpenId()
    {
        $arr = array('code' => 1, 'openId' => '01010010110');
        return json_encode($arr);
    }

    public function getAccountByOpenId ()
    {
        $arr = array(
            'code' => 1,
            'msg' => 'success',
            'data' => Db::table('users')->field('name, email')->where('id', 12)->find(),
        );
        return json_encode($arr);
    }
}


// {
//   "code": 0
//   ,"msg": ""
//   ,"data": {
//     "src": "http://cdn.layui.com/123.jpg"
//   }
// }       