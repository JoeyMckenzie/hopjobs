<script lang="ts" setup>
import { Head } from '@inertiajs/vue3';
import DefaultLayout from '@/Layouts/DefaultLayout.vue';
import LandingPageHero from '@/Components/LandingPageHero.vue';
import JobNotificationSignUp from '@/Components/JobNotificationSignUp.vue';
</script>

<template>
    <DefaultLayout>
        <Head title="Connecting people and beer" />
        <LandingPageHero />
        <JobNotificationSignUp />
    </DefaultLayout>
</template>
