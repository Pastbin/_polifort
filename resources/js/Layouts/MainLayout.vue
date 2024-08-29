<template>
  <Header />
  <MainMenu class="mb-5" />
  <BurgerMenu />
  <main><slot /></main>
  <Footer />
</template>

<script setup>
import Header from "@/ui/components/partials/Header.vue";
import Footer from "@/ui/components/partials/Footer.vue";
import MainMenu from "@/ui/components/partials/MainMenu.vue";
import BurgerMenu from "@/ui/components/partials/BurgerMenu.vue";
</script>
