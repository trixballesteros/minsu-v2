<template>
  <AdministratorLayout has-background>
    <div class="container-fluid mt-2">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-4 mb-2 mb-lg-0">
          <div class="list-group">
            <inertia-link :href="route('profile.show')" class="list-group-item list-group-item-action" :class="route().current('profile.show') ? 'active' : ''">
              <i class="fas fa-user mr-1"></i>
              My Info
            </inertia-link>
            <inertia-link :href="route('profile.change_password')" class="list-group-item list-group-item-action" :class="route().current('profile.change_password') ? 'active' : ''">
              <i class="fas fa-lock  mr-1"></i>
              Change Password</inertia-link
            >
          </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-8">
            <slot />
        </div>
      </div>
    </div>
  </AdministratorLayout>
</template>

<script>
import AdministratorLayout from "@/Layouts/AdministratorLayout";
export default {
  components: {
    AdministratorLayout,
  },
  computed: {
    user: function () {
      return this.$page.props.user;
    },
  },
};
</script>

<style>
</style>