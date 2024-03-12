<script setup>
import { Button } from '@/Components/ui/button';
import { Icon } from '@iconify/vue';
import DarkModeToggle from '@/Components/DarkModeToggle.vue';

const navigation = [
    { name: 'Jobs', href: 'home' },
    { name: 'Partners', href: 'home' },
    { name: 'Twitter', href: '#' },
];
</script>

<template>
    <header>
        <nav
            aria-label="Global"
            class="mx-auto flex max-w-7xl items-center justify-between gap-x-6 p-6 lg:px-8"
        >
            <div class="flex h-full w-full lg:flex-1">
                <a
                    class="flex flex-row items-center justify-center space-x-1"
                    href="#"
                >
                    <span class="sr-only">Hopjobs</span>
                    <Icon class="h-10 w-10 text-green-600" icon="mdi:hops" />
                    <h1 class="text-2xl font-bold">hopjobs</h1>
                </a>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a
                    v-for="item in navigation"
                    :key="item.name"
                    :href="route('home')"
                    class="font-semibold leading-6"
                    >{{ item.name }}</a
                >
            </div>
            <div class="flex flex-1 items-center justify-end gap-x-6">
                <Button :href="route('login')" as="a" variant="ghost"
                    >Log in
                </Button>
                <Button :href="route('register')" as="a">Sign up</Button>
                <DarkModeToggle />
            </div>
        </nav>
    </header>
</template>
