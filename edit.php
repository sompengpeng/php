<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
 include ("conn.php");//引入连接数据库

 	if(!empty($_GET['id'])){
 		$sql="select * from xwxzb where `id`='".$_GET['id']."'";
 		$query=mysqli_query($conn,$sql);
 		$rs=mysqli_fetch_array($query);
 		/*print_r($rs);*/
 	}

	if(!empty($_POST['sub'])){
	 	$title=$_POST['title'];
	 	$con=$_POST['con'];
	 	$hid=$_POST['hid'];
	    $sql="update `xwxzb` set `title`='$title',contents='$con' where id='$hid' limit 1";
	    mysqli_query($conn,$sql);
	    mysqli_close($conn);
	    //echo"修改成功！";
	    echo "<script>alert('修改成功')</script>";
	    echo "<script>location.href='index.php'</script>";

	 }
?>
<form action="edit.php" method="post">
	<input type="hidden" name="hid" value="<?php echo $rs['id']?>">
	标题<input type="text" name="title" value="<?php echo $rs['title']?>"><br>
	内容<textarea rows="5" cols="50" name="con"><?php echo $rs['contents']?></textarea><br>
	<input type="submit" name="sub" value="发表">

</form>