<template>
  <div id="oneheader">
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-12 column">
          <div class="col-xs-12 col-sm-12 column">
            <img
              src="../../static/images/one_header/rer_logo.png"
              alt="logo"
              title="锐耳人力资源"
              class="img-responsive img-rounded center-block"
            >
            <!-- <article style="text-indent:2em;">{{aboutMsg}}</article> -->
          </div>

          <p></p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "oneheader",
  data() {
    return {
      aboutMsg:
        "校园大使、入坑萌新、职场老鸟、企业HR，你想到的全都有！这是你从没体验过的全新模式！"
    };
  }
};
</script>

<style scoped>
#one_header {
  margin-bottom: 1em;
}
</style>
