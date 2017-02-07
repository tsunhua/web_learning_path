<?php
/**
 * Created by PhpStorm.
 * User: Lshare
 * Date: 2017/2/6
 * Time: 15:01
 */

namespace Home\Controller;

use Home\Common\BaseController;

class UserController extends BaseController
{
    public function getUserInfo()
    {
        $params = $this->getUrlVar();
        var_dump($params);
    }

    public function getMovies()
    {
        // 从文件中读取数据到PHP变量
        // $json_string = file_get_contents('Application\Home\Model\movies.json');
        // 把JSON字符串转成PHP数组
        // $data = json_decode($json_string, false);
        // 显示出来看看
        // var_dump($data)

        // 从数据库中获取数据
        // 注意：数据库的配置在Home/Conf/config.php中
        $Movies = M('movie');
//        $condition['title'] = 'zjjzx';
        $data = $Movies/*->where($condition)*/->limit(0, 10)->select();
//        echo $data[0]['url'];
        $this->assign('data', $data);
        $this->display();
        die();
    }
}
