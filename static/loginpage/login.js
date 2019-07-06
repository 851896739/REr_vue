/* 构建window.onLoad能运行多个函数的函数 */
function addLoadEvent(func) {
    var oldOnLoad = window.onload;
    if (typeof window.onload != 'function') {
        window.onload = func;
    } else {
        window.onload = function () {
            oldOnLoad();
            func();
        }
    }
}

/* 给 登入按钮绑定事件*/
function loginStyle() {
    var classes = "", oldClasses = "";
    var userId = document.getElementById("username");
    var userPass = document.getElementById("password");
    var login = document.getElementById("login_to");
    var register = document.getElementById("to_register_form");

    //给弹出框的注册按钮绑定事件
    register.addEventListener("click", function (event) {
        event.preventDefault();//阻止点击按钮的默认事件
        console.log("25: 给注册按钮绑定事件");
        // 没点击注册前 注册页面是隐藏的 点击后 显示注册页面form2 隐藏登入界面form1 
        document.getElementById("form1").style.display = "none";
        document.getElementById("form2").style.display = "block";
        document.getElementById("to_register_form").style.display = "none";
        console.log("30");
        document.getElementById("title").setAttribute("class", "btn btn-info");
        document.getElementById("title").innerHTML = "锐耳人力资源网欢迎您！";

        //给注册页面的 注册 按钮绑定注册事件
        document.getElementById("register_to").addEventListener("click", function (event) {
            //获取 注册 的 账号，密码，邮箱
            var userId2 = document.getElementById("username2").value;
            var userPass2 = document.getElementById("password2").value;
            var userphone2 = document.getElementById("phone2").value;
            var useremail2 = document.getElementById("email2").value;
            //用户正确输入完整注册信息后
            if ((userId2 != "") && (userPass2 != "") && (useremail2 != "")) {
                event.preventDefault();//阻止点击按钮的默认事件
                console.log("id:" + userId2 + " pass:" + userPass2 + " phone:" + userphone2 + " email:" + useremail2);
                ajaxregister(userId2, userPass2, userphone2, useremail2); //传入注册函数
            }

        })
    })

    //给弹出框的登入按钮绑定事件
    login.addEventListener("click", function (event) {
        console.log("21111");
        if (userId.value != "" && userPass.value != "") {
            oldClasses = this.getAttribute("class"); // 登入按钮对象的class属性
            classes = oldClasses + " disabled";
            this.setAttribute("class", classes);  // 给这个按钮的class 添加一个类 更改显示文字
            this.innerHTML = "<i class='icon-refresh icon-spin'></i> 正在登陆...";

            var idU = userId.value;
            var passU = userPass.value;
            // alert("idU: " + idU + "passU: " + passU)
            event.preventDefault(); // 阻止默认事件
            ajaxLogin(idU, passU); //调用下方的函数

        } else { // 如果账号密码都不输入
            if (userId.value == "") { // 如果账号不输入
                classes = userId.parentNode.getAttribute("class");
                userId.parentNode.setAttribute("class", classes + " has-error");
            }
            if (userPass.value == "") {
                classes = userPass.parentNode.getAttribute("class");
                userPass.parentNode.setAttribute("class", classes + " has-error");
            }
        }
    }, false);
    var focus = function () { // 还没发现是干嘛的
        this.parentNode.setAttribute("class", "input-group");
    };
}

/* Ajax注册 注册成功返回1 再调用ajax登入 */
function ajaxregister(id, pass, ph, em) {
    console.log("83");
    var xmlhttp;
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest(); // 创建对象
    } else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET", "./static/loginpage/register.php?username=" + id + "&password=" + pass + "&phone=" + ph + "&email=" + em, false); // 改成了true则是异步请求了
    console.log("91");
    xmlhttp.onreadystatechange = function () {
        console.log("93");
        console.log("readyState: " + xmlhttp.readyState + " status: " + xmlhttp.status);
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText == "创建账户成功") { // 注册成功
                //调用登入函数
                console.log("98 " + xmlhttp.responseText);
                // 注册成功后显示欢迎信息
                document.getElementById("inputBox").innerHTML = '<h3>欢迎您的加入！</h3>';
                // 把原来这个关闭按钮变成 登入 调用登入方法
                var ltc = document.getElementById("login_to_close");
                ltc.innerHTML = '<span class="glyphicon glyphicon-heart-empty"></span> 现在开始';
                ltc.addEventListener("click", function (event) {
                    event.preventDefault();// 组织默认事件
                    //ltc.innerHTML = "<i class='icon-refresh icon-spin'></i> 正在登陆...";
                    ajaxLogin(id, pass);//点击 现在开始 这个按钮 执行登入
                })
            }
            else {
                var tips = "用户名已存在,请登入或更换用户名！";
                // alert(tips);
                console.log(xmlhttp.responseText);
                var classes = "alert alert-danger";
                document.getElementById("title").innerHTML = tips;
                document.getElementById("title").setAttribute("class", classes);

            }
        }
    }; // 没有冒号
    xmlhttp.send(); // 发送 HTTP 请求，使用传递给 open() 方法的参数
}

