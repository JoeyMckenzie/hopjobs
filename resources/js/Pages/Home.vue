<script lang="ts" setup>
import { Head } from '@inertiajs/vue3';
import NavbarMenu from '@/Components/NavbarMenu.vue';
import LandingPageHero from '@/Components/LandingPageHero.vue';
</script>

<template>
    <Head title="Find you craft brewery job" />

    <NavbarMenu />

    <div class="bg-white">
        <LandingPageHero />
    </div>
</template>
