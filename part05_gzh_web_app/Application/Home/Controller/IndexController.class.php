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

        if ($params['category'] != null) {
            $condition['category'] = $params['category'];
            $data = $Movies->where($condition)
                ->limit($params['page'], 10)->select();
        } else {
            $condition['category'] = 'zuixin';
            $data = $Movies->where($condition)
                ->limit($params['page'], 10)->select();
        }
        $this->assign('data', $data);
        $this->display();
    }
}