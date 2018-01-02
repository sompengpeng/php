<?php
 include ("conn.php");//引入连接数据库
 
	 if(!empty($_POST['sub'])){
	 	$title=$_POST['title'];
	 	$con=$_POST['con'];
	     $sql="INSERT INTO `xwxzb`(`id`, `title`, `dates`, `contents`) VALUES (null,'$title',now(),'$con')";
	    mysqli_query($conn,$sql);
	    mysqli_close($conn);
	    echo "插入成功";
	    echo "<script>alert('插入数据成功')</script>";
	    echo "<script>location.href='index.php'</script>";

	 }
?>
<form action="add.php" method="post">
	标题<input type="text" name="title"><br>
	内容<textarea rows="5" cols="50" name="con"></textarea><br>
	<input type="submit" name="sub" value="发表">

</form>