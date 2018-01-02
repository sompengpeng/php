<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$servername = "localhost:3306";
$username = "root";
$password = "";

// 创建连接
$conn = mysqli_connect($servername, $username, $password);
// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
 if(!empty($_POST['sub'])){
	 	$title=$_POST['title'];
	 	$con=$_POST['con'];
	    echo $sql="insert into news('id','title','dates','contents') values(1,'$title',now(),'$con')";
	    mysqli_query($conn,$sql);
	   
	 }

// 创建数据库
/*$sql = "CREATE DATABASE mysomDB";
if (mysqli_query($conn, $sql)) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}*/

mysqli_close($conn);
?>

<form action="add.php" method="post">
	标题<input type="text" name="title"><br>
	内容<textarea rows="5" cols="50" name="con"></textarea><br>
	<input type="submit" name="sub" value="发表">

</form>