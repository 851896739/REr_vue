<template>
  <div>
    <threead></threead>
    <fourlogin></fourlogin>
    <fivenotice></fivenotice>
    <sixnews></sixnews>
  </div>
</template>
<script>
import threead from "./components/threead"
import fourlogin from "./components/fourlogin"
import fivenotice from "./components/fivenotice"
import sixnews from "./components/sixnews"
export default {
  data() {
    return {
    };
  },
  components:{
    threead,
    fourlogin,
    fivenotice,
    sixnews
  }
};
</script>