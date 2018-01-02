<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
$link = mysqli_connect('localhost', 'root', '', 'xwuser');
mysqli_query($link,"set names 'utf8'");
if (!$link) {
    die('Could not connect: ' . mysql_error());
}else {
    if (isset($_POST['submit'])){
        if ($_POST['pw'] == $_POST['repw']){
    $query = "insert into user (username,password) values('{$_POST['name']}','{$_POST['pw']}')";
    $result=mysqli_query($link, $query);
    //mysqli_query($conn,"set names 'utf8'");
    header("Location:login.php");
        }else {
            echo "<script>alert('两次输入密码不一致！')</script>";
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
 button{
    margin-top:20px;
 }
</style>
<form method="post">
<label>username:<input type="text" name="name"></label>
<br/><br/>
<label>password:<input type="password" name="pw"></label>
<br/><br/>
<label>password:<input type="password" name="repw"></label>
<button type="submit" name="submit">register</button>
</form>
