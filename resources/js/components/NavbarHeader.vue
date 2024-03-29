<script lang="ts" setup>
import { computed, ref } from 'vue';
import { Bars3Icon } from '@heroicons/vue/24/outline';
import ApplicationLogo from '@/components/ApplicationLogo.vue';
import { Button } from '@/components/ui/button';
import { route } from 'ziggy-js';
import MobileMenuSlideOver from '@/components/MobileMenuSlideOver.vue';
import { Link, usePage } from '@inertiajs/vue3';
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuLabel,
    DropdownMenuSeparator,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu';

const navigation = [
    { name: 'Jobs', href: 'home' },
    { name: 'Breweries', href: '#' },
];

const mobileMenuOpen = ref(false);
const page = usePage();

const userHasSession = computed(() => !!page.props.auth.user);
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
            <div class="hidden lg:flex lg:gap-x-2">
                <Button
                    v-for="item in navigation"
                    :key="item.name"
                    :href="item.href"
                    as="a"
                    variant="ghost"
                    >{{ item.name }}
                </Button>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <!-- Settings Dropdown -->
                <div v-if="userHasSession" class="relative ms-3">
                    <DropdownMenu>
                        <DropdownMenuTrigger
                            ><span class="inline-flex rounded-md">
                                <Button type="button" variant="ghost">
                                    {{ $page.props.auth.user.name }}

                                    <svg
                                        class="-me-0.5 ms-2 h-4 w-4"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            clip-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            fill-rule="evenodd"
                                        />
                                    </svg>
                                </Button>
                            </span>
                        </DropdownMenuTrigger>
                        <DropdownMenuContent>
                            <DropdownMenuLabel class="font-extrabold"
                                >My Account
                            </DropdownMenuLabel>
                            <DropdownMenuSeparator />
                            <DropdownMenuItem>
                                <Link :href="route('profile.edit')">
                                    Profile
                                </Link>
                            </DropdownMenuItem>
                            <DropdownMenuItem>
                                <Link
                                    :href="route('logout')"
                                    as="a"
                                    method="post"
                                >
                                    Log Out
                                </Link>
                            </DropdownMenuItem>
                        </DropdownMenuContent>
                    </DropdownMenu>
                </div>
                <div v-else class="flex gap-x-2">
                    <Button
                        :href="route('login')"
                        as="a"
                        class="text-sm font-semibold leading-6 gap-x-1"
                        variant="ghost"
                    >
                        Log in <span aria-hidden="true"> &rarr;</span>
                    </Button>
                    <Button
                        :href="route('register')"
                        as="a"
                        class="text-sm font-semibold leading-6 gap-x-1"
                    >
                        Register
                    </Button>
                </div>
            </div>
        </nav>
        <MobileMenuSlideOver
            :mobile-menu-open="mobileMenuOpen"
            @mobile-menu-closed="mobileMenuOpen = false"
        />
    </header>
</template>
