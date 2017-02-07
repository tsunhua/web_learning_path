<?php

/**
 * Created by PhpStorm.
 * User: Lshare
 * Date: 2017/2/6
 * Time: 17:02
 */
//注意命名空间要跟
namespace Home\Common;
use \Think\Controller;

class BaseController extends Controller
{
    public function getUrlVar()
    {
        return I('param.');
    }

}