<a href="add.php">插入数据</a>
<?php
 include ("conn.php");//引入连接数据库
 
 	$sql="select * from `xwxzb` order by id desc";
 	$query=mysqli_query($conn,$sql);
 	//$rs=mysqli_fetch_array($query);
 	while($rs=mysqli_fetch_array($query)){
	
?>
<h2>序号<?php echo $rs['id']?>|<a href="edit.php?id=<?php echo $rs['id']?>">编辑</a>|<a href="del.php?del=<?php echo $rs['id']?>">删除</a></h2>
<h2>标题<?php echo $rs['title']?></h2>
<li>时间为：<?php echo $rs['dates']?></li>
<p>内容是：<?php echo $rs['contents']?></p>
<hr>
<?php 
}

 ?>	