<script lang="ts" setup>
import { ref } from 'vue';
import { Dialog, DialogPanel } from '@headlessui/vue';
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline';

const navigation = [
    { name: 'Jobs', href: '#' },
    { name: 'Breweries', href: '#' },
    { name: 'Twitter', href: '#' },
];

const mobileMenuOpen = ref(false);
</script>

<template>
    <header class="bg-white">
        <nav
            aria-label="Global"
            class="mx-auto flex max-w-7xl items-center justify-between gap-x-6 p-6 lg:px-8"
        >
            <div class="flex lg:flex-1">
                <a class="-m-1.5 p-1.5" href="#">
                    <span class="sr-only">Your Company</span>
                    <img
                        alt=""
                        class="h-8 w-auto"
                        src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    />
                </a>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a
                    v-for="item in navigation"
                    :key="item.name"
                    :href="item.href"
                    class="text-sm font-semibold leading-6 text-gray-900 hover:underline"
                    >{{ item.name }}</a
                >
            </div>
            <div class="flex flex-1 items-center justify-end gap-x-6">
                <a
                    class="hidden lg:block lg:text-sm lg:font-semibold lg:leading-6 lg:text-gray-900"
                    href="#"
                    >Log in</a
                >
                <a
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    href="#"
                    >Sign up</a
                >
            </div>
            <div class="flex lg:hidden">
                <button
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                    type="button"
                    @click="mobileMenuOpen = true"
                >
                    <span class="sr-only">Open main menu</span>
                    <Bars3Icon aria-hidden="true" class="h-6 w-6" />
                </button>
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
                <div class="flex items-center gap-x-6">
                    <a class="-m-1.5 p-1.5" href="#">
                        <span class="sr-only">Your Company</span>
                        <img
                            alt=""
                            class="h-8 w-auto"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        />
                    </a>
                    <a
                        class="ml-auto rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        href="#"
                        >Sign up</a
                    >
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
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
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
