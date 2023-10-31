<script lang="ts" setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import PageFooter from '@/Components/PageFooter.vue';
</script>

<template>
    <div
        class="flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0"
    >
        <div>
            <Link :href="route('home')">
                <ApplicationLogo
                    class="fill-current text-gray-500 hover:text-gray-600"
                />
            </Link>
        </div>
        <div
            class="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
    <PageFooter />
</template>
