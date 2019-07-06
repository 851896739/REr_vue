<template>
  <div id="app">
    <header>
      <oneheader></oneheader>
      <twooption></twooption>
      
      <!-- router-link 定义点击后导航到哪个路径下 -->
      <!-- <router-link to="/home">Home</router-link> -->
      <!-- <router-link to="/about">About</router-link> -->
    </header>
    <!-- 对应的组件内容渲染到router-view中 -->
    <router-view/>
    <footer>
      <sevenlinks></sevenlinks>
      <eightinfo></eightinfo>
    </footer>
  </div>
</template>

<script>
import oneheader from "./components/oneheader";
import twooption from "./components/twooption";
import sevenlinks from "./components/sevenlinks";
import eightinfo from "./components/eightinfo";

export default {
  name: "App",
  components: {
    oneheader,
    twooption,
    sevenlinks,
    eightinfo
  }
};
</script>

<style>
body {
  padding-top: 1em;
}
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 10px;
}
</style>
