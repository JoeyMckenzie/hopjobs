<script lang="ts" setup>
import { UseDark } from '@vueuse/components';
import { Button } from '@/Components/ui/button';
import { Icon } from '@iconify/vue';
</script>

<template>
    <UseDark v-slot="{ isDark, toggleDark }">
        <Button variant="ghost" @click="toggleDark()">
            <Icon v-if="isDark" class="w-6 h-6" icon="solar:sun-fog-bold" />
            <Icon v-else class="w-6 h-6" icon="radix-icons:moon" />
        </Button>
    </UseDark>
</template>

<style scoped></style>
