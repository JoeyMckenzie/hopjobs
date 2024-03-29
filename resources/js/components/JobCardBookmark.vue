<script lang="ts" setup>
import { Icon } from '@iconify/vue';
import { ref } from 'vue';
import { route } from 'ziggy-js';
import { useForm } from '@inertiajs/vue3';

const props = defineProps<{
    jobId: number;
}>();

const isHovered = ref(false);

const form = useForm({});

const submit = () =>
    form.post(route('jobs.bookmark'), {
        data: {
            id: props.jobId,
        },
    });
</script>

<template>
    <form @submit.prevent="submit">
        <a
            :href="route('jobs.bookmark')"
            class="cursor-pointer"
            type="submit"
            @mouseenter="isHovered = true"
            @mouseleave="isHovered = false"
        >
            <Icon
                v-if="!isHovered"
                class="h-6 w-6"
                icon="material-symbols:bookmark-outline"
            />
            <Icon
                v-if="isHovered"
                class="h-6 w-6"
                icon="material-symbols:bookmark"
            />
        </a>
    </form>
</template>
