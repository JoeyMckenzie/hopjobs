<script lang="ts" setup>
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from '@/Components/ui/card';
import { JobListing } from '@/types';

defineProps<{
    listing: JobListing;
}>();
</script>

<template>
    <Card class="w-full mx-auto max-w-screen-md">
        <CardHeader>
            <CardTitle>Card Title</CardTitle>
            <CardDescription>Card Description</CardDescription>
        </CardHeader>
        <CardContent> Card Content</CardContent>
        <CardFooter> Card Footer</CardFooter>
    </Card>
</template>
