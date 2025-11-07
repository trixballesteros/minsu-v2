<template>
  <app-layout>
    <div class="container-fluid">
      <div class="content">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 d-inline-block mb-0">VIEW USER</h6>
            <nav
              aria-label="breadcrumb"
              class="d-none d-md-inline-block ml-md-4"
            ></nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <base-button
              tag="inertia-link"
              type="neutral"
              :href="route('admin.users.accounts.edit', userData.id)"
              aria-pressed="true"
            >
              <i class="fas fa-pencil-alt"></i>
              Edit
            </base-button>
            <base-button
              tag="inertia-link"
              type="neutral"
              :href="route('admin.users.accounts.index')"
              aria-pressed="true"
            >
              <i class="ni ni-bold-left"></i>
              BACK
            </base-button>
          </div>
        </div>
      </div>
      <card>
        <base-input label="Profile Picture" name="profile_picture">
          <ImageUpload disabled v-model:url="userData.profile_photo_url" />
        </base-input>
        <base-input
          v-model="userData.first_name"
          label="First Name"
          readonly
          name="first_name"
          input-classes="bg-white"
        >
        </base-input>
        <base-input
          v-model="userData.last_name"
          label="Last Name"
          readonly
          name="last_name"
          input-classes="bg-white"
        >
        </base-input>
        <base-input
          v-model="userData.mobile_number"
          label="Mobile Number"
          readonly
          name="mobile_number"
          input-classes="bg-white"
        >
        </base-input>
        <base-input
          v-if="userData.role_name == 'Coach'"
          v-model="userData.zoom_key"
          label="Zoom Key"
          readonly
          name="zoom_key"
          input-classes="bg-white"
        >
        </base-input>
        <base-input
          v-model="userData.email"
          label="Email"
          readonly
          name="email"
          input-classes="bg-white"
        >
        </base-input>

        <base-input
          v-if="userData.role_name == 'Coach'"
          label="Location"
          readonly
          name="location"
          input-classes="bg-white"
        >
          <badge
            rounded
            v-if="userData.location_user.length <= 0"
            type="warning"
            >No coach location</badge
          >
          <badge
            rounded
            v-for="location in userData.location_user"
            :key="location.id"
            class="mr-1"
            type="default"
            >{{ location.location }}, {{ location.state }}</badge
          >
        </base-input>
        
        <base-input
          v-if="userData.coach_category"
          v-model="userData.coach_category.name"
          label="Coach Category"
          readonly
          name="coach_category"
          input-classes="bg-white"
        >
        </base-input>


        <base-input
          v-if="userData.role_name == 'Coach'"
          v-model="userData.role_name"
          label="Role"
          readonly
          name="role_name"
          input-classes="bg-white"
        >
        </base-input>
      </card>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AdministratorLayout";

import ImageUpload from "@/Components/ImageUpload";
export default {
  components: {
    AppLayout,
    ImageUpload,
  },
  props: ["userData"],
};
</script>
