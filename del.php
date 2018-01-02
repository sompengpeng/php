<?php
 include ("conn.php");//引入连接数据库
	  if(!empty($_GET['del'])){
	  $d=$_GET['del'];
	  $sql="delete from `xwxzb` where `id`='$d'";
	  mysqli_query($conn,$sql);
	  echo"删除成功";
	  echo "<script>alert('删除成功')</script>";
	  echo "<script>location.href='index.php'</script>";
  }
 ?>