<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

	//mysql_connect("localhost","root","");
	@$conn = mysqli_connect('localhost', 'root', '', 'sompeng') or die("mysql连接失败");
	//@mysql_select_db("php100",$connect)or die("db链接失败");
	/*@$conn = mysqli_connect('localhost', 'root','', 'php100') or die("mysql连接失败");*/
	//mysql_set_charset("utf8");
	mysqli_query($conn,"set names 'utf8'");

?>