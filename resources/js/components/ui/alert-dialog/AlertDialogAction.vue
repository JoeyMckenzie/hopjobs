<script lang="ts" setup>
import { type HTMLAttributes, computed } from 'vue';
import { AlertDialogAction, type AlertDialogActionProps } from 'radix-vue';
import { cn } from '@/shad';
import { buttonVariants } from '@/components/ui/button';

const props = defineProps<AlertDialogActionProps & { class?: HTMLAttributes['class'] }>();

const delegatedProps = computed(() => {
    const { class: _, ...delegated } = props;

    return delegated;
});
</script>

<template>
    <AlertDialogAction :class="cn(buttonVariants(), props.class)" v-bind="delegatedProps">
        <slot />
    </AlertDialogAction>
</template>
