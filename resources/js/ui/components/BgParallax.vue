<script setup lang="ts">
import { computed } from 'vue';

const props = defineProps({
    src: {
        type: String,
        required: true,
    },
});

const style = computed(() => {
    return {
        backgroundImage: `url(${props.src})`,
        backgroundSize: 'cover',
        backgroundAttachment: 'fixed',
        backgroundPosition: 'center',
        backgroundRepeat: 'no-repeat',
        height: '800px',
        backdropFilter: 'blur(15px)',
    };
});
</script>

<template>
    <div class="min-h-screen my-5 py-5" :style="style">
        <slot></slot>
    </div>
</template>

<style scoped></style>
