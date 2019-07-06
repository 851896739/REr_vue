<template>
  <div class="container" id="log">
    <div class="col-md-12 column">
      <div class="table table-bordered" id="resume_table">
        <ul class="nav nav-tabs">
          <li>
            <a id="resume_table1" href="#resume_table_1" data-toggle="tab">在线简历</a>
          </li>
          <li class>
            <a id="resume_table2" @click="my_resume()" href="#resume_table_2" data-toggle="tab">我的简历</a>
          </li>
          <li class>
            <a id="resume_table3" @click="check_hr()" href="#resume_table_3" data-toggle="tab">查阅简历</a>
            <!-- <a id="resume_table3" @click="check_hr()" href="#resume_table_3" data-toggle="tab">其他</a> -->
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="resume_table_1">
            <!--整个在线简历的表单-->
            <div id="resume_form_1" class="form-horizontalcol-sm-12 col-md-12">
              <div id="personal">
                <!-- 个人信息 -->
                <personal></personal>
              </div>
              <div id="info">
                <!-- 学历信息 -->
                <education></education>
                <!--求职意向-->
                <jobIdea></jobIdea>
                <!--项目经验-->
                <project></project>
                <!--技能特长-->
                <skill></skill>
              </div>
              <div class="form-actions">
                <button
                  id="to_resume_save"
                  data-toggle="modal"
                  data-target="#to_resume_box"
                  class="btn btn-info"
                  @click="toResumeSave()"
                >保存修改</button>
                <button class="btn">取消</button>
              </div>
            </div>
          </div>

          <div class="tab-pane" id="resume_table_2">
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">附件简历</h3>
              </div>
              <div class="panel-body">
                <div>
                  <form
                    action="../../../../static/resumepage/upload_resume.php"
                    method="POST"
                    enctype="multipart/form-data"
                  >
                    <label for="file">上传附件简历：</label>
                    <br>用户名：
                    <input
                      type="text"
                      name="username"
                      id="upload_resume_uesrname"
                      readonly="readonly"
                      value
                    >
                    <br>附件简历：
                    <input type="file" name="file" id="file">
                    <input class="btn btn-info" type="submit" value="确认上传">
                  </form>
                </div>
              </div>
            </div>

            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">我的在线/附件简历</h3>
              </div>
              <div id="resume_o"></div>
            </div>
          </div>

          <div class="tab-pane" id="resume_table_3">
            <div id="user_stu">无访问权限</div>
            <div id="user_hr">
              <div>
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title">选择简历</h3>
                    <table>
                      <caption>
                        简历筛选
                        <small>/不设置条件则默认全选</small>
                      </caption>
                      <tr>
                        <td>
                          职位：
                          <input type="text" name="hr_select_pos" id="hr_select_pos" placeholder="输入关键字即可查询">
                        </td>
                        <td>
                          学历：
                          <select name="hr_select_stu" id="hr_select_stu">
                            <option value="本科">本科</option>
                            <option value="硕士">硕士</option>
                            <option value="博士">博士</option>
                            <option value="大专">大专</option>
                            <option value>全部</option>
                          </select>
                        </td>
                        <td>
                          <button class="btn btn-info" @click="hr_select()">选择</button>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="panel-body">
                    <!-- 左边栏 -->
                    <div class="col col-md-3">
                      <div>
                        <h5>简历名称</h5>
                        <table class="table table-striped">
                          <tbody id="hr_select_resume_list"></tbody>
                        </table>
                      </div>
                    </div>
                    <!-- 简历内容显示区域 -->
                    <div class="col col-md-9">
                      简历详情：
                      <div id="print_hr_select">
                        无内容
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <!--提交简历信息的动态模糊框-->
      <div
        class="modal fade"
        id="to_resume_box"
        tabindex="-1"
        role="dialog"
        aria-labelledby="user_Msg_to"
        aria-hidden="true"
      >
        <div class="modal-dialog" id>
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">
                {{to_resume_box_h3_username}}
                <small>/在线简历信息</small>
              </h3>
            </div>
            <div class="modal-body">
              <div class="text-center">
                <p id="to_resume_box_title">Tip：向HR提供求职信息</p>
                <!--要提交的 简历信息 表单method="POST"
                action="../../../../static/resumepage/resume_form_online.php"-->
                <form id="to_resume_form">
                  <div id="to_resume_inputBox"></div>
                  <!--要提交的 简历信息 -->
                </form>
              </div>
            </div>

            <!--底下那一行 注册和 关闭按钮-->
            <div class="modal-footer">
              <ul class="pager">
                <li class="previous">
                  <button
                    id="to_upload_resume"
                    class="btn btn-success"
                    @click="to_upload_resume()"
                  >提交</button>
                </li>
                <li class="next">
                  <button
                    id="to_upload_resume_close"
                    type="button"
                    class="btn btn-danger"
                    data-dismiss="modal"
                  >关 闭</button>
                </li>
              </ul>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal -->
      </div>
      <!--弹出框口结束-->
    </div>
  </div>
