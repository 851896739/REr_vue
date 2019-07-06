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
//mysql_query("");
$username=$_POST["username"];

// 检查是否位hr 是返回1  不是 返回0
$sql = "SELECT * FROM user WHERE username='$username'";//
$result = mysqli_query($conn, $sql);//
$row = $result -> fetch_row();
if($row[4]=="0"){
    echo "0"; // 学生
}else{
    echo "1"; //hr
}

 
mysqli_close($conn);
?>