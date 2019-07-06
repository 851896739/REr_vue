<?php
header('Content-Type:text/html;charset=utf8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rer_user";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
mysqli_query($conn, "set names 'utf8'");
//mysql_query("");
$a = "";
$b = "";
$a = trim($_POST["hr_select_pos"]);
$b = $_POST["hr_select_stu"];
//echo $a;
// echo $b;
if ($a == "") {
    if ($b == "") {
        // ab均为空
        $sql = "SELECT username,简历名称 FROM resume_form_online"; //
        $result = mysqli_query($conn, $sql); //
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><button onclick='print_hr_select(this)' class='btn btn-default' value='" . $row["username"] . "'>" . $row["简历名称"] . "</button></tr>";
            }
        } else {
            echo "0结果";
        }
    } else {
        // a空b不空
        $sql = "SELECT username,简历名称 FROM resume_form_online WHERE 学历='$b'"; //
        $result = mysqli_query($conn, $sql); //
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><button onclick='print_hr_select(this)' class='btn btn-default' value='" . $row["username"] . "'>" . $row["简历名称"] . "</button></tr>";
            }
        } else {
            echo "0结果";
        }
    }
} else {
    if ($b == "") {
        // a不空b空
        $sql = "SELECT username,简历名称 FROM resume_form_online WHERE 职位 LIKE '%$a%'"; //
        $result = mysqli_query($conn, $sql); //
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><button onclick='print_hr_select(this)' class='btn btn-default' value='" . $row["username"] . "'>" . $row["简历名称"] . "</button></tr>";
            }
        } else {
            echo "0结果";
        }
    } else {
        //ab不空
        $sql = "SELECT username,简历名称 FROM resume_form_online WHERE 职位 LIKE '%$a%' AND 学历='$b'"; //
        $result = mysqli_query($conn, $sql); //
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><button onclick='print_hr_select(this)' class='btn btn-default' value='" . $row["username"] . "'>" . $row["简历名称"] . "</button></tr>";
            }
        } else {
            echo "0结果";
        }
    }
}

// $sql = "SELECT * FROM resume_form_online WHERE username='$username'"; //
// $result = mysqli_query($conn, $sql); //
// $row = $result->fetch_row();
// if ($row[4] == "0") {
//     echo "0"; // 学生
// } else {
//     echo "1"; //hr
// }


mysqli_close($conn);