/* Ajax登录 */
function ajaxLogin(id, pass) {
    var xmlhttp;

    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest(); // 创建对象
    } else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.open("GET", "./static/loginpage/login.php?username=" + id + "&password=" + pass, false); // 改成了true则是异步请求了
    xmlhttp.onreadystatechange = function () {
        console.log("62");
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText == "登入成功") { // 登入成功 可以在这里变化dom元素
                var textArray = xmlhttp.responseText;  // 获得字符串形式的响应数据
                //textArray 就是php文件echo出来的那些最终响应信息
                console.log("68-响应结果： " + textArray);


                var exp = new Date();// 新建一个日期对象啊
                var passHash = (pass);// var passHash = hex_md5(pass); // 通过md5加密
                exp.setTime(exp.getTime() + (1 * 60 * 60 * 1000)); // 设置一个时间来当作cookie的超时 单位为毫秒
                //document.cookie 是把键值对赋给cookie 可以用；号分开
                addCookie("username", id, 1);// 一小时过期
                addCookie("password", passHash, 1);
                console.log(document.cookie);

                //document.getElementById("user_Login").style.display = "none"; // 把弹出的登入窗口隐藏
                var oDiv = document.getElementById('user_Login');   //点击了下 弹出窗口
                oDiv.onclick = function () { };   //给元素增加点击事件
                oDiv.click(); //执行点击关闭事件，这样就关闭了弹出的登入窗口

                // 让登入的按钮 变换成退出内容
                document.getElementById("li_loginAndReg1").innerHTML = '<button id = "loginAndReg1" class="label-success"><h3>已登入<small style="color:white;">/退出</small></h3></button>';
                $(document).ready(function () {
                    var login = document.getElementById("loginAndReg1");
                    login.addEventListener("click", exitlogin); // 绑定清除cookie 并刷新
                });

                // 给这个退出按钮绑定退出功能


                removeElem("warningTip");//移除某些元素 函数在下面
                if (document.getElementById("music_btn")) {
                    document.getElementById("music_btn").removeAttribute("disabled");
                }

            } else { // 如果是找不到账号信息
                var tips = "账号或密码错误！";
                // alert(tips);
                console.log(xmlhttp.responseText);
                var classes = "alert alert-danger";
                document.getElementById("title").innerHTML = tips;
                document.getElementById("title").setAttribute("class", classes);

                classes = "btn btn-block btn-success glyphicon glyphicon-log-in";
                document.getElementById("login_to").setAttribute("class", classes);
                document.getElementById("login_to").innerHTML = " 登 录";
            }
        }
    };
    xmlhttp.send(); // 发送 HTTP 请求，使用传递给 open() 方法的参数
}

/* 新建提示框innerHTML */
function alertBox(tip, color) {
    var box = document.createElement("div");
    box.setAttribute("id", "warningTip");
    box.setAttribute("class", "alert alert-" + color + " alert-dismissible");
    box.setAttribute("role", "alert");
    box.innerHTML = "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" + tip;
    return box;
}

/* 删除指定id的元素 */
function removeElem(elemId) {
    if (document.getElementById(elemId)) {
        var elem = document.getElementById(elemId);
        elem.parentNode.removeChild(elem);
    }
}


/* 添加cookie  cookie名称，cookie值，以及在多少小时后过期 */
function addCookie(name, value, expireHours) {
    var d = new Date(); // 创建一个日期对象
    d.setTime(d.getTime() + (expireHours * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();// expires用来规定超时时间 cookie中看不到
    document.cookie = name + "=" + value + ";" + expires; // 设置每个cookie的格式
}
/* 获取指定cookie */
function getCookie(name) { // 传入cookie的名字
    var strCookie = document.cookie;
    var arrCookie = strCookie.split("; "); // 每个cookie都是键值对 每个键值对用 ；分开 分号后有个空格
    for (var i = 0; i < arrCookie.length; i++) {
        var arr = arrCookie[i].split("="); // 把键值对根据等号划分
        if (arr[0] == name)
            return arr[1];   // 返回koolie中键值对的 值 
    }
    return ""; // 找不到cookie 返回空
}

/* 读取cookie识别登录状态 */
function checkLogin() {
    var id = getCookie("username");
    var pass = getCookie("password");
    if (id != "" && pass != "") { // 若cookie不为空
        console.log("232");
        ajaxLogin(id, pass);// 调用登入函数
    }
}

/* 退出登录刷新页面,删除cookie状态 绑定给退出这个按钮把*/
function exitLogin() {
    document.cookie = "username=";
    document.cookie = "password=";
    window.location.reload(true);
}

function exitlogin() { // 点击页面的退出按钮（原登入按钮）清除cookie
    addCookie("username", "", -1);// 同名cookie会覆盖
    addCookie("password", "", -1);// 大小写敏感 
    window.location.reload(true); // 重新加载页面
}

/* 给简历按钮绑定事件 事件执行是捕获 从外层到内层*/
function resumeStyle() {
    document.getElementById("resume1").addEventListener("click", function (event) {

    })
}
/* hr点击简历列表 显示简历*/
function print_hr_select(obj) {
    var xmlhttp;
    if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    } else {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open(
      "POST",
      "./static/resumepage/print_hr_select.php",
      false
    ); // 改成了true则是异步请求了
    xmlhttp.setRequestHeader(
      "Content-Type",
      "application/x-www-form-urlencoded"
    );
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        if (xmlhttp.responseText == "0结果") {
          document.getElementById("print_hr_select").innerHTML =
            "无内容";
        } else {
          document.getElementById("print_hr_select").innerHTML =
            xmlhttp.responseText;
        }
      } else {
        // 如果是找不到账号信息
        var textArray = xmlhttp.responseText;
      }
    };
    xmlhttp.send(
      "username=" + obj.value
    );
  }