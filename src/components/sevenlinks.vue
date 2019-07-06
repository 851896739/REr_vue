<template>
  <div id="seven_links">
    <div class="container">
      <div class="masthead">
        <nav class="navbar navbar-default">
          <div class="containe">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1"
                aria-expanded="false"
              >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="">友情链接</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="">
                  <a href="http://www.welefen.com/lab/mbti/">
                    MBTI职业测试
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li>
                  <a href="http://www.apesk.com/ninehouse/">九型人格测试</a>
                </li>
                <li class="dropup">
                  <a
                    href="#"
                    class="dropdown-toggle"
                    data-toggle="dropup"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    id="seven_links_one"
                  >
                    兄弟院校
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" id="seven_links_one_cur">
                    <li>
                      <a href="https://www.whu.edu.cn/">武汉大学</a>
                    </li>
                    <li>
                      <a href="http://www.ccnu.edu.cn/">华中师范大学</a>
                    </li>
                    <li>
                      <a href="http://www.hust.edu.cn/">华中科技大学</a>
                    </li>
                    <li>
                      <a href="http://www.cug.edu.cn/">中国地质大学</a>
                    </li>
                    <li>
                      <a href="http://www.whut.edu.cn/">武汉理工大学</a>
                    </li>
                    <li>
                      <a href="http://www.zuel.edu.cn/">中南财经政法大学</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                      <a href="#">One more separated link</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="http://www.hzau.edu.cn/">华中农业大学</a>
                </li>
                <li class="dropup">
                  <a
                    href="#"
                    class="dropdown-toggle"
                    data-toggle="dropup"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    id="seven_links_two"
                  >
                    人才网站
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" id="seven_links_two_cur">
                    <li>
                      <a href="http://www.mohrss.gov.cn/SYrlzyhshbzb/rdzt/gjzzrcfw/">国际组织人才信息网</a>
                    </li>
                    <li>
                      <a href="https://www.ncss.org.cn/">新职业</a>
                    </li>
                    <li>
                      <a href="http://www.hb.hrss.gov.cn/html/index.html">湖北省人力资源保障厅</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                      <a href="https://www.nowcoder.com/">牛客网</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
        </nav>
      </div>
    </div>
  </div>
</template>

<script>
$(function() {
  $("#seven_links_one").hover(
    function() {
      $("#seven_links_one_cur").show();
    },
    function() {
      $("#seven_links_one_cur").hide(); //鼠标离开下拉框后，就会消失
    }
  );
  $("#seven_links_one_cur").hover(
    function() {
      $(this).show(); //鼠标进入下拉框
    },
    function() {
      $(this).hide(); //鼠标离开下拉框后，就会消失
    }
  );
    $("#seven_links_two").hover(
    function() {
      $("#seven_links_two_cur").show();
    },
    function() {
      $("#seven_links_two_cur").hide(); //鼠标离开下拉框后，就会消失
    }
  );
  $("#seven_links_two_cur").hover(
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
    #seven_links {
        margin-top: 1em;
    }
</style>
