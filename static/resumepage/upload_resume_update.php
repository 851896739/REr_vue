<?php
header('Content-Type:text/html;charset=utf8');
//链接数据库 存放信息
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
$username="";
$a1=$_FILES["file"]["name"];
$a2="resume_file/" . $_FILES["file"]["name"];
echo $a1;
echo $a2;
$sql = "INSERT INTO resume_form_online (附件简历名称,附件简历位置)
VALUES ('$a1','$a2') WHERE username='$username'";

$sql = "UPDATE resume_form_online SET 附件简历名称='$a1',附件简历位置='$a2'
WHERE username='$username'";

$result=$conn -> query($sql);
// $row = $result -> fetch_row();
// $result=$conn -> query($sql);
echo $result;
 
mysqli_close($conn);

?>