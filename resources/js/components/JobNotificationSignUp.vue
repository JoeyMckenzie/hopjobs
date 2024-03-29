<script lang="ts" setup>
import { Input } from '@/components/ui/input';
import { Button } from '@/components/ui/button';
import { route } from 'ziggy-js';
import { useForm, usePage } from '@inertiajs/vue3';
import { watch } from 'vue';
import { toast } from 'vue-sonner';

const page = usePage();
const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('jobs.subscribe'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset('email');
        },
    });
};

watch(page, () => {
    if (
        page.props.flash?.message &&
        page.props.flash.message === 'subscribed'
    ) {
        toast('You are now subscribed!', {
            description:
                'A confirmation email has been sent, unsubscribe from updates anytime.',
        });
    }
});
</script>

<template>
    <div
        class="mx-auto flex justify-center lg:block max-w-5xl px-6 py-8 lg:px-8"
    >
        <div
            class="px-6 py-10 sm:px-12 sm:py-16 lg:flex lg:items-center lg:p-20"
        >
            <div class="lg:w-0 lg:flex-1">
                <h2 class="text-2xl font-bold tracking-tight">
                    Sign up for our job alerts
                </h2>
                <p class="mt-4 max-w-3xl text-lg">
                    Get notified weekly of new jobs, or anytime a new job is
                    posted.
                </p>
            </div>
            <div class="mt-12 sm:w-full sm:max-w-md lg:ml-8 lg:mt-0 lg:flex-1">
                <form class="sm:flex" @submit.prevent="submit">
                    <label class="sr-only" for="email-address"
                        >Email address</label
                    >
                    <Input
                        id="email-address"
                        v-model="form.email"
                        autocomplete="email"
                        class="w-full px-5 py-3"
                        name="email-address"
                        placeholder="Enter your email"
                        required
                        type="email"
                    />
                    <Button
                        :disabled="form.processing"
                        class="mt-3 flex w-full items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium sm:ml-3 sm:mt-0 sm:w-auto sm:flex-shrink-0"
                        type="submit"
                    >
                        Notify me
                    </Button>
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
