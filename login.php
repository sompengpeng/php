<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
$link = mysqli_connect('localhost', 'root', '', 'xwuser');
if (!$link){
    echo"<script>alert('数据库连接失败！')</script>";
}else {
    if (isset($_POST['submit'])){
        $query = "select * from user where username = '{$_POST['name']}' and password = '{$_POST['pw']}'";
        $result = mysqli_query($link, $query);
        //print_r($query);
        if (mysqli_num_rows($result) == 1){
        	echo "<script>location.href='index.php'</script>";
            //header("Location:index.php");
        }else{
        	echo "<script>alert('您的账号不对，请重新登录')</script>";
        }
    }
}
?>
<style type="text/css">
 form{
    width:300px;
    background-color:#EEE0E5;
    margin-left:300px;
    margin-top:30px;
    padding:30px;
 }
</style>
<form method="post">
<label>username:<input type="text" name="name"></label>
<br/><br/>
<label>password:<input type="password" name="pw"></label>
<br/><br/>
<button type="submit" name="submit">login</button>
</form>