<script lang="ts" setup>
import NavbarHeader from '@/Components/NavbarHeader.vue';
import Footer from '@/Components/Footer.vue';
</script>

<template>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <NavbarHeader />
        <slot />
        <Footer />
    </div>
</template>
