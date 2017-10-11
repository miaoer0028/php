<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//"ssqxuanhao5"是库名
mysql_select_db("ssqxuanhaoku", $con);
$kongwei=mt_rand(6,12);
$result = mysql_query("SELECT * FROM `ssqxh6`   ORDER BY rand() LIMIT $kongwei");         // 'ssqxh6' 是数据库表名称

while($row = mysql_fetch_array($result))
  {                                                     echo "<h1>前区</>";
  echo $row['xh6'] . "" ;                            //$row['xh6']  xh6是数据库表中的列 名称                    echo "<br />";
  }
$result = mysql_query("SELECT * FROM `ssqxh1`   ORDER BY rand() LIMIT 1");//'ssqxh1'是数据库表名

while($row = mysql_fetch_array($result))
  {                                                      echo "<h1>后区</>";                                  echo $row['xh1'] . " " ;                       echo "<br />";                                        }
mysql_close($con);


/*
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
  
  














