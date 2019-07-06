<template>
  <!--组件模板-->
  <div id="twooption">
    <div class="container">
      <div class="masthead">
        <nav>
          <ul class="nav nav-justified">
            <li>
              <router-link to="/home" onclick="location.reload();">主页</router-link>
            </li>
            <li class="dropdown">
              <a href class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1">
                <router-link to="/policypage">就业政策</router-link>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" id="dropDownCur">
                <li>
                  <a href="#">国家</a>
                </li>
                <li>
                  <a href="#">省市/自治区</a>
                </li>
                <li>
                  <a href="#">学校</a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a href="#">其它</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">企业信息</a>
            </li>
            <li>
              <a href="#">HR建议</a>
            </li>
            <li>
              <a href="#">下载中心</a>
            </li>
            <li>
              <a href="#">关 于</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</template>

<script>
$(function() {
  $("#dropdownMenu1").hover(
    function() {
      $("#dropDownCur").show();
    },
    function() {
      $("#dropDownCur").hide(); //鼠标离开下拉框后，就会消失
    }
  );
  $("#dropDownCur").hover(
    function() {
      $(this).show(); //鼠标进入下拉框
    },
    function() {
      $(this).hide(); //鼠标离开下拉框后，就会消失
    }
  );
});
//为了鼠标可以进入下拉框
</script>

<style scoped>
/*--会集成到html中的style中 */
#twooption {
  margin-top: 1em;
}

.footer {
  padding-top: 40px;
  padding-bottom: 40px;
  margin-top: 40px;
  border-top: 1px solid #eee;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  background-color: transparent;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Customize the nav-justified links to be fill the entire space of the .navbar */

.nav-justified {
  /**/
  background-color: #eee;
  border: 1px solid #ccc;
  border-radius: 5px;
}
.nav-justified > li > a {
  /*设置每个li 的 子a标签*/
  padding-top: 15px;
  padding-bottom: 15px;
  margin-bottom: 0;
  font-weight: bold;
  color: rgb(70, 172, 175);
  text-align: center;
  background-color: #e5e5e5; /* Old browsers */
  background-image: -webkit-gradient(
    linear,
    left top,
    left bottom,
    from(#f5f5f5),
    to(#e5e5e5)
  );
  background-image: -webkit-linear-gradient(top, #f5f5f5 0%, #e5e5e5 100%);
  background-image: -o-linear-gradient(top, #f5f5f5 0%, #e5e5e5 100%);
  background-image: linear-gradient(to bottom, #f5f5f5 0%, #e5e5e5 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f5f5f5', endColorstr='#e5e5e5',GradientType=0 ); /* IE6-9 */
  background-repeat: repeat-x; /* Repeat the gradient */
  border-bottom: 1px solid #d5d5d5;
}
.nav-justified > .active > a,
.nav-justified > .active > a:hover,
.nav-justified > .active > a:focus {
  background-color: #ddd;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 7px rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 3px 7px rgba(0, 0, 0, 0.15);
}
.nav-justified > li:first-child > a {
  border-radius: 5px 5px 0 0;
}
.nav-justified > li:last-child > a {
  border-bottom: 0;
  border-radius: 0 0 5px 5px;
}

@media (min-width: 768px) {
  .nav-justified {
    max-height: 52px;
  }
  .nav-justified > li > a {
    border-right: 1px solid #d5d5d5;
    border-left: 1px solid #fff;
  }
  .nav-justified > li:first-child > a {
    border-left: 0;
    border-radius: 5px 0 0 5px;
  }
  .nav-justified > li:last-child > a {
    border-right: 0;
    border-radius: 0 5px 5px 0;
  }
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .masthead,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
}
</style>