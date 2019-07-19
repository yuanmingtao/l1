<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月17日 上午11:24:01
 * @link      git@github.com:yuanmingtao/l1.git
 */

/*
 PSR-1:基础编码风格
--------------------------------
 1.标记
   必须标准PHP标记 

 2.编码
   必须UTF-8 no BOM

 3.目标 
   单个PHP文件目标需单一
   要么定义函数 类  惯例 接口 常量等
   要么执行单一的功能(输出数据、处理数据)

 4.自动加载
   命名空间和类须支持PSR-4
   autoloader标准

 5.类命名
   CamelCase(TitleCase)
   eg:CoffeeGrinder
      CoffeeBean PourOver

 6.常量命名
   必须大写字符,必要时可以使用下划线在中间

 7.方法命名
   camelCase
   eg:phpIsAwesome iLoveBacon
      tennantIsMyFavoriteDoctor



 PSR-2:严格编码风格
--------------------------------
 PSR-1的实现基础上
 
 1.缩进
   四个空格

 2.文件与换行
   Unix linefeed LR
   结尾预留一个空白行
   结尾处不包含PHP结束标记
   每行代码不超过80 - 120个字符
   每行结尾不能包含空白符

 3.关键词
   小写 eg true false null

 4.命名空间
   每个命名空间,use语句声明之后跟一行空白行
   namespace My\Component;

   use Symfony\Components\HttpFoundation\Request;
   use Symfony\Components\HttpFoundation\Response;

   class App
   {
    //Class definition body
   }

 5.类
   namespace My\App;

   class Administrator extends User  // extends与类名处于同一行
   {                                 // { 另起一行
      //Class definition body
   }

 6.方法
   namespace Animals;
   
   class StrawNeckedIbis
   {
        public function flapWings($numberOfTimes = 3, $speed = 'fast')
        {
            // Method definition body
        }
   }
   
 7.封装
          类的每个属性与方法都必须声明 可见性(protected,private,public)
   abstract final必须在可见性前面  abstract protected
   static必须在可见性后面  protected static
   
    namespace Animals;

    class StrawNeckedIbis
    {
        // Static property with visibility
        public static $numberOfBirds = 0;
        // Method with visibility
        public function __construct()
        {
            static: : $numberOfBirds++;
        }
    }
    
 8.控制结构
   $gorilla = new \Animals\Gorilla;
   $ibis = new \Animals\StrawNeckedIbis;
   if ($gorilla->isAwake() === true) {
       do {
            $gorilla->beatChest();
        } while ($ibis->isAsleep() === true);
        $ibis->flyAway();
   }
*/
