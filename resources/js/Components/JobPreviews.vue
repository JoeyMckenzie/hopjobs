<script lang="ts" setup>
import { JobListing } from '@/types';
import JobPreviewCard from '@/Components/JobPreviewCard.vue';

defineProps<{
    listings: JobListing[];
}>();
</script>

<template>
    <div class="grid grid-cols-1 space-y-4 px-4">
        <JobPreviewCard
            v-for="listing in listings"
            :key="listing.id"
            :listing="listing"
        />
    </div>
</template>
