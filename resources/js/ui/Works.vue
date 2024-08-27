<template>
  <section class="container mt-5">
    <Header title="Наша продукция" />

    <div class="gallery">
      <a v-for="i in 12" data-fancybox="gallery" :key="i" data-aos="zoom-in" :href="`images/works/${i}.webp`">
        <img :src="`images/works/${i}.webp`" loading="lazy" alt="works" />
      </a>
    </div>
  </section>
</template>

<script setup>
import Header from "./components/Title.vue";
</script>

<script>
import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

Fancybox.bind();

export default {
  name: "Works",
};
</script>

<style scoped>
.gallery {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 10px;

  @media (max-width: 1024px) {
    grid-template-columns: repeat(4, 1fr);
  }

  @media (max-width: 768px) {
    grid-template-columns: repeat(3, 1fr);
  }

  @media (max-width: 500px) {
    grid-template-columns: repeat(2, 1fr);
  }
}

a {
  display: block;
  overflow: hidden;
  border-radius: 10px;

  &:nth-child(12),
  &:nth-child(11) {
    display: none;

    @media (max-width: 1024px) {
      display: block;
    }
  }
}
</style>
