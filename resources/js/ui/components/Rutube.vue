<template>
  <iframe
    width="100%"
    height="100%"
    :src="src"
    frameBorder="0"
    allow="clipboard-write; autoplay"
    webkitAllowFullScreen
    mozallowfullscreen
    allowFullScreen
  ></iframe>
</template>

<script setup>
defineProps({
  src: String,
});
</script>

<script>
export default {
  name: "Rutube",
};
</script>
