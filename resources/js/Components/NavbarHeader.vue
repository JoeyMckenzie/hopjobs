<script lang="ts" setup>
import { ref } from 'vue';
import { Dialog, DialogPanel } from '@headlessui/vue';
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Button } from '@/Components/ui/button';
import DarkModeToggle from '@/Components/DarkModeToggle.vue';

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
                <DarkModeToggle />
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a class="text-sm font-semibold leading-6" href="#"
                    >Log in <span aria-hidden="true">&rarr;</span></a
                >
            </div>
        </nav>
        <Dialog
            :open="mobileMenuOpen"
            as="div"
            class="lg:hidden"
            @close="mobileMenuOpen = false"
        >
            <div class="fixed inset-0 z-10" />
            <DialogPanel
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
            >
                <div class="flex items-center justify-between">
                    <ApplicationLogo />
                    <button
                        class="-m-2.5 rounded-md p-2.5 text-gray-700"
                        type="button"
                        @click="mobileMenuOpen = false"
                    >
                        <span class="sr-only">Close menu</span>
                        <XMarkIcon aria-hidden="true" class="h-6 w-6" />
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a
                                v-for="item in navigation"
                                :key="item.name"
                                :href="item.href"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:underline text-gray-900 hover:bg-gray-50"
                                >{{ item.name }}</a
                            >
                        </div>
                        <div class="py-6">
                            <a
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                href="#"
                                >Log in</a
                            >
                        </div>
                    </div>
                </div>
            </DialogPanel>
        </Dialog>
    </header>
</template>
