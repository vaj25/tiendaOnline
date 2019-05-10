<template>
  <div id="main">
    <header v-if="$route.name!='login' && $route.name!='register'" class="page-header">
      <navigationMenu></navigationMenu>
    </header>
    <div id="content">
        <router-view></router-view>
    </div>
  </div>
</template>
<script>
  import navigationMenu from './Menu.vue'
  export default {
    data() {
      return {
        //
      }
    },
    components: {
      navigationMenu
    }
  }

</script>
