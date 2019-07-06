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
$sql = "SELECT * FROM resume_form_online WHERE username='$username'";//
$result = mysqli_query($conn, $sql);//
$row = $result -> fetch_row();
if($row[0]==""){
    echo "0";
}else{
    if($row[6]!=""){
        header('Content-Type:text/html;charset=utf8');
        echo ("<script type='text/javascript'>alert('222');</script>");

    }
    
}

 
mysqli_close($conn);
?>