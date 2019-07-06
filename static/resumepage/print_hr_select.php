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

// 在加 附件简历
$sql = "SELECT 求职信息 FROM resume_form_online WHERE username='$username'";//
$result = mysqli_query($conn, $sql);//
$row = $result -> fetch_row();
if($row[0]==""){
    echo "0结果";
}else{
    echo $row[0];
}

 
mysqli_close($conn);
?>