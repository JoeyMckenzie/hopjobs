<script lang="ts" setup>
import { Icon } from '@iconify/vue';
import { route } from 'ziggy-js';
import DarkModeToggle from '@/components/DarkModeToggle.vue';

const navigation = {
    main: [
        { name: 'Jobs', route: 'home' },
        { name: 'Breweries', route: 'home' },
        { name: 'Contact', route: 'home' },
    ],
    social: [
        {
            name: 'Twitter',
            href: 'https://x.com/',
            icon: 'pajamas:twitter',
        },
        {
            name: 'GitHub',
            href: 'https://github.com/joeymckenzie/hopjobs',
            icon: 'pajamas:github',
        },
    ],
    poweredBy: [
        {
            name: 'Laravel',
            href: 'https://laravel.com',
            icon: 'logos:laravel',
        },
        {
            name: 'Vue.js',
            href: 'https://vuejs.org',
            icon: 'logos:vue',
        },
        {
            name: 'Digital Ocean',
            href: 'https://digitalocean.com',
            icon: 'logos:digital-ocean-icon',
        },
    ],
};
</script>

<template>
    <footer
        class="mx-auto justify-center max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8"
    >
        <nav
            aria-label="Footer"
            class="-mb-6 flex align-middle justify-center space-x-12"
        >
            <div
                v-for="item in navigation.main"
                :key="item.name"
                class="pb-6 my-auto"
            >
                <a
                    :href="route(item.route)"
                    class="text-sm font-bold leading-6 hover:underline"
                    >{{ item.name }}</a
                >
            </div>
        </nav>
        <div class="mx-auto">
            <div class="mt-10 flex justify-center align-middle space-x-10">
                <a
                    v-for="item in navigation.social"
                    :key="item.name"
                    :href="item.href"
                    class="my-auto transition ease-in-out hover:-translate-y-1 hover:scale-110"
                >
                    <span class="sr-only">{{ item.name }}</span>
                    <Icon
                        :icon="item.icon"
                        aria-hidden="true"
                        class="h-6 w-6"
                    />
                </a>
            </div>
            <div class="pt-6 flex justify-center">
                <DarkModeToggle />
            </div>
            <div class="flex flex-col justify-center mt-10">
                <p class="text-center text-xs leading-5">
                    &copy; 2024 Hopjobs. Connecting people, beer, and jobs.
                </p>
                <p
                    class="flex flex-row mt-6 justify-center text-center text-xs leading-5"
                >
                    Powered by
                    <a
                        v-for="provider in navigation.poweredBy"
                        :key="provider.name"
                        :href="provider.href"
                        rel="noreferrer"
                    >
                        <Icon
                            :icon="provider.icon"
                            class="transition ease-in-out hover:-translate-y-1 hover:scale-[101%] ml-2 w-5 h-5"
                        />
                    </a>
                </p>
            </div>
        </div>
    </footer>
</template>
