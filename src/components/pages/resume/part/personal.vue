<template>
  <!--个人信息-->
  <div>
    <!-- 部分_行_列 -->
    <!-- 基本信息 -->
    <table class="table table-hover">
      <caption class="alert alert-info">
        <span class="glyphicon glyphicon-user"></span> 基本信息
      </caption>
      <tbody>
        <tr>
          <td>简历名称</td>
          <td><input type="text" id="resume_name" name="resume_name"><small>（/用于向HR展示）</small></td>
        </tr>
        <tr>
          <td>姓名</td>
          <td>
            <input type="text" id="1_1_1" name="1_1_1">
          </td>
          <td>性别</td>
          <td>
            <div>
              <div class="radio-inline">
                <input type="radio" @click="sex_select(this)" name="1_1_2" id="man" value="男">
                <label>男</label>
              </div>
              <div class="radio-inline">
                <input type="radio" name="1_1_2" id="woman" value="女" checked>
                <label>女</label>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>出生日期</td>
          <td>
            <input type="date" id="1_2_1" name="1_2_1">
          </td>
          <td>开始工作年份</td>
          <td>
            <input type="month" id="1_2_2" name="1_2_2">
          </td>
        </tr>
        <tr>
          <td>手机</td>
          <td>
            <input type="tel" id="1_3_1" name="1_3_1">
          </td>
          <td>邮箱</td>
          <td>
            <input type="email" id="1_3_2" name="1_3_2">
          </td>
        </tr>
        <tr>
          <td>籍贯</td>
          <td>
            <input type="text" id="1_4_1" name="1_4_1">
          </td>
          <td>现居住地</td>
          <td>
            <input type="text" id="1_4_2" name="1_4_2">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      
    }
  }, methods: {
    
  },
}
</script>
