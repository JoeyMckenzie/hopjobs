<script lang="ts" setup>
import { Link } from '@inertiajs/vue3';
import { route } from 'ziggy-js';
import { Icon } from '@iconify/vue';
</script>

<template>
    <div
        class="flex min-h-screen flex-col items-center bg-gray-100 pt-6 justify-center sm:pt-0"
    >
        <div>
            <Link :href="route('home')">
                <div
                    class="flex flex-row items-center justify-center space-x-1"
                >
                    <span class="sr-only">Hopjobs</span>
                    <Icon class="h-12 w-12 text-green-600" icon="mdi:hops" />
                    <h1 class="text-4xl font-bold">hopjobs</h1>
                </div>
                <p class="mx-auto max-w-xl text-sm leading-8">
                    Connecting people, beer, and jobs.
                </p>
            </Link>
        </div>

        <div
            class="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
