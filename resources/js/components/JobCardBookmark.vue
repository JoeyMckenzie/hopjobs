<script lang="ts" setup>
import { Icon } from '@iconify/vue';
import { ref } from 'vue';

defineProps<{
    jobId: number;
}>();

const isHovered = ref(false);
</script>

<template>
    <span
        class="cursor-pointer"
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
    </span>
</template>

<style scoped></style>
