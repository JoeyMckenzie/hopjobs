<script lang="ts" setup>
import { ref } from 'vue';
import { Bars3Icon } from '@heroicons/vue/24/outline';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Button } from '@/Components/ui/button';
import { route } from 'ziggy-js';
import MobileMenuSlideOver from '@/Components/MobileMenuSlideOver.vue';

const navigation = [
    { name: 'Jobs', href: '#' },
    { name: 'Breweries', href: '#' },
    { name: 'Contact', href: '#' },
];

const mobileMenuOpen = ref(false);
</script>

<template>
    <header>
        <nav
            aria-label="Global"
            class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8"
        >
            <div class="flex lg:flex-1">
                <ApplicationLogo />
            </div>
            <div class="flex lg:hidden">
                <Button
                    type="button"
                    variant="ghost"
                    @click="mobileMenuOpen = true"
                >
                    <span class="sr-only">Open main menu</span>
                    <Bars3Icon aria-hidden="true" class="h-6 w-6" />
                </Button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a
                    v-for="item in navigation"
                    :key="item.name"
                    :href="item.href"
                    class="text-sm font-semibold hover:underline leading-6"
                    >{{ item.name }}</a
                >
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <Button
                    :href="route('login')"
                    as="a"
                    class="text-sm font-semibold leading-6 gap-x-1"
                    variant="ghost"
                >
                    Log in <span aria-hidden="true"> &rarr;</span>
                </Button>
            </div>
        </nav>
        <MobileMenuSlideOver
            :mobile-menu-open="mobileMenuOpen"
            @mobile-menu-closed="mobileMenuOpen = false"
        />
    </header>
</template>
