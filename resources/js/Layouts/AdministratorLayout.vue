<template>
  <div class="wrapper">
    <!-- <notifications></notifications> -->
    <side-bar :logo="null">
      <template v-slot:links>
        <sidebar-item
          :link="{
            icon: 'ni ni-chart-bar-32 text-primary',
            name: 'Dashboard',
            path: route('admin.dashboard'),
          }"
        ></sidebar-item>
        <sidebar-item
          :link="{
            icon: 'ni ni-books text-primary',
            name: 'College',
            path: route('admin.college.index'),
          }"
          v-if="$can('access college')"
        ></sidebar-item>
          <sidebar-item
              :link="{
            icon: 'ni ni-collection text-primary',
            name: 'Program',
            path: route('admin.program.index'),
          }"
              v-if="$can('access program')"
          ></sidebar-item>
          <sidebar-item
              :link="{
            icon: 'ni ni-calendar-grid-58 text-primary',
            name: 'Event',
            path: route('admin.event.index'),
          }"
              v-if="$can('access event')"
          ></sidebar-item>
          <sidebar-item
              :link="{
            icon: 'ni ni-map-big text-primary',
            name: 'News',
            path: route('admin.news.index'),
          }"
              v-if="$can('access news')"
          ></sidebar-item>
          <sidebar-item
              :link="{
            icon: 'ni ni-money-coins text-primary',
            name: 'Transparency',
            path: route('admin.transparency.index'),
          }"
              v-if="$can('access transparency')"
          ></sidebar-item>
          <sidebar-item
              :link="{
            icon: 'ni ni-money-coins text-primary',
            name: 'Downloadables',
            path: route('admin.downloadables.index'),
          }"
              v-if="$can('access transparency')"
          ></sidebar-item>
          <sidebar-item
              :link="{
            icon: 'ni ni-ungroup text-primary',
            name: 'Philgeps',
            path: route('admin.philgeps.index'),
          }"
              v-if="$can('access philgeps')"
          ></sidebar-item>
      </template>
      <template v-slot:links-after> </template>
    </side-bar>
    <div class="main-content">
      <dashboard-navbar></dashboard-navbar>
      <div @click="$sidebar.displaySidebar(false)">
        <div class="content">
          <slot></slot>
        </div>
      </div>
      <!-- <content-footer></content-footer> -->
    </div>
  </div>
</template>
<script>
/* eslint-disable no-new */
import PerfectScrollbar from "perfect-scrollbar";
import "perfect-scrollbar/css/perfect-scrollbar.css";

function hasElement(className) {
  return document.getElementsByClassName(className).length > 0;
}

function initScrollbar(className) {
  if (hasElement(className)) {
    new PerfectScrollbar(`.${className}`);
  } else {
    // try to init it later in case this component is loaded async
    setTimeout(() => {
      initScrollbar(className);
    }, 100);
  }
}

import DashboardNavbar from "./DashboardNavbar.vue";
import ContentFooter from "./ContentFooter.vue";

export default {
  components: {
    DashboardNavbar,
    ContentFooter,
  },
  methods: {
    initScrollbar() {
      let isWindows = navigator.platform.startsWith("Win");
      if (isWindows) {
        initScrollbar("sidenav");
      }
    },
  },
  mounted() {
    this.initScrollbar();
  },
};
</script>
<style lang="scss"></style>
