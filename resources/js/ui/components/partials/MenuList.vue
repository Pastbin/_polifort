<template>
  <li><Link href="/">Главная</Link></li>
  <li><Link :href="route('products')">Продукция</Link></li>
  <li><Link :href="route('contacts')">Контакты</Link></li>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
