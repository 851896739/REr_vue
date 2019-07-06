<template>
  <div id="four_login">
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-12 column">
          <ul class="nav .nav-justified">
            <li
              id="li_loginAndReg1"
              role="presentation"
              class="col-md-4 column label label-success"
            >
              <button
                id="loginAndReg1"
                data-toggle="modal"
                data-target="#user_Login"
                class="label-success"
                onclick="loginStyle()"
              >
                <!--直接按钮绑定事件 用addEventlistener总是容易在元素还未生成就绑定 导致报错-->
                <h3>
                  <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                  登入/Login
                </h3>
              </button>
            </li>
            <li
              id="resume1"
              @click="flashResume()"
              role="presentation"
              class="col-md-4 column label label-info"
            >
              <h3>
                <span class="glyphicon glyphicon-list-alt"></span>
                <router-link to="/resumepage" class="lz_four_1">简历/Resume</router-link>
              </h3>
            </li>
            <li role="presentation" class="col-md-4 column label label-danger">
              <h3>
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                校园大使
                <small class="lz_four_1">
                  /了解详情
                  <!-- <router-link to="/resumepage" class="lz_four_1">/了解详情</router-link> -->
                </small>
              </h3>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div>
      <!--动态模糊框-->
      <div
        class="modal fade"
        id="user_Login"
        tabindex="-1"
        role="dialog"
        aria-labelledby="user_Msg_to"
        aria-hidden="true"
      >
        <div class="modal-dialog" id="userLoginBox">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 class="modal-title" id="user_Msg_to">
                用户登入
                <small>/注册</small>
              </h3>
            </div>
            <div class="modal-body">
              <div id="inputBox" class="text-center">
                <p id="title">锐耳人力资源网欢迎您！</p>
                <!--登入表单-->
                <form id="form1">
                  <div>
                    <div id="div-email_address" class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-user fa-lg"></i>
                      </span>
                      <input
                        id="username"
                        name="username"
                        class="form-control required"
                        type="text"
                        placeholder="用户名"
                        autofocus="autofocus"
                        maxlength="20"
                      >
                    </div>
                  </div>

                  <div>
                    <div id="div-password" class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-lock fa-lg"></i>
                      </span>
                      <input
                        id="password"
                        name="password"
                        maxlength="8"
                        class="form-control required"
                        type="password"
                        placeholder="密码"
                      >
                    </div>
                  </div>

                  <button id="login_to" type="submit" class="btn btn-block btn-success">
                    <span class="glyphicon glyphicon-log-in"></span> 登 录
                  </button>
                </form>

                <!--注册表单-->
                <form id="form2" style="display:none;">
                  <div>
                    <div id="div-email_address" class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-user fa-lg"></i>
                      </span>
                      <input
                        id="username2"
                        name="username"
                        class="form-control required"
                        type="text"
                        placeholder="用户名"
                        autofocus="autofocus"
                        maxlength="20"
                      >
                    </div>
                  </div>

                  <div>
                    <div id="div-password" class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-lock fa-lg"></i>
                      </span>
                      <input
                        id="password2"
                        name="password"
                        maxlength="8"
                        class="form-control required"
                        type="password"
                        placeholder="请输入密码"
                      >
                    </div>
                  </div>

                  <div>
                    <div id="div-password" class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-lock fa-lg"></i>
                      </span>
                      <input
                        id="rpassword2"
                        name="rpassword"
                        maxlength="8"
                        class="form-control required"
                        type="password"
                        placeholder="请再次输入密码"
                      >
                    </div>
                  </div>

                  <div>
                    <div id="div-phone" class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-lock fa-lg"></i>
                      </span>
                      <input
                        id="phone2"
                        name="phone"
                        maxlength="11"
                        class="form-control required"
                        type="tel"
                        placeholder="请输入11位手机号"
                      >
                    </div>
                  </div>

                  <div>
                    <div id="div-email" class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-envelope fa-lg"></i>
                      </span>
                      <input
                        id="email2"
                        class="form-control eamil"
                        type="text"
                        placeholder="Email"
                        name="email"
                      >
                    </div>
                  </div>

                  <button id="register_to" type="submit" class="btn btn-block btn-success">
                    <span class="glyphicon glyphicon-log-in"></span> 注 册
                  </button>
                </form>
              </div>
            </div>

            <!--底下那一行 注册和 关闭按钮-->
            <div class="modal-footer">
              <ul class="pager">
                <li class="previous">
                  <button id="to_register_form" class="btn btn-info">&larr; 注 册</button>
                </li>
                <li class="next">
                  <button
                    id="login_to_close"
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
import h from "../../../../../static/loginpage/jquery.validate.min";
export default {
  data() {
    return {};
  },
  methods: {
    /* 构建window.onLoad能运行多个函数的函数 */
    flashResume() {
      window.location.reload(true); // 重新加载页面
    }
  },
  mounted() {
    $("#form1").validate({
      rules: {
        username: {
          required: true
        },
        password: {
          required: true,
          minlength: 5
        }
      },
      messages: {
        username: "请输入用户名",
        password: {
          required: "请输入密码",
          minlength: jQuery.format("密码不能小于{0}个字符")
        }
      }
    });
    $("#form2").validate({
      rules: {
        username: "required",
        password: {
          required: true,
          minlength: 5
        },
        rpassword: {
          equalTo: "#password2"
        },
        phone: {
          required: true,
          maxlength: 11
        },
        email: {
          required: true,
          email: true
        }
      },
      messages: {
        username: "请输入姓名",
        password: {
          required: "请输入密码",
          minlength: jQuery.format("密码不能小于{0}个字符")
        },
        rpassword: {
          equalTo: "两次密码不一样"
        },
        phone: {
          required: "请输入11位手机号"
        },
        email: {
          required: "请输入邮箱",
          email: "请输入有效邮箱"
        }
      }
    });
  }
};
</script>

<style scoped>
.lz_four_1 {
  text-decoration: none;
  border: none;
  color: rgb(255, 255, 255);
}

#four_login ul li {
  margin: 1em 1%;
}

#loginAndReg1 {
  border: none;
}

@media (min-width: 992px) {
  /*当屏幕宽度大于992px*/
  .col-md-4 {
    width: 31.33333333%;
  }
}
</style>
