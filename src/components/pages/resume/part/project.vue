<template>
  <div id="resume_project">
    <!--4-->
    <table class="table table-hover">
      <caption class="alert alert-info">
        <span class="glyphicon glyphicon-th-list"></span> 项目经验
        <span id="addProject" class="glyphicon glyphicon-plus-sign">
          <small>/添加</small>
        </span>
      </caption>
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
    <!--<projectSon id="projectSon_2"></projectSon>-->
  </div>
</template>

<script>
import projectSon from "./project/projectSon";
export default {
  data() {
    return {
        count:1, // 项目个数
    
    };
  },
  methods: {
      // 点击添加 项目经验
      addProject(){
          var Obj = document.createElement("div");
          Obj.innerHTML='<projectSon></projectSon>'
          document.getElementById("resume_project").appendChild(Obj)
      }
  },
  components: {
    projectSon
  }
};
</script>