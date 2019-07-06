<template>
  <div id="threead">
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-12 column">
          <div class="carousel slide" id="advertisement">
            <ol class="carousel-indicators">
              <li data-slide-to="0" data-target="#advertisement" class="active"></li>
              <li data-slide-to="1" data-target="#advertisement"></li>
              <li data-slide-to="2" data-target="#advertisement"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item active">
                <!--开始播放页面-->
                <img alt src="../../../../../static/images/ad_1.jpg">
                <div class="carousel-caption">
                  <!--文字标题-->
                  <h4>First Thumbnail label</h4>
                  <p>
                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at
                    eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                  </p>
                </div>
              </div>
              <div class="item">
                <img alt src="../../../../../static/images/ad_2.jpg">
                <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>
                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at
                    eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                  </p>
                </div>
              </div>
              <div class="item">
                <img alt src="../../../../../static/images/ad_3.jpg">
                <div class="carousel-caption">
                  <h4>Third Thumbnail label</h4>
                  <p>
                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at
                    eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                  </p>
                </div>
              </div>
            </div>
            <!--左划标签的链接-->
            <a class="left carousel-control" href="#advertisement" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <!--右划标签的链接-->
            <a class="right carousel-control" href="#advertisement" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  data() {
    return {};
  },
  mounted() {
    $(function() {
      $("#advertisement").carousel({
        interval: 3000
      });
    });
  }
};
</script>

<style scoped>
#threead {
  margin-top: 1em;
}
</style>