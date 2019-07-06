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
$user_id = $_POST['username'];
$a1 = $_POST["a"];//简历名称
$a2 = $_POST["b"];//职位
$a3 = $_POST["c"];//学历
$a4 = $_POST["d"];//个人信息
$a5 = $_POST["e"];//求职信息
$sql = "UPDATE resume_form_online SET 简历名称='$a1',职位='$a2',学历='$a3',个人信息='$a4',求职信息='$a5' WHERE username='$user_id'";
// $sql = "INSERT INTO resume_form_online (username,简历名称,职位,学历,个人信息,求职信息)
// VALUES ('$user_id','$a1','$a2','$a3','$a4','$a5')";
$result=$conn -> query($sql);
// $row = $result -> fetch_row();
// $result=$conn -> query($sql);

echo $result;
mysqli_close($conn);
?>