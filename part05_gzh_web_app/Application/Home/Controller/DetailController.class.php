<?php
/**
 * Created by PhpStorm.
 * User: Lshare
 * Date: 2017/2/8
 * Time: 14:39
 */

namespace Home\Controller;

use Home\Common\BaseController;

class DetailController extends BaseController
{

    public function index()
    {
        //1. 获取请求参数，得知电影类别和分页
        $params = $this->getUrlVar();
        //2. 从数据库中读取对应的数据
        $Movies = M('movie');
        $id = $params['id'];
        $data = $Movies->where('id=' . $id)->select();
        $this->assign('data' ,$data[0]);
        $this->display();

    }
}