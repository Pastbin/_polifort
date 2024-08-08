<template>
  <div class="container mt-5">
    <Header title="Наша продукция" />

    <div class=" gallery">
      <a v-for="(work, i) in works" data-fancybox="gallery" :key="i" data-aos="zoom-in" :href="work.image">
        <img :src="work.image" alt="works">
      </a>
    </div>
  </div>

</template>

<script>
import { Fancybox } from '@fancyapps/ui';
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import slide1 from '../../images/works/1.jpg';
import slide2 from '../../images/works/2.jpg';
import slide3 from '../../images/works/3.jpg';
import slide4 from '../../images/works/4.jpg';
import slide5 from '../../images/works/5.jpg';
import slide6 from '../../images/works/6.jpg';
import slide7 from '../../images/works/7.jpg';
import slide8 from '../../images/works/8.jpg';
import slide9 from '../../images/works/9.jpg';
import slide10 from '../../images/works/10.jpg';
import slide11 from '../../images/works/11.jpg';
import slide12 from '../../images/works/12.jpg';
import Header from './components/Header.vue';

Fancybox.bind('[data-fancybox="gallery"]');

export default {
  name: 'Works',
  components: {
    Header
  },
  data() {
    return {
      works: [
        { title: '', description: '', image: slide1 },
        { title: '', description: '', image: slide2 },
        { title: '', description: '', image: slide3 },
        { title: '', description: '', image: slide4 },
        { title: '', description: '', image: slide5 },
        { title: '', description: '', image: slide6 },
        { title: '', description: '', image: slide7 },
        { title: '', description: '', image: slide8 },
        { title: '', description: '', image: slide9 },
        { title: '', description: '', image: slide10 },
        { title: '', description: '', image: slide11 },
        { title: '', description: '', image: slide12 },

      ],
    };
  },
}
</script>

<style scoped>
.gallery {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 10px;
}

a {
  display: block;
  overflow: hidden;
  border-radius: 10px;
}
</style>