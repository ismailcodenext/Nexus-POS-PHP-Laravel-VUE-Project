<!-- <script setup>
import { VueElement } from 'vue';
import AppNavbar from '../admin/components/AppNavbar.vue';
import SidebarLeft from '../admin/components/SidebarLeft.vue';
import SidebarRight from '../admin/components/SidebarRight.vue';
import { RouterView } from 'vue-router';

</script>

<template>
    <div id="app">
        <AppNavbar />
        <SidebarLeft/>
        <div class="main-content">
            <router-view></router-view>
        </div>
        <SidebarRight />
</div>
</template> -->

<template>
    <!------------------------------------ Navbar Start ------------------------------------>
<nav-bar></nav-bar>
   <!---------------------------------------------- navbar end  ---------------------------------------------->


<sidebar-left></sidebar-left>


 <!-- Right Sidebar setting Start -->
<sidebar-right></sidebar-right>
    <!-- Right Sidebar setting End  -->


    <router-view></router-view>

    <!-- Right Sidebar bar overlay-->
    <!-- Navbar End -->

 </template>
<!--
<script>
import NavBar from '../admin/components/NavBar.vue';
import SidebarLeft from '../admin/components/SidebarLeft.vue';
import SidebarRight from '../admin/components/SidebarRight.vue';
export default {
components:{NavBar,SidebarLeft,SidebarRight},
data(){
    return{
        auth:false
    }
}
}
</script> -->


<script>
import axios from 'axios';
import NavBar from '../admin/components/NavBar.vue';
import SidebarLeft from '../admin/components/SidebarLeft.vue';
import SidebarRight from '../admin/components/SidebarRight.vue';

export default {
  components: {
    NavBar,
    SidebarLeft,
    SidebarRight
  },

};
</script>