</template>

<script>
import h from "../../../../static/loginpage/jquery.validate.min";
import personal from "./part/personal";
import education from "./part/education";
import jobIdea from "./part/jobIdea";
import project from "./part/project";
import skill from "./part/skill";
export default {
  data() {
    return {
      tag: false, // 设置为成功登入的标志
      to_resume_box_h3_username: "",
      jlmc: "",
      jbx: ""
    };
  },
  components: { personal, education, jobIdea, project, skill },
  methods: {
    //点击 我的简历 中的保存
    toResumeSave() {
      //alert("S");
      this.to_resume_box_h3_username = (function() {
        var strCookie = document.cookie;
        var arrCookie = strCookie.split("; "); // 每个cookie都是键值对 每个键值对用 ；分开 分号后有个空格
        for (var i = 0; i < arrCookie.length; i++) {
          var arr = arrCookie[i].split("="); // 把键值对根据等号划分
          if (arr[0] == "username") return arr[1]; // 返回koolie中键值对的 值
        }
        return ""; // 找不到cookie 返回空
      })(); // 匿名的自执行函数要在末尾加括号
      console.log("149: " + this.to_resume_box_h3_username);
      if (this.to_resume_box_h3_username == "") {
        alert("请先登入！");
        location.reload(true);
      } else {
        var jbxx =
          '<div><table class="table table-hover"><caption class="alert alert-info"><span class="glyphicon glyphicon-user"></span> 基本信息</caption><tbody><tr><td>简历名称</td><td>' +
          $("#resume_name").val() +
          "<small>（/用于向HR展示）</small></td></tr><tr><td>姓名</td><td>" +
          $("#1_1_1").val() +
          "</td><td>性别</td><td>" +
          $("input[name='1_1_2']:checked").val() +
          "</td></tr><tr><td>出生日期</td><td>" +
          $("#1_2_1").val() +
          "</td><td>开始工作年份</td><td>" +
          $("#1_2_2").val() +
          "</td></tr><tr><td>手机</td><td>" +
          $("#1_3_1").val() +
          "</td><td>邮箱</td><td>" +
          $("#1_3_2").val() +
          "</td></tr><tr><td>籍贯</td><td>" +
          $("#1_4_1").val() +
          "</td><td>现居住地</td><td>" +
          $("#1_4_2").val() +
          "</td></tr></tbody></table></div>";

        var obj = document.getElementById("to_resume_inputBox");
        console.log($("#3_2_1").val());
        var jyjl =
          '<div><table class="table table-hover"><caption class="alert alert-info"><span class="glyphicon glyphicon-education"></span> 教育经历</caption><tbody><tr><td>时间</td><td>' +
          $("#2_1_1").val() +
          '<span class="glyphicon glyphicon-arrow-right"></span>' +
          $("#2_1_2").val() +
          "</td></tr><tr><td>学校</td><td>" +
          $("#2_2_1").val() +
          "</td></tr><tr><td>学历/学位</td><td>" +
          $("#2_3_1").val() +
          "</td></tr><tr><td>专业</td><td>" +
          $("#2_4_1").val() +
          "</td></tr><tr><td>专业描述</td><td>" +
          $("#2_5_1").val() +
          "</td></tr></tbody></table></div>";

        var qzyx =
          '<div><table class="table table-hover"><caption class="alert alert-info"><span class="glyphicon glyphicon-briefcase"></span> 求职意向</caption><tbody><tr><td>期望薪资</td><td>' +
          $("#3_1_1").val() +
          '<span class="glyphicon glyphicon-indent-left"></span>' +
          $("#3_1_2").val() +
          '<span class="glyphicon glyphicon-minus"></span>' +
          $("#3_1_3").val() +
          "元/月</td></tr><tr><td>地点</td><td>" +
          $("#3_2_1").val() +
          "</td></tr><tr><td>行业</td><td>" +
          $("#3_3_1").val() +
          "</td><td>职位</td><td>" +
          $("#3_3_2").val() +
          "</td></tr><tr><td>到岗时间</td><td>" +
          $("#3_4_1").val() +
          "</td><td>工作类型</td><td>" +
          $("#3_4_2").val() +
          "</td></tr></tbody></table></div>";

        var xmjy =
          '<div><table class="table table-hover"><caption class="alert alert-info"><span class="glyphicon glyphicon-th-list"></span> 项目经验<span id="addProject" class="glyphicon glyphicon-plus-sign">' +
          "<small>/添加</small></span></caption><tbody><tr><td>时间</td><td>" +
          $("#4_1_1_1").val() +
          '<span class="glyphicon glyphicon-arrow-right"></span>' +
          $("#4_1_1_2").val() +
          "</td></tr><tr><td>项目名称</td><td>" +
          $("#4_1_2_1").val() +
          "</td></tr><tr><td>项目描述</td><td>" +
          $("#4_1_3_1").val() +
          "</td></tr></tbody></table></div>";

        var jntc =
          '<div><table class="table table-hover"><caption class="alert alert-info"><span class="glyphicon glyphicon-thumbs-up"></span> 技能特长（包含IT技能、语言能力、证书、成绩、培训经历）</caption><tbody><tr><td>技能/语言</td><td>' +
          $("#5_1_1").val() +
          "</td><td></td><td></td></tr><tr><td>证书</td><td>" +
          $("#5_2_1").val() +
          "</td></tr><tr><td>其他</td><td>" +
          $("#5_3_1").val() +
          "</td></tr></tbody></table></div>";

        obj.innerHTML = jbxx+jyjl + qzyx + xmjy + jntc;
        this.jbx = jbxx; //把基本信息赋值给 this,jbx
        this.jlmc = $("#resume_name").val(); //把简历名称赋值给 this,jimc
      }
    },
    //点击 弹出框的 提交
    to_upload_resume() {
      var xmlhttp;
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest(); // 创建对象
      } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.open(
        "POST",
        "../../../../static/resumepage/resume_form_online.php",
        false
      ); // 改成了true则是异步请求了
      //POST方式需要自己设置http的请求头
      xmlhttp.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
      );
      xmlhttp.onreadystatechange = function() {
        console.log("208");
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          if (xmlhttp.responseText != "找不到账户信息，请注册") {
            // 登入成功 可以在这里变化dom元素
            var textArray = xmlhttp.responseText; // 获得字符串形式的响应数据
            //textArray 就是php文件echo出来的那些最终响应信息
            console.log("214-响应结果： " + textArray);
          }
        } else {
          // 如果是找不到账号信息
          var textArray = xmlhttp.responseText; // 获得字符串形式的响应数据
          console.log("219-响应结果： " + textArray);
        }
      };
      xmlhttp.send(
        "username=" +
          this.to_resume_box_h3_username +
          "&a=" +
          $("#resume_name").val() +
          "&b=" +
          $("#3_3_2").val() +
          "&c=" +
          $("#2_3_1").val() +
          "&d=" +
          this.jbx +
          "&e=" +
          document.getElementById("to_resume_inputBox").innerHTML
      ); // 发送 HTTP 请求，使用传递给 open() 方法的参数
      document.getElementById("to_upload_resume_close").click(); //实现点击提交后关闭弹出框
      alert("上传成功！可在我的简历中查询！");
    },
    //点击 我的简历
    my_resume() {
      //alert("2");
      this.to_resume_box_h3_username = (function() {
        var strCookie = document.cookie;
        var arrCookie = strCookie.split("; "); // 每个cookie都是键值对 每个键值对用 ；分开 分号后有个空格
        for (var i = 0; i < arrCookie.length; i++) {
          var arr = arrCookie[i].split("="); // 把键值对根据等号划分
          if (arr[0] == "username") return arr[1]; // 返回koolie中键值对的 值
        }
        return ""; // 找不到cookie 返回空
      })();
      // 找不到登入信息
      if (this.to_resume_box_h3_username == "") {
        alert("请先登入！");
        location.reload(true); //刷新
      } else {
        //把上传附件简历的用户名设置好
        document
          .getElementById("upload_resume_uesrname")
          .setAttribute("value", this.to_resume_box_h3_username);
        var xmlhttp;
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest(); // 创建对象
        } else {
          // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.open(
          "POST",
          "../../../../static/resumepage/my_resume.php",
          false
        ); // 改成了true则是异步请求了
        //POST方式需要自己设置http的请求头
        xmlhttp.setRequestHeader(
          "Content-Type",
          "application/x-www-form-urlencoded"
        );
        xmlhttp.onreadystatechange = function() {
          console.log("317");
          console.log(
            "xmlhttp.readyState: " +
              xmlhttp.readyState +
              "xmlhttp.status: " +
              xmlhttp.status
          );
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText != "0") {
              // 登入成功 可以在这里变化dom元素
              console.log("322");
              var textArray = xmlhttp.responseText; // 获得字符串形式的响应数据
              //textArray 就是php文件echo出来的那些最终响应信息
              console.log("301-响应结果： ");
              document.getElementById("resume_o").innerHTML =
                xmlhttp.responseText;
            } else {
              console.log("342");
              var textArray = xmlhttp.responseText; // 获得字符串形式的响应数据
              console.log("333-响应结果： " + textArray);
              document.getElementById("resume_o").innerHTML = "无在线简历";
            }
          } else {
            console.log("348");
            // 如果是找不到账号信息
            var textArray = xmlhttp.responseText; // 获得字符串形式的响应数据
            console.log("340-响应结果： " + textArray);
          }
        };
        console.log("337： " + this.to_resume_box_h3_username);
        xmlhttp.send("username=" + this.to_resume_box_h3_username); // 发送 HTTP 请求，使用传递给 open() 方法的参数
        //document.getElementById("resume_o").innerHTML=xmlhttp.responseText;
      }
    },
    //点击上传附件简历
    resume_file_upload() {
      this.to_resume_box_h3_username = (function() {
        var strCookie = document.cookie;
        var arrCookie = strCookie.split("; "); // 每个cookie都是键值对 每个键值对用 ；分开 分号后有个空格
        for (var i = 0; i < arrCookie.length; i++) {
          var arr = arrCookie[i].split("="); // 把键值对根据等号划分
          if (arr[0] == "username") return arr[1]; // 返回koolie中键值对的 值
        }
        return ""; // 找不到cookie 返回空
      })();
      console.log("387: " + this.to_resume_box_h3_username);
      var xmlhttp;
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest(); // 创建对象
      } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.open(
        "POST",
        "../../../../static/resumepage/upload_resume_update.php",
        true
      ); // 改成了true则是异步请求了
      //POST方式需要自己设置http的请求头
      xmlhttp.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
      );
      xmlhttp.onreadystatechange = function() {
        console.log("407");
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          if (xmlhttp.responseText != "找不到账户信息，请注册") {
            // 登入成功 可以在这里变化dom元素
            var textArray = xmlhttp.responseText; // 获得字符串形式的响应数据
            //textArray 就是php文件echo出来的那些最终响应信息
            console.log("417-响应结果： ");
          }
        } else {
          // 如果是找不到账号信息
          var textArray = xmlhttp.responseText; // 获得字符串形式的响应数据
          console.log("422-响应结果： " + xmlhttp.readyState);
        }
      };
      console.log("421: " + this.to_resume_box_h3_username);
      xmlhttp.send("username=" + this.to_resume_box_h3_username); // 发送 HTTP 请求，使用传递给 open() 方法的参数
      alert("附件简历上传成功！");
    },
    // 检查是不是hr账号 显示对应的内容
    check_hr() {
      this.to_resume_box_h3_username = (function() {
        var strCookie = document.cookie;
        var arrCookie = strCookie.split("; "); // 每个cookie都是键值对 每个键值对用 ；分开 分号后有个空格
        for (var i = 0; i < arrCookie.length; i++) {
          var arr = arrCookie[i].split("="); // 把键值对根据等号划分
          if (arr[0] == "username") return arr[1]; // 返回koolie中键值对的 值
        }
        return ""; // 找不到cookie 返回空
      })();
      // 找不到登入信息
      if (this.to_resume_box_h3_username == "") {
        alert("请先登入！");
        location.reload(true); //刷新
      } else {
        var xmlhttp;
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest(); // 创建对象
        } else {
          // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.open(
          "POST",
          "../../../../static/resumepage/check_hr.php",
          false
        ); // 改成了true则是异步请求了
        //POST方式需要自己设置http的请求头
        xmlhttp.setRequestHeader(
          "Content-Type",
          "application/x-www-form-urlencoded"
        );
        xmlhttp.onreadystatechange = function() {
          console.log("317");
          console.log(
            "xmlhttp.readyState: " +
              xmlhttp.readyState +
              "xmlhttp.status: " +
              xmlhttp.status
          );
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText == "0") {
              // 学生
              document.getElementById("user_hr").style.display = "none";
              console.log("489");
              var textArray = xmlhttp.responseText; // 获得字符串形式的响应数据

              console.log("492-响应结果： ");
            } else {
              document.getElementById("user_stu").style.display = "none";
              console.log("495");
              var textArray = xmlhttp.responseText; // 获得字符串形式的响应数据
              console.log("497-响应结果： " + textArray);
            }
          } else {
            console.log("348");
            // 如果是找不到账号信息
            var textArray = xmlhttp.responseText; // 获得字符串形式的响应数据
            console.log("504： " + textArray);
          }
        };
        console.log("337： " + this.to_resume_box_h3_username);
        xmlhttp.send("username=" + this.to_resume_box_h3_username); // 发送 HTTP 请求，使用传递给 open() 方法的参数
        //document.getElementById("resume_o").innerHTML=xmlhttp.responseText;
      }
    },
    //打印出hr选择的简历
    hr_select() {
      //将符合条件的简历名称 放在左边栏
      this.to_resume_box_h3_username = (function() {
        var strCookie = document.cookie;
        var arrCookie = strCookie.split("; "); // 每个cookie都是键值对 每个键值对用 ；分开 分号后有个空格
        for (var i = 0; i < arrCookie.length; i++) {
          var arr = arrCookie[i].split("="); // 把键值对根据等号划分
          if (arr[0] == "username") return arr[1]; // 返回koolie中键值对的 值
        }
        return ""; // 找不到cookie 返回空
      })();
      // 找不到登入信息
      var xmlhttp;
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest(); // 创建对象
      } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.open(
        "POST",
        "../../../../static/resumepage/hr_select_resume_list.php",
        false
      ); // 改成了true则是异步请求了
      //POST方式需要自己设置http的请求头
      xmlhttp.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
      );
      xmlhttp.onreadystatechange = function() {
        console.log("317");
        console.log(
          "xmlhttp.readyState: " +
            xmlhttp.readyState +
            "xmlhttp.status: " +
            xmlhttp.status
        );
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          if (xmlhttp.responseText == "0结果") {
            document.getElementById("hr_select_resume_list").innerHTML =
              "无结果";
            document.getElementById("print_hr_select").innerHTML="无内容";
          } else {
            document.getElementById("hr_select_resume_list").innerHTML =
              xmlhttp.responseText;
            document.getElementById("print_hr_select").innerHTML="无内容";
          }
        } else {
          // 如果是找不到账号信息
          var textArray = xmlhttp.responseText; // 获得字符串形式的响应数据
          console.log("504： " + textArray);
        }
      };
      var hr_select_pos = $("#hr_select_pos").val();
      var hr_select_stu = $("#hr_select_stu").val();
      xmlhttp.send(
        "hr_select_pos=" + hr_select_pos + "&hr_select_stu=" + hr_select_stu
      ); // 发送 HTTP 请求，使用传递给 open() 方法的参数
    }
    // hr点击简历名称 显示简历内容 函数在login中
  }
};
</script>

<style scoped>
#log {
  background-size: cover;
  font-size: 1em;
  margin-top: 1em;
}
.form {
  background: rgba(255, 255, 255, 0.2);
  width: 400px;
  margin: 1em auto;
  background: url(../../../../static/images/loginpage/login.jpg) no-repeat;
}
#login_form {
  display: block;
}
#register_form {
  display: none;
}
#resume_form_1 {
  margin-top: 1em;
}
.fa {
  display: inline-block;
  top: 27px;
  left: 6px;
  position: relative;
  color: #ccc;
}
input[type="text"],
input[type="password"] {
  padding-left: 26px;
}
.checkbox {
  padding-left: 21px;
}
</style>