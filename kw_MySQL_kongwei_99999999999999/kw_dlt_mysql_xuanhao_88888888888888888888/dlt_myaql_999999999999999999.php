<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//"dltxuanhaoku"是库名
mysql_select_db("dltxuanhaoku", $con);
$kongwei=mt_rand(5,10);
$result = mysql_query("SELECT * FROM `dltxh5`   ORDER BY rand() LIMIT $kongwei");         // 'dltxh5' 是数据库表名称

while($row = mysql_fetch_array($result))
  {                                                     echo "<h1>前区</>";
  echo $row['xh5'] . " " ;                            //$row['xh5']  xh5是数据库表中的列 名称                    echo "<br />";
  }
$result = mysql_query("SELECT * FROM `dltxh2`   ORDER BY rand() LIMIT 2");//'dltxh2'是数据库表名

while($row = mysql_fetch_array($result))
  {                                                      echo "<h1>后区</>";                                  echo $row['xh2'] . " " ;                       echo "<br />";                                        }
mysql_close($con);




/*

例子举例说明以双色球为例

{//
ssqxuanhaoku是库名称


ssqxh6是表名称

//}


{//
$row['xh6']  xh6是数据库表中的列名称

一库，两表，一表一列，一表一列，一个列里面添加数字1_33,一个列里面添加数字1_16,一个列名xh6,一个列名xh1,注意是一表一列.数据类型int,
一个表建一个列，在列里面添加数据

insert添加，把数字写在value里保存即可


//}


*/




?>
  
  














