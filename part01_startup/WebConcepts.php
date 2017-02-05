<?php
/**
 * Web相关的一些概念
 * User: Lshare
 * Date: 2017/2/5
 * Time: 18:56
 */
echo "<br/>------begin--------<br/>";
//获取IP地址
$ip = getenv('REMOTE_ADDR');
//$ip = $_SERVER['REMOTE_ADDR'];
//获取客户浏览器和操作系统
$viewer = getenv("HTTP_USER_AGENT");
$viewer = $_SERVER['HTTP_USER_AGENT'];
echo $ip . "<br/>";

//随机显示图像
srand(microtime() * 100000);
$random = rand(1, 3);
switch ($random) {
    case 1:
        $image_file = "/image/android.png";
        break;
    case 2:
        $image_file = "/image/kulou.jpg";
        break;
    case 3:
        $image_file = "/image/queen.png";
        break;
}
echo "<img src='$image_file'/><br/>";

//使用HTML提交表单
if (isset($_POST['name']) && isset($_POST['age'])) {
    echo "Welcome " . $_POST['name'] . "<br/>";
    echo "You are " . $_POST['age'] . " years old." . "<br/>";
}

//浏览器重定向
if (isset($_POST['location'])) {
    $location = $_POST['location'];
    header("Location:$location");
    exit();
}

//GET 和 POST
//PHP 提供了关联数组$_GET可以访问所有使用 GET 方法的发送信息
//PHP 提供了 $ _POST 关联数组访问所有使用 POST 方法发送信息
//PHP 的 $_REQUEST 变量包含了 $_GET, $_POST 以及 $_COOKIE 的内容
if (isset($_REQUEST['name'])) {
    echo "<br/>";
    echo '$_REQUEST is very good --- ' . $_REQUEST['name'];
}

//Cookies && Session 后面用到再学
//文件上传和下载   需要再学嘛

echo "<br/>------end--------<br/>";

?>

<html>
<body>
<!--使用HTML提交表单-->
<form action="<?php __FILE__ ?>" method="POST">
    Name: <input type="text" name="name"/>
    Age: <input type="text" name="age"/>
    <input type="submit">
</form>
<!--浏览器重定向-->
<form action="<?php __FILE__ ?>" method="POST">
    <select name="location">
        <option value="http://w3c.org">
            W3c
        </option>
        <option value="http://google.com">
            Google
        </option>
        <option value="http://php.net">
            PHP
        </option>
    </select>
    <input type="submit"/>
</form>

</body>
</html>
