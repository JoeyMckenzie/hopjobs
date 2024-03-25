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

const jobType = computed(() => {
    switch (props.listing.listing_type) {
        case 'full_time':
            return 'Full-time';
        case 'part_time':
            return 'Part-time';
        default:
            return props.listing.listing_type;
    }
});

const payType = computed(() => {
    switch (props.listing.pay_type) {
        case 'salary':
            return 'yearly';
        default:
            return props.listing.pay_type;
    }
});

const hasPayRange = computed(() => {
    if (
        props.listing.pay_end === undefined ||
        props.listing.pay_start === undefined
    ) {
        return false;
    }

    return (
        props.listing.pay_start > 0 &&
        props.listing.pay_end > props.listing.pay_start
    );
});

const formattedPayRange = computed(() => {
    if (!hasPayRange.value) {
        return '';
    }

    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        minimumFractionDigits: 0,
        maximumFractionDigits: 0,
    });
    const payStart = formatter.format(props.listing.pay_start!);
    const payEnd = formatter.format(props.listing.pay_end!);
    return `${payStart} - ${payEnd}`;
});

const hasCompanyLogo = computed(() => !!props.listing.company_logo);
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
                        v-if="hasCompanyLogo"
                        :alt="listing.company"
                        :src="listing.company_logo!"
                    />
                    <AvatarFallback>Logo</AvatarFallback>
                </Avatar>
                <div class="my-auto">
                    <CardTitle>{{ listing.title }}</CardTitle>
                    <CardDescription>{{ listing.company }}</CardDescription>
                </div>
            </CardHeader>
            <CardContent> {{ listing.description }}</CardContent>
            <CardFooter
                >{{ jobType }} |
                <span v-if="hasPayRange" class="ml-1">
                    {{ formattedPayRange }} {{ payType }}</span
                >
            </CardFooter>
        </Card>
    </a>
</template>
