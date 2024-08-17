<template>
  <div class="container mt-5">
    <Header title="Наша продукция" />

    <div class="gallery">
      <a v-for="(work, i) in works" data-fancybox="gallery" :key="i" data-aos="zoom-in" :href="work.image">
        <img :src="work.image" alt="works" />
      </a>
    </div>
  </div>
</template>

<script>
import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import slide1 from "../../images/works/1.webp";
import slide2 from "../../images/works/2.webp";
import slide3 from "../../images/works/3.webp";
import slide4 from "../../images/works/4.webp";
import slide5 from "../../images/works/5.webp";
import slide6 from "../../images/works/6.webp";
import slide7 from "../../images/works/7.webp";
import slide8 from "../../images/works/8.webp";
import slide9 from "../../images/works/9.webp";
import slide10 from "../../images/works/10.webp";
import slide11 from "../../images/works/11.webp";
import slide12 from "../../images/works/12.webp";
import Header from "./components/Title.vue";

Fancybox.bind('[data-fancybox="gallery"]');

export default {
  name: "Works",
  components: {
    Header,
  },
  data() {
    return {
      works: [
        { image: slide1 },
        { image: slide2 },
        { image: slide3 },
        { image: slide4 },
        { image: slide5 },
        { image: slide6 },
        { image: slide7 },
        { image: slide8 },
        { image: slide9 },
        { image: slide10 },
        { image: slide11 },
        { image: slide12 },
      ],
    };
  },
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
