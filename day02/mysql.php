<?php
try{
    //解析config.ini文件
    $config = parse_ini_file(realpath(dirname(__FILE__) . '/config.ini'));
    //对mysqli类进行实例化
    $mysqli = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);
    if(mysqli_connect_errno()){    //判断是否成功连接上MySQL数据库
        throw new Exception('数据库连接错误！');  //如果连接错误，则抛出异常
    }else{
        echo '数据库连接成功！';   //打印连接成功的提示
    }
}catch (Exception $e){        //捕获异常
    echo $e->getMessage();    //打印异常信息
}
