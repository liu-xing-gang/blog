<?php
namespace app\index\utils;
use think\Db;

class Pagination{
    // 每页的数据集
    protected $rows = array();

    // 每页显示条数
    protected $limit = 2;
    
    // 当前页
    protected $curr;

    // 总页数
    protected $pages;

    // 数据
    protected $total;

    // json数据集
    public $json;

    public function __construct($curr, $table, $key, $value)
    {
        $this->curr = $curr;
        $this->rows = Db::table($table)->where($key, $value)->page($curr, $this->limit)->select();
        $this->total = Db::table($table)->where($key, $value)->count();
        $this->pages = ceil($this->total/$this->limit);
        $this->json = json(array('limit' => $this->limit, 'curr' => $this->curr, 'total' => $this->total, 'pages' => $this->pages, 'rows' => $this->rows));
    }
}
