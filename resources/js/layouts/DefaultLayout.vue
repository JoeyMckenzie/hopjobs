<script lang="ts" setup>
import NavbarHeader from '@/components/NavbarHeader.vue';
import Footer from '@/components/Footer.vue';
import { Toaster } from '@/components/ui/sonner';
</script>

<template>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <NavbarHeader />
        <Toaster />
        <slot />
        <Footer />
    </div>
</template>
