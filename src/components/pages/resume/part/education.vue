<template>
  <!-- 学历信息 2- -->
  <div>
    <table class="table table-hover">
      <caption class="alert alert-info">
        <span class="glyphicon glyphicon-education"></span> 教育经历
      </caption>
      <tbody>
        <tr>
          <td>时间</td>
          <td>
            <input type="month" id="2_1_1" name="2_1_1">
            <span class="glyphicon glyphicon-arrow-right"></span>
            <input type="month" id="2_1_2" name="2_1_2">
          </td>
        </tr>
        <tr>
          <td>学校</td>
          <td>
            <input type="text" id="2_2_1" name="2_2_1">
          </td>
        </tr>
        <tr>
          <td>学历/学位</td>
          <td>
            <select class="form-control selectpicker show-menu-arrow" id="2_3_1" name="2_3_1">
              <option value="本科">本科</option>
              <option value="大专">大专</option>
              <option value="硕士">硕士</option>
              <option value="博士">博士</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>专业</td>
          <td>
            <input type="text" id="2_4_1" name="2_4_1" placeholder="请输入专业名称">
          </td>
        </tr>
        <tr>
          <td>专业描述</td>
          <td>
            <textarea
              class="input-xlarge"
              id="2_5_1"
              name="2_5_1"
              placeholder="(100字以内)：描述在校期间所学的专业，主要包括课程内容、毕业设计等"
              style="width:50%;"
              rows="5"
              maxlength="100"
            ></textarea>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
