<script lang="ts" setup>
import { Button } from '@/Components/ui/button';
import { Icon } from '@iconify/vue';
import { route } from 'ziggy-js';
</script>

<template>
    <div class="px-6 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <div class="flex flex-row items-center justify-center space-x-1">
                <span class="sr-only">Hopjobs</span>
                <Icon class="h-16 w-16 text-green-600" icon="mdi:hops" />
                <h1 class="text-4xl font-bold">hopjobs</h1>
            </div>
            <p class="mx-auto mt-6 max-w-xl text-lg leading-8">
                Connecting people, beer, and jobs.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <Button :href="route('login')" as="a">Find a job</Button>
                <Button :href="route('register')" as="a" variant="ghost"
                    >List a job <span aria-hidden="true">→</span></Button
                >
            </div>
        </div>
    </div>
</template>
