<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],
// ];

Route::any('test', 'index/index/test');

// Route::any('articles/list/:page', 'index/Article/index');
// Route::any('articles/types', 'index/ArticleType/index');
// Route::any('articles/read/:id', 'index/Article/read');
Route::group('articles', [
    'list/:page' => ['index/Article/index'],
    'types' => ['index/ArticleType/index'],
    'read/:id' => ['index/Article/read']
]);

Route::any('videos', 'index/video/index');
