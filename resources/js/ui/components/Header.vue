<template>
    <header>
        <h2 class="text-center header my-5">{{ title }}</h2>
    </header>
</template>

<script setup lang="ts">
withDefaults(defineProps<{
    title: string
}>(), {
    title: 'Default Title'
})
</script>

<script lang="ts">
export default {
    name: 'Header'
}
</script>

<style scoped>
.header {
    font-size: 2.5rem;
    font-weight: 500;
}
</style>