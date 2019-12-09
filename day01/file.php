<?php

if (!file_exists("file/welcome.csv")) {
    die("文件不存在！");
} else {
    $file = fopen("file/welcome.csv", "r");
    while (!feof($file)){
        $arr = fgetcsv($file);
//    echo count($arr);
        foreach ($arr as $key => $value) {
            echo $key, "=", $value, " ";
    //        echo $arr[$key];
    //        echo $value;
        }
        echo PHP_EOL;
    }
    fclose($file);
}