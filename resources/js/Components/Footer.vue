<script lang="ts" setup>
import { Icon } from '@iconify/vue';
import { route } from 'ziggy-js';
import DarkModeToggle from '@/Components/DarkModeToggle.vue';

const navigation = {
    main: [
        { name: 'Jobs', route: 'home' },
        { name: 'Breweries', route: 'home' },
        { name: 'Contact', route: 'home' },
    ],
    social: [
        {
            name: 'Facebook',
            href: '#',
            icon: 'pajamas:twitter',
        },
    ],
};
</script>

<template>
    <footer
        class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8"
    >
        <nav aria-label="Footer" class="-mb-6 flex justify-center space-x-12">
            <div v-for="item in navigation.main" :key="item.name" class="pb-6">
                <a
                    :href="route(item.route)"
                    class="text-sm font-bold leading-6 hover:underline"
                    >{{ item.name }}</a
                >
            </div>
        </nav>
        <div class="mt-10 flex justify-center space-x-10">
            <a
                v-for="item in navigation.social"
                :key="item.name"
                :href="item.href"
                class="transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110"
            >
                <span class="sr-only">{{ item.name }}</span>
                <Icon :icon="item.icon" aria-hidden="true" class="h-6 w-6" />
            </a>
            <DarkModeToggle />
        </div>
        <p class="mt-10 text-center text-xs leading-5">
            &copy; 2024 Hopjobs. Connecting people, beer, and jobs.
        </p>
    </footer>
</template>
