<template>
  <div>
    <!--4_2-->
         <table class="table table-hover">
      <tbody>
        <tr>
          <td>时间</td>
          <td>
            <input type="month" id="4_1_1_1" name="4_1_1_1">
            <span class="glyphicon glyphicon-arrow-right"></span>
            <input type="month" id="4_1_1_2" name="4_1_1_2">
          </td>
        </tr>
        <tr>
          <td>项目名称</td>
          <td>
            <input type="text" id="4_1_2_1" name="4_1_2_1">
          </td>
        </tr>
        <tr>
          <td>项目描述</td>
          <td>
            <textarea
              class="input-xlarge"
              id="4_1_3_1"
              name="4_1_3_1"
              placeholder="(1000字以内)：描述项目的具体内容及在项目中的主要工作内容等"
              style="width:90%;"
              rows="7"
              maxlength="1000"
            ></textarea>
          </td>
        </tr>
      </tbody>
    </table>

  </div>
</template>