<template>
  <card>
    <template #header>
      <div class="row justify-content-between">
        <div class="col-auto">
        </div>
        <div class="col-auto">
          <base-button
            :type="isEdit ? 'danger' : 'primary'"
            @click="isEdit = !isEdit"
            native-type="button"
            >{{ isEdit ? "Cancel Edit" : "Edit Information" }}</base-button
          >
        </div>
      </div>
    </template>
    <form @submit.prevent="submit">
      <div class="row mb-5" 
        v-if="!isEdit">
        <div class="col-auto">
          <img
            style="min-height: 140px !important; min-width: 140px !important; max-height: 140px !important; max-width: 140px !important"
            :src="item.profile_photo_url"
            class="rounded-circle"
          />
        </div>
      </div>
      <base-input
        label="Change Profile Picture"
        name="profile_picture"
        v-if="isEdit"
      >
        <ImageUpload
          :model-value="item.profile_photo"
          @update:model-value="setProfilePhoto($event)"
          v-model:url="item.profile_photo_url"
        />
      </base-input>
      <div class="row">
        <div class="col-md">
          <base-input
            label="First Name"
            name="first_name"
            placeholder="Enter your first name"
            :model-value="item.first_name"
            :error="formErrors.first_name"
            :disabled="!isEdit"
            input-classes="bg-white"
            @update:model-value="setFirstName($event)"
          >
          </base-input>
        </div>
        <div class="col-md">
          <base-input
            label="Last Name"
            name="last_name"
            placeholder="Enter your last name"
            :model-value="item.last_name"
            :error="formErrors.last_name"
            :disabled="!isEdit"
            input-classes="bg-white"
            @update:model-value="setLastName($event)"
          >
          </base-input>
        </div>
      </div>
      <div class="row">
        <div class="col-md">
          <base-input
            label="Email"
            name="email"
            type="email"
            placeholder="admin@example.com"
            :model-value="item.email"
            :error="formErrors.email"
            :disabled="!isEdit"
            input-classes="bg-white"
            @update:model-value="setEmail($event)"
          >
          </base-input>
        </div>
        <div class="col-md">
            <base-input
              label="Mobile Number"
              name="mobile_number"
              placeholder="Enter your mobile number"
              :model-value="item.mobile_number"
              @update:model-value="setMobileNumber($event)"
              :error="formErrors.mobile_number"
              :disabled="!isEdit"
              input-classes="bg-white"
            >
            </base-input>
        </div>
      </div>
      <div class="row">
        <div class="col-md">
            <base-input
              v-if="$role('Coach')"
              label="Zoom Key"
              :model-value="item.zoom_key"
              @update:model-value="setZoomKey($event)"
              :error="formErrors.zoom_key"
              name="zoom_key"
              :disabled="!isEdit"
              input-classes="bg-white"
            >
            </base-input>
        </div>
        <div class="col-md">
            <base-input
              v-if="$role('Coach')"
              label="Zoom Secret"
              v-model="item.zoom_secret"
              
              :model-value="item.zoom_secret"
              @update:model-value="setZoomSecret($event)"
              :error="formErrors.zoom_secret"
              name="zoom_secret"
              :disabled="!isEdit"
              input-classes="bg-white"
            >
            </base-input>
        </div>
      </div>
      <base-button
        v-if="isEdit"
        type="success"
        native-type="submit"
        class="my-4"
        >Save Changes</base-button
      >
    </form>
  </card>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import { ElSelect, ElOption } from "element-plus";
import ImageUpload from "@/Components/ImageUpload";

export default {
  components: {
    [ElSelect.name]: ElSelect,
    [ElOption.name]: ElOption,
    ImageUpload,
  },
  data: function () {
    return {
      isEdit: false,
    };
  },
  props: ["userData"],
  mounted: function () {
    this.setItem(this.userData);
  },
  computed: {
    ...mapGetters("CoachProfileSingle", ["item", "roles", "formErrors"]),
  },
  unmounted: function () {
    this.resetState();
  },
  methods: {
    ...mapActions("CoachProfileSingle", [
      "setFirstName",
      "setLastName",
      "setMobileNumber",
      "setZoomKey",
      "setZoomSecret",
      "setEmail",
      "setPassword",
      "setProfilePhoto",
      "updateData",
      "resetState",
      "setItem",
    ]),
    async submit() {
      await this.updateData()
        .then((data) => {
          // this.resetState()
          this.isEdit = false;
        })
        .catch((error) => {});
    },
  },
};
</script>
