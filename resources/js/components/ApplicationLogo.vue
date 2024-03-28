<script lang="ts" setup>
import { Icon } from '@iconify/vue';
import { route } from 'ziggy-js';
</script>

<template>
    <a
        :href="route('home')"
        class="flex flex-row items-center justify-center space-x-1"
    >
        <span class="sr-only">Hopjobs</span>
        <Icon class="h-10 w-10 text-green-600" icon="mdi:hops" />
        <h1 class="text-2xl font-bold">hopjobs</h1>
    </a>
</template>
