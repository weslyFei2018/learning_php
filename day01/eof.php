<?php
$name = "runoob";
$a = <<<EOF
        "abc"$name
        "123"
EOF;
// 结束需要独立一行且前后不能空格

echo $a;
echo PHP_EOL;
echo "<h2>EOF 测试</h2>";
echo "<br>";
echo PHP_EOL;
$name="变量会被解析";
$a=<<<EOF
$name<br><a>html格式会被解析</a><br/>双引号和Html格式外的其他内容都不会被解析
<h2>"双引号外所有被排列好的格式都会被保留"</h2>
"但是双引号内会保留转义符的转义效果,比如table:\t和换行：\n下一行"
EOF;
echo $a;

echo PHP_EOL;
$abc = array(
    null => 'a',
    true => 'b', #1
    false => 'c', #1
    0 => 'd',
    1 => 'e', #1
    '' => 'f'
);
echo count($abc), "\n";
