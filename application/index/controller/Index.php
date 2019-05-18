<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        // echo $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].'/static';
        return view('index');
    }
}
