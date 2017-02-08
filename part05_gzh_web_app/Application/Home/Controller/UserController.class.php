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

    public function insertMovies()
    {
        $Movies = M("movie"); // 实例化User对象
        //在config中关闭字段缓存，可以解决插入不成功的问题
//        $fields = $Movies->getDbFields();
//        var_dump($fields);

        for ($i = 0; $i < 100; $i++) {
            $data['title'] = 'Movie ' . $i;
            if ($i <= 20) {
                $data['cat'] = 'zuixin';
            } elseif ($i <= 60) {
                $data['cat'] = 'jingdian';
            } else {
                $data['cat'] = 'dianshiju';
            }

            $data['url'] = 'http://ttvv.mileyu.com/ykyun/index.php?url=CMTEwNjIxMjg==~ykyun';
            $data['img'] = 'https://img1.doubanio.com/view/movie_poster_cover/lpst/public/p2412371389.jpg';
            $data['intro'] = 'Movie Intro' . $i;
            $Movies->data($data)->add();
        }

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
        $data = $Movies/*->where($condition)*/
        ->limit(0, 10)->select();
//        echo $data[0]['url'];
        $this->assign('data', $data);
        $this->display();
        die();
    }
}
