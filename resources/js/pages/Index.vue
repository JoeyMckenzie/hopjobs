<script lang="ts" setup>
import { Head } from '@inertiajs/vue3';
import DefaultLayout from '@/layouts/DefaultLayout.vue';
import LandingPageHero from '@/components/LandingPageHero.vue';
import JobPreviews from '@/components/JobPreviews.vue';
import { JobListing } from '@/types';
import JobNotificationSignUp from '@/components/JobNotificationSignUp.vue';

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
