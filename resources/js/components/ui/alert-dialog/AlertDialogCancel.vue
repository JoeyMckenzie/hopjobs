<script lang="ts" setup>
import { type HTMLAttributes, computed } from 'vue';
import { AlertDialogCancel, type AlertDialogCancelProps } from 'radix-vue';
import { cn } from '@/shad';
import { buttonVariants } from '@/components/ui/button';

const props = defineProps<AlertDialogCancelProps & { class?: HTMLAttributes['class'] }>();

const delegatedProps = computed(() => {
    const { class: _, ...delegated } = props;

    return delegated;
});
</script>

<template>
    <AlertDialogCancel :class="cn(buttonVariants({ variant: 'outline' }), 'mt-2 sm:mt-0', props.class)"
                       v-bind="delegatedProps">
        <slot />
    </AlertDialogCancel>
</template>
