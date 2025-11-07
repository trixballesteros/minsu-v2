<template>
    <PageLayout
      :colleges="colleges"
      :announcements="announcements"
      :events="events"
      :news_featured="news_featured"
      :news="news"
    />
</template>

<script>
import PageLayout from '@/Layouts/PageLayout'
export default {
    components: {
        PageLayout
    },
    props: {
        colleges: Array,
        announcements: Array,
        events: Array,
        news_featured: Object,
        news: Array
    }
}
</script>

<style>

</style>
