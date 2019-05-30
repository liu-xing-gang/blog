<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\index\utils\Pagination;

class Article extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($page)
    {
        $tid = input('tid');
        $page = new Pagination($page, 'articles', 'tid', $tid);
        return $page->json;
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
        // if(!input('action'))
        // {
            $data = Db::table('articles')->where('article_id', $id)->find();
            $prev = Db::table('articles')->where('tid', $data['tid'])->where('article_id', '<', $id)->max('article_id');
            $next = Db::table('articles')->where('tid', $data['tid'])->where('article_id', '>', $id)->min('article_id');
            return json(array('prev' => $prev, 'next' => $next, 'data' => $data));
        // } 
        // else
        // {
        //     switch(input('action'))
        //     {
        //         case 'prev':
        //             $data = Db::table('articles')->where('tid', input('tid'))->where('article_id', '<', $id)->order('created_at', 'desc')->limit(1)->find();
        //             return json($data);
        //             break;
        //         case 'next':
        //             $data = Db::table('articles')->where('tid', input('tid'))->where('article_id', '>', $id)->order('created_at', 'asc')->limit(1)->find();
        //             return json($data);
        //             break;
        //     }
        // }
        
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }

}
