<script lang="ts" setup>
import { Head } from '@inertiajs/vue3';
import NavbarMenu from '@/Components/NavbarMenu.vue';
import LandingPageHero from '@/Components/LandingPageHero.vue';
import RecentListing from '@/Components/RecentListing.vue';
import PageFooter from '@/Components/PageFooter.vue';

export type Listing = {
    id: number;
    title: string;
};

defineProps<{
    listings: Listing[];
}>();
</script>

<template>
    <Head title="Find you craft brewery job" />
    <NavbarMenu />
    <LandingPageHero />
    <RecentListing :listings="listings" />
    <PageFooter />
</template>
