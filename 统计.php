<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>网站统计</title>
<style>
/* body {
	text-align:center;
	width:80%;
} */
span {
	
	/*background:#DD9115;	*/
	color:#FF0004;
	
	font-size:40px;
		
	}
.juzhong {
	
	
	/* height: auto; */
	text-align:center;
	/* margin-top:50%; */
	}	
</style>
<?php

//网站用户访问量统计,次数不会随着刷新增加
session_start();
$fp=fopen("yonghufangwen.txt","r+")or die('文件打开失败');        //存储数值的文件，如果打开失败则输出‘文件打开失败’
//$fp=fopen("count.txt","w+")or die('文件打开失败');        //存储数值的文件，如果打开失败则输出‘文件打开失败’
$yonghufangwen=intval(fgets($fp));       //读取文件内容
	
	if(!$_SESSION['connected'])
		{
			$yonghufangwen++;        //访问次数+1
			$_SESSION['connected']=true;
		}
rewind($fp);        //将指针放到开头，方便重写
fwrite($fp,$yonghufangwen);      //将数值写入指定文件中
fclose($fp);

//网站浏览用户量,次数会随着刷新增加

$fp=fopen("wangzhanliulan.txt","r+")or die('文件打开失败');        //存储数值的文件，如果打开失败则输出‘文件打开失败’
//$fp=fopen("count.txt","w+")or die('文件打开失败');        //存储数值的文件，如果打开失败则输出‘文件打开失败’
$wangzhanliulan=intval(fgets($fp));       //读取文件内容
$wangzhanliulan++;        //访问次数+1
rewind($fp);        //将指针放到开头，方便重写
fwrite($fp,$wangzhanliulan);      //将数值写入指定文件中
fclose($fp);

?>
</head>

<body>
<div class="juzhong">
<h2>本网站已被浏览<span><?=$wangzhanliulan?></span>次，您是第 <span> <?=$yonghufangwen?></span>位访问本网站的浏览者</h2>
</div>




</body>

</html>