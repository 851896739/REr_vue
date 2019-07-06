<?php
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

mysqli_query($conn,"SET NAMES utf8");
//$user_id = trim($_GET["username"]);
$user_id = '1';
//$user_pass = ($_GET['password']);
//$user_select = $_GET['select'];
// echo $user_id;
// echo $user_pass;
// echo $user_select;
$a1 = $_POST['1_1_1'];
$a2 = $_POST['1_1_2'];
$a3 = $_POST['1_2_1'];
$a4 = $_POST['1_2_2'];
$a5 = $_POST['1_3_1'];
$a6 = $_POST['1_3_2'];
$a7 = $_POST['1_4_1'];
$a8 = $_POST['1_4_2'];
$a9 = $_POST['2_1_1'];
$a10 = $_POST['2_1_2'];
$a11 = $_POST['2_2_1'];
$a12 = $_POST['2_3_1'];
$a13 = $_POST['2_4_1'];
$a14 = $_POST['2_5_1'];
$a15 = $_POST['3_1_1'];
$a16 = $_POST['3_1_2'];
$a17 = $_POST['3_1_3'];
$a18 = $_POST['3_2_1'];
$a19 = $_POST['3_3_1'];
$a20 = $_POST['3_3_2'];
$a21 = $_POST['3_4_1'];
$a22 = $_POST['3_4_2'];
$a23 = $_POST['4_1_1_1'];
$a24 = $_POST['4_1_1_2'];
$a25 = $_POST['4_1_2_1'];
$a26 = $_POST['4_1_3_1'];
$a27 = $_POST['5_1_1'];
$a28 = $_POST['5_2_1'];
$a29 = $_POST['5_3_1'];
$sql = "INSERT INTO resume_form_1 (username,姓名,性别,出生日期,开始工作年份,手机,邮箱,籍贯,现居住地,教育时间1开始,教育时间1结束,学校,学历/学位,专业,专业描述,薪资1类型,薪资1下界,薪资1上界,行业,职位,到岗时间,工作类型,项目1开始,项目1结束,项目1名称,项目1描述,技能/语言,证书,其他)
VALUES ('$user_id','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29')";
$result=$conn -> query($sql);
$row = $result -> fetch_row();
$result=$conn -> query($sql);
echo $result;
if($result==true){
    echo '<script>alert("ok")</script>';
}
?>