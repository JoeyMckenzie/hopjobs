<script setup lang="ts">
import DefaultLayout from '@/layouts/DefaultLayout.vue';

defineProps<{
    status: number;
}>();
</script>

<template>
    <DefaultLayout>
        <main
            class="grid min-h-full place-items-center px-6 py-24 sm:py-32 lg:px-8"
        >
            <div class="text-center">
                <p class="text-base font-semibold">
                    {{ status }}
                </p>
                <h1 class="mt-4 text-3xl font-bold tracking-tight sm:text-5xl">
                    You seem to be lost...
                </h1>
                <p class="mt-6 text-base leading-7">
                    Looks like you're snooping around where you probably
                    shouldn't be.
                </p>
            </div>
        </main>
    </DefaultLayout>
</template>
