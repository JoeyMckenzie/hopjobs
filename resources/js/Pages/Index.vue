<script lang="ts" setup>
import { Head } from '@inertiajs/vue3';
import DefaultLayout from '@/Layouts/DefaultLayout.vue';
import LandingPageHero from '@/Components/LandingPageHero.vue';
import JobPreviews from '@/Components/JobPreviews.vue';
import { JobListing } from '@/types';
import JobNotificationSignUp from '@/Components/JobNotificationSignUp.vue';

defineProps<{
    listings: JobListing[];
}>();
</script>

<template>
    <DefaultLayout>
        <Head title="Connecting people and beer" />
        <LandingPageHero />
        <JobNotificationSignUp />
        <JobPreviews :listings="listings" />
    </DefaultLayout>
</template>
