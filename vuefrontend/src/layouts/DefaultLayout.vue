<template>
  <div id="default-layout">
    <navbar :user="user"/>
    <router-view/>
  </div>
</template>

<script>
  import authService from "../services/auth.service";
  import Navbar from "./Navbar";
  export default {
    name: "DefaultLayout",
    components: {Navbar},
    data(){
      return {
        user: {}
      }
    },
    async mounted() {
      this.user = await authService.getUser()
    }
  }
</script>

<style lang="scss" scoped>
  #default-layout{
    padding-top: 50px;
  }
</style>