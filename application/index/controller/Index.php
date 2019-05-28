<?php
namespace app\index\controller;
use think\Request;
use think\Db;

class Index
{
    public function index()
    {
        // echo $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].'/static';
        return view('index');
    }

    public function test (){
        $arr = array('a' => 1, 'b' => 2);
        $data = Db::table('articles')->select();
        return json_encode($data);
    }
}
