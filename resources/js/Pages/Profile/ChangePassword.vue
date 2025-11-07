<template>
  <ProfileLayout>
    <card>
      <template #header>
        <h3 class="text-muted">CHANGE PASSWORD</h3>
      </template>
      <form @submit.prevent="updatePassword">
        <base-input
          label="Current Password"
          name="current_password"
          type="password"
          placeholder="Enter account current password"
          v-model="form.current_password"
          ref="current_password"
          :error="form.errors.current_password"
        >
        </base-input>
        <base-input
          label="Password"
          name="password"
          type="password"
          placeholder="Enter new account password"
          v-model="form.password"
          ref="password"
          :error="form.errors.password"
        >
        </base-input>
        <base-input
          label="Confirm Password"
          name="password_confirmation"
          type="password"
          placeholder="Repeat new account password"
          :error="form.errors.password_confirmation"
          v-model="form.password_confirmation"
        >
        </base-input>
        <base-button type="primary" native-type="submit" class="my-4"
          >SAVE CHANGES</base-button
        >
      </form>
    </card>
  </ProfileLayout>
</template>

<script>
import { runToast } from "@/Utils/notification";
import ProfileLayout from "./Layout";
export default {
  components: {
    ProfileLayout,
  },
  data() {
    return {
      form: this.$inertia.form({
        current_password: "",
        password: "",
        password_confirmation: "",
      }),
    };
  },

  methods: {
    runToast,
    updatePassword() {
      this.form.put(route("user-password.update"), {
        errorBag: "updatePassword",
        preserveScroll: true,
        onSuccess: () => {
          this.runToast("top-right", "success", "Error");
          this.form.reset();
        },
        onError: () => {
          if (this.form.errors.password) {
            this.form.reset("password", "password_confirmation");
            this.runToast("top-right", "danger", this.form.errors.password);
          }

          if (this.form.errors.current_password) {
            this.runToast(
              "top-right",
              "danger",
              this.form.errors.current_password
            );
            this.form.reset("current_password");
          }
        },
      });
    },
  },
};
</script>

<style>
</style>