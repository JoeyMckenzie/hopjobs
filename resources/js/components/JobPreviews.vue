<script lang="ts" setup>
import { JobListing } from '@/types';
import JobPreviewCard from '@/components/JobPreviewCard.vue';

defineProps<{
    listings: JobListing[];
}>();
</script>

<template>
    <div class="grid grid-cols-1 space-y-4 px-4">
        <h2 class="text-center text-4xl font-extrabold pb-8">
            Recent Listings
        </h2>
        <JobPreviewCard
            v-for="listing in listings"
            :key="listing.id"
            :listing="listing"
        />
    </div>
</template>
