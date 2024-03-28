<script lang="ts" setup>
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from '@/components/ui/card';
import { JobListing } from '@/types';
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { computed } from 'vue';
import JobCardBookmark from '@/components/JobCardBookmark.vue';
import { usePage } from '@inertiajs/vue3';

const props = defineProps<{
    listing: JobListing;
}>();

const page = usePage();

const userHasSession = computed(() => !!page.props.auth?.user);

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
const hasCompanyWebsiteUrl = computed(
    () => !!props.listing.company_website_url,
);
</script>

<template>
    <Card
        class="w-full mx-auto max-w-screen-md transition ease-in-out delay-75 hover:scale-[101%]"
    >
        <CardHeader class="flex-row justify-between">
            <div class="flex flex-row space-x-2">
                <Avatar>
                    <AvatarImage
                        v-if="hasCompanyLogo"
                        :alt="listing.company"
                        :src="listing.company_logo!"
                    />
                    <AvatarFallback>Logo</AvatarFallback>
                </Avatar>
                <div class="my-auto">
                    <a
                        :href="listing.listing_url"
                        class="hover:underline"
                        rel="noreferrer"
                    >
                        <CardTitle>{{ listing.title }}</CardTitle>
                    </a>
                    <CardDescription v-if="hasCompanyWebsiteUrl">
                        <a
                            :href="listing.company_website_url"
                            class="hover:underline"
                            rel="noreferrer"
                        >
                            {{ listing.company }}
                        </a>
                    </CardDescription>
                    <CardDescription v-else
                        >{{ listing.company }}
                    </CardDescription>
                </div>
            </div>
            <JobCardBookmark v-if="userHasSession" :job-id="listing.id" />
        </CardHeader>
        <CardContent> {{ listing.description }}</CardContent>
        <CardFooter
            >{{ jobType }} |
            <span v-if="hasPayRange" class="ml-1">
                {{ formattedPayRange }} {{ payType }}</span
            >
        </CardFooter>
    </Card>
</template>
