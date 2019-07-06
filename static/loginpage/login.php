<?php
header('Content-Type:text/html;charset=utf8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rer_user"; 
// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

mysqli_query($conn,"set names 'utf8'");
$user_id = ($_GET["username"]);
$user_pass = ($_GET['password']);
//$user_select = $_GET['select'];
// echo $user_id;
// echo $user_pass;
// echo $user_select;
//echo $username;
$sql="SELECT username,password FROM user WHERE username = '$user_id' ";

$result=$conn -> query($sql);

$row = $result -> fetch_row();
if($row[0]==""||$user_pass!=$row[1]){
    echo "找不到账户信息，请注册";
}else{
    $test ='username: ' .$row[0].'password: ' .$row[1];
    //echo $test;
    echo "登入成功";
}
?>