<script lang="ts" setup>
import { InboxIcon, TrashIcon, UsersIcon } from '@heroicons/vue/24/outline';

const features = [
    {
        name: 'Unlimited inboxes',
        description:
            'Non quo aperiam repellendus quas est est. Eos aut dolore aut ut sit nesciunt. Ex tempora quia. Sit nobis consequatur dolores incidunt.',
        href: '#',
        icon: InboxIcon,
    },
    {
        name: 'Manage team members',
        description:
            'Vero eum voluptatem aliquid nostrum voluptatem. Vitae esse natus. Earum nihil deserunt eos quasi cupiditate. A inventore et molestiae natus.',
        href: '#',
        icon: UsersIcon,
    },
    {
        name: 'Spam report',
        description:
            'Et quod quaerat dolorem quaerat architecto aliquam accusantium. Ex adipisci et doloremque autem quia quam. Quis eos molestiae at iure impedit.',
        href: '#',
        icon: TrashIcon,
    },
];
</script>

<template>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-none">
            <dl
                class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3"
            >
                <div
                    v-for="feature in features"
                    :key="feature.name"
                    class="flex flex-col"
                >
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div
                            class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600"
                        >
                            <component
                                :is="feature.icon"
                                aria-hidden="true"
                                class="h-6 w-6 text-white"
                            />
                        </div>
                        {{ feature.name }}
                    </dt>
                    <dd
                        class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600"
                    >
                        <p class="flex-auto">{{ feature.description }}</p>
                        <p class="mt-6">
                            <a
                                :href="feature.href"
                                class="text-sm font-semibold leading-6 text-indigo-600"
                                >Learn more <span aria-hidden="true">→</span></a
                            >
                        </p>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</template>
