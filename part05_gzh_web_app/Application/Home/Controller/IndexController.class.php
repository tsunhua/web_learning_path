<?php
namespace Home\Controller;

use Home\Common\BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        //1. 获取请求参数，得知电影类别和分页
        $params = $this->getUrlVar();
        //2. 从数据库中读取对应的数据
        $Movies = M('movie');

        if ($params['cat'] != null) {
            $condition['cat'] = $params['cat'];
        } else {
            $condition['cat'] = 'zuixin';
        }

        $this->assign('cat', $condition['cat']);

        if (is_null($params['p'])) {
            $params['p'] = 1;
        }

        //数据分页
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $list = $Movies->where($condition)->page($params['p'] . ',10')->select();
        $this->assign('data', $list);// 赋值数据集
        $count = $Movies->where($condition)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 10);// 实例化分页类 传入总记录数和每页显示的记录数

        // 设置分页显示
        $Page->setConfig('header', '条数据');
        $Page->setConfig('first', '第一页');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '最后一页');

        $show = $Page->show();// 分页显示输出
        $this->assign('page', $show);// 赋值分页输出
        //$this->assign('data', $data);
        $this->display(); // 输出模板

    }
}