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
$user_id = trim($_GET["username"]); // get的是name
$user_pass = ($_GET['password']);
$user_phone = $_GET['phone'];
$user_email = $_GET['email'];
$user_type = '0'; // 先全部预设为学生
// echo $user_id;
// echo $user_pass;
// echo $user_select;
$sql="SELECT username FROM user WHERE username = '$user_id' ";
$result=$conn -> query($sql);
//mysqli_fetch_row() 函数从结果集中取得一行，并作为枚举数组返回。
$row = $result -> fetch_row();
if($row[0]==""){
    //执行插入语句
    //echo $user_phone;
    $sql = "INSERT INTO user (username,password,phone,email,type)
    VALUES ('$user_id','$user_pass','$user_phone','$user_email','$user_type')";//列值，数据
    $result=$conn -> query($sql);
    // 在简历的表格也新建记录
    $sql = "INSERT INTO resume_form_online (username)
    VALUES ('$user_id')";//列值，数据
    $result=$conn -> query($sql);
    echo "创建账户成功";
}else{
    
    echo "用户名已存在";
}
mysqli_close($conn);

?>