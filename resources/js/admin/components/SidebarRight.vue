<template>
    <!-- Right Sidebar setting Start -->
    <div class="right-bar">
      <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center bg-dark p-3">
          <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

          <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
            <i class="mdi mdi-close noti-icon"></i>
          </a>
        </div>
        <!-- Settings -->
        <hr class="m-0" />

        <div class="p-4">
          <h6 class="mt-4 mb-3">Layout Mode</h6>

          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="layout-mode"
              id="layout-mode-light"
              value="light"
            />
            <label class="form-check-label" for="layout-mode-light"
              >Light</label
            >
          </div>

          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="layout-mode"
              id="layout-mode-dark"
              value="dark"
            />
            <label class="form-check-label" for="layout-mode-dark">Dark</label>
          </div>

          <h6 class="mt-4 mb-3">Topbar Type</h6>

          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="topbar-color"
              id="topbar-color-light"
              value="light"
              onchange="document.body.setAttribute('data-topbar', 'light')"
            />
            <label class="form-check-label" for="topbar-color-light"
              >Light</label
            >
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="topbar-color"
              id="topbar-color-dark"
              value="dark"
              onchange="document.body.setAttribute('data-topbar', 'dark')"
            />
            <label class="form-check-label" for="topbar-color-dark">Dark</label>
          </div>



          <!-- <div id="sidebar-setting">
            <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

            <div class="form-check sidebar-setting mt-2">
              <input
                class="form-check-input"
                type="radio"
                name="sidebar-size"
                id="sidebar-size-default"
                value="default"
                onchange="document.body.setAttribute('data-sidebar-size', 'lg')"
              />
              <label class="form-check-label" for="sidebar-size-default"
                >Default</label
              >
            </div>
            <div class="form-check sidebar-setting mt-2">
              <input
                class="form-check-input"
                type="radio"
                name="sidebar-size"
                id="sidebar-size-compact"
                value="compact"
                onchange="document.body.setAttribute('data-sidebar-size', 'md')"
              />
              <label class="form-check-label" for="sidebar-size-compact"
                >Compact</label
              >
            </div>
            <div class="form-check sidebar-setting mt-2">
              <input
                class="form-check-input"
                type="radio"
                name="sidebar-size"
                id="sidebar-size-small"
                value="small"
                onchange="document.body.setAttribute('data-sidebar-size', 'sm')"
              />
              <label class="form-check-label" for="sidebar-size-small"
                >Small (Icon View)</label
              >
            </div>

            <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

            <div class="form-check sidebar-setting mt-2">
              <input
                class="form-check-input"
                type="radio"
                name="sidebar-color"
                id="sidebar-color-light"
                value="light"
                onchange="document.body.setAttribute('data-sidebar', 'light')"
              />
              <label class="form-check-label" for="sidebar-color-light"
                >Light</label
              >
            </div>
            <div class="form-check sidebar-setting mt-2">
              <input
                class="form-check-input"
                type="radio"
                name="sidebar-color"
                id="sidebar-color-dark"
                value="dark"
                onchange="document.body.setAttribute('data-sidebar', 'dark')"
              />
              <label class="form-check-label" for="sidebar-color-dark"
                >Dark</label
              >
            </div>
          </div> -->


          <div id="sidebar-setting">
    <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

    <div class="form-check sidebar-setting mt-2">
      <input
        class="form-check-input"
        type="radio"
        name="sidebar-size"
        id="sidebar-size-default"
        value="default"
        v-model="sidebarSize"
      />
      <label class="form-check-label" for="sidebar-size-default">
        Default
      </label>
    </div>
    <div class="form-check sidebar-setting mt-2">
      <input
        class="form-check-input"
        type="radio"
        name="sidebar-size"
        id="sidebar-size-compact"
        value="compact"
        v-model="sidebarSize"
      />
      <label class="form-check-label" for="sidebar-size-compact">
        Compact
      </label>
    </div>
    <div class="form-check sidebar-setting mt-2">
      <input
        class="form-check-input"
        type="radio"
        name="sidebar-size"
        id="sidebar-size-small"
        value="small"
        v-model="sidebarSize"
      />
      <label class="form-check-label" for="sidebar-size-small">
        Small (Icon View)
      </label>
    </div>

    <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

    <div class="form-check sidebar-setting mt-2">
      <input
        class="form-check-input"
        type="radio"
        name="sidebar-color"
        id="sidebar-color-light"
        value="light"
        v-model="sidebarColor"
      />
      <label class="form-check-label" for="sidebar-color-light">
        Light
      </label>
    </div>
    <div class="form-check sidebar-setting mt-2">
      <input
        class="form-check-input"
        type="radio"
        name="sidebar-color"
        id="sidebar-color-dark"
        value="dark"
        v-model="sidebarColor"
      />
      <label class="form-check-label" for="sidebar-color-dark">
        Dark
      </label>
    </div>
  </div>


        </div>
      </div>
    </div>
    <!-- Right Sidebar setting End  -->

    <!-- Right Sidebar bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- Navbar End -->

</template>


<script>
import axios from 'axios';
import { useRouter } from 'vue-router';

export default {
  props: {
    NexusPOSLOGO: {
      type: String,
      default: './front-end/assets/icons/nexus-pos-logo.svg',
    },
    FlagsUs: {
      type: String,
      default: './front-end/assets/img/flags/us.jpg',
    },
    FlagsSpain: {
      type: String,
      default: './front-end/assets/img/flags/spain.jpg',
    },
    FlagsGermany: {
      type: String,
      default: './front-end/assets/img/flags/germany.jpg',
    },
    FlagsItaly: {
      type: String,
      default: './front-end/assets/img/flags/italy.jpg',
    },
    FlagsRussia: {
      type: String,
      default: './front-end/assets/img/flags/russia.jpg',
    },
    ProfileLogo: {
      type: String,
      default: './front-end/assets/img/navbar-profile-logo.png',
    },
    CardEmployer: {
      type: String,
      default: './front-end/assets/icons/card-employe.svg',
    },
    CardClint: {
      type: String,
      default: './front-end/assets/icons/card-client.svg',
    },
    CardReports: {
      type: String,
      default: './front-end/assets/icons/card-reports.svg',
    },
    TableClint: {
      type: String,
      default: './front-end/assets/img/table-client-img.png',
    },
    CardProject: {
      type: String,
      default: './front-end/assets/icons/card-projects.svg',
    },
  },
};
</script>

<style>

</style>
