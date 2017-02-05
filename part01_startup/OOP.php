<?php

interface AInterface
{
    function who();
}

//类的概念
class SimpleClass implements AInterface
{
    //除非你指定，否则类的属性和方法默认都是公共的
    public $var = 'a default value';
    //类常量
    //常量的命名前面没有$符号
    const PI = 3.14;

    //声明类属性或方法为静态，就可以不实例化类而直接访问。
    //静态属性不能通过一个类已实例化的对象来访问（但静态方法可以）。
    public static $my_static = "xxxx";

    static function get_pi()
    {
        return SimpleClass::PI;
    }

    function SimpleClass($a)
    {
        echo "构造函数" . $a;
    }

    //也可以使用楼下的方法
    //怎么构造方法只能有一个呢？
//    function __construct($a)
//    {
//        echo "构造函数" . $a;
//    }

    //如果父类中的方法被声明为 final，则子类无法覆盖该方法。如果一个类被声明为 final，则不能被继承。
    public final function displayVar()
    {
        echo $this->var;
    }

    function who()
    {
        return get_class($this);
    }
}

$s = new SimpleClass("xxx");
$s->displayVar();

//继承
class Class2 extends SimpleClass
{
    function __construct($a)
    {
        $a = $a . '333';
        //会与子类的构造冲突
//        $this->__construct($a);
//        $this->SimpleClass($a);
        //为什么可以静态调用？在PHP4以及之前为了使子类调用父类方法而又不与子类的同名方法冲突的解决方法
        //详情看：http://www.cnblogs.com/yjf512/archive/2012/09/12/2682556.html
//        SimpleClass::SimpleClass($a);
        //PHP5之后使用parent关键字
        parent::SimpleClass($a);
//        parent::__construct($a);
    }
}

$c = new Class2("x222");