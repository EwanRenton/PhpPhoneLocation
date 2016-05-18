<?php
/**
 * autoload 类，
 */
use app\MobileQuery;
    spl_autoload_extensions();
    set_include_path(get_include_path().PATH_SEPARATOR."libs/".PATH_SEPARATOR."app/");
    spl_autoload_register();
    // new MobileQuery();
    // spl_autoload_extensions(".class.php,.php");//设置autoload寻找php定义的类文件的扩展名，多个扩展名用逗号分开,前面的扩招名优先匹配
    // set_include_path(get_include_path().PATH_SEPARATOR."libs/".PATH_SEPARATOR."app/");//设置autoload寻找php定义的类文件的目录，多个目录用PATH_SEPARATOR分隔
    // spl_autoload_register();//提示PHP使用autoload机制查找类定义
    // new test();
