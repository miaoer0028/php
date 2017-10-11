<?php
namespace MyProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }

function connect() { echo"定义单一命名空间示例<br>";

 }
function connectt() { echo"小童鞋们注意了<br>";

}

function connecttt() { echo"官方的示例中没有写内容测试输出为空白~haha~为什么不写内容<br>";

}

echo connect();

connect();





connectt();




connecttt();


echo CONNECT_OK , "\n"; // 输出 "1" 


 echo  "常量名称,访问常量";

echo  \MyProject\CONNECT_OK , "\n"; // 输出 "1" 






?>

