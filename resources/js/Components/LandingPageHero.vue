<script lang="ts" setup>
import { Button } from '@/Components/ui/button';
</script>

<template>
    <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2
                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
            >
                Boost your productivity.<br />Start using our app today.
            </h2>
            <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600">
                Incididunt sint fugiat pariatur cupidatat consectetur sit cillum
                anim id veniam aliqua proident excepteur commodo do ea.
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
