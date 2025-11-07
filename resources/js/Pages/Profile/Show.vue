<template>
  <ProfileLayout>
    <FormCoachEdit :userData="$page.props.user"/>
  </ProfileLayout>
</template>

<script>
import ProfileLayout from './Layout'
import FormCoachEdit from './Form/CoachEdit'
export default {
  components: {
    ProfileLayout,
    FormCoachEdit
  }
}
</script>

<style>

</style>