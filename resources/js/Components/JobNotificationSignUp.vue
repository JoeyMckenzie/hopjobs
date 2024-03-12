<script lang="ts" setup>
import { Input } from '@/Components/ui/input';
import { Button } from '@/Components/ui/button';
</script>

<template>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="rounded-3xl px-6 sm:px-12 lg:flex lg:items-center">
            <div class="lg:w-0 lg:flex-1">
                <h2 class="text-3xl font-bold tracking-tight">
                    Sign up for our newsletter
                </h2>
                <p class="mt-4 max-w-3xl text-lg">
                    Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure
                    qui Lorem cupidatat commodo. Elit sunt amet fugiat.
                </p>
            </div>
            <div class="mt-12 sm:w-full sm:max-w-md lg:ml-8 lg:mt-0 lg:flex-1">
                <form class="sm:flex">
                    <label class="sr-only" for="email-address"
                        >Email address</label
                    >
                    <Input
                        id="email-address"
                        autocomplete="email"
                        name="email-address"
                        placeholder="Enter your email"
                        required
                        type="email"
                    />
                    <span class="px-1" />
                    <Button type="submit"> Notify me</Button>
                </form>
                <p class="mt-3 text-sm">
                    We care about the protection of your data. Read our
                    <a class="font-medium underline" href="#"
                        >Privacy Policy.</a
                    >
                </p>
            </div>
        </div>
    </div>
</template>
