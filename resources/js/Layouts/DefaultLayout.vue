<script lang="ts" setup>
import NavbarHeader from '@/Components/NavbarHeader.vue';
import Footer from '@/Components/Footer.vue';
import { Toaster } from '@/Components/ui/sonner';
</script>

<template>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <NavbarHeader />
        <Toaster />
        <slot />
        <Footer />
    </div>
</template>
