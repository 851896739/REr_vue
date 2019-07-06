<?php
header('Content-Type:text/html;charset=utf8');
// 允许上传的图片后缀
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
echo $_FILES["file"]["size"];
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& in_array($extension, $allowedExts))
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "错误：: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
        echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
        echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
        
        // 判断当期目录下的 resume_file 目录是否存在该文件
        // 如果没有 resume_file 目录，你需要创建它，resume_file 目录权限为 777
        if (file_exists("resume_file/" . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " 文件已经存在。 ";
        }
        else
        {
            // 如果 resume_file 目录不存在该文件则将文件上传到 resume_file 目录下
            move_uploaded_file($_FILES["file"]["tmp_name"], "resume_file/" . $_FILES["file"]["name"]);
            echo "文件存储在: " . "resume_file/" . $_FILES["file"]["name"];
        }
    }
}
else
{
    echo "非法的文件格式";
}

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
$username=$_POST["username"];
$a1=$_FILES["file"]["name"];
$a2="resume_file/" . $_FILES["file"]["name"];
echo $username;
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
// header("location:  http://localhost/#/resumepage"); 
mysqli_close($conn);

?>