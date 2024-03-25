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
import { Avatar, AvatarFallback, AvatarImage } from '@/Components/ui/avatar';
import { computed } from 'vue';

const props = defineProps<{
    listing: JobListing;
}>();

const formattedPayRange = computed(function () {
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        minimumFractionDigits: 0,
        maximumFractionDigits: 0,
    });
    const payStart = formatter.format(props.listing.pay_start);
    const payEnd = formatter.format(props.listing.pay_end);
    return `${payStart} - ${payEnd}`;
});
</script>

<template>
    <a
        :href="listing.listing_url"
        class="w-full mx-auto max-w-screen-md transition ease-in-out delay-75 hover:scale-[102%]"
    >
        <Card>
            <CardHeader class="flex-row space-x-2">
                <Avatar>
                    <AvatarImage
                        :alt="listing.company"
                        :src="listing.company_logo"
                    />
                    <AvatarFallback>CN</AvatarFallback>
                </Avatar>
                <div class="my-auto">
                    <CardTitle>{{ listing.title }}</CardTitle>
                    <CardDescription>{{ listing.company }}</CardDescription>
                </div>
            </CardHeader>
            <CardContent> {{ listing.description }}</CardContent>
            <CardFooter> {{ formattedPayRange }}</CardFooter>
        </Card>
    </a>
</template>
