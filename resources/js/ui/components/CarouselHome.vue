<template>
  <section id="carouselHome" class="carousel slide">
    <div class="carousel-indicators">
      <template v-for="(_, index) in 4" :key="index">
        <button
          type="button"
          :data-bs-target="`#carouselHome`"
          :data-bs-slide-to="index"
          :class="{ active: index == 0 }"
          :aria-current="index == 0 ? 'true' : 'false'"
          :aria-label="`Slide ${index + 1}`"
        ></button>
      </template>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item" v-for="(slide, index) in slides" :key="index" :class="{ active: index == 0 }">
        <img loading="lazy" :src="slide.image" class="d-block w-100" alt="slider image" />
        <div class="carousel-caption slider-description">
          <h5 class="title">{{ slide.title }}</h5>
          <p class="description">{{ slide.description }}</p>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </section>
</template>

<style scoped>
.carousel-caption {
  left: 5%;
  right: 5%;
}

.carousel {
  .carousel-item {
    height: 600px;
    max-height: 80vh;
    min-height: 200px;
  }

  h5 {
    @media (max-width: 768px) {
      font-size: 1.5rem;
    }
  }

  .title {
    font-size: clamp(20px, 5vw, 32px);
  }

  .slider-description {
    text-shadow:
      0 0px 4px rgba(0, 0, 0),
      0 0px 4px rgba(0, 0, 0);
  }

  .description {
    font-size: clamp(18px, 5vw, 22px);
  }
}
</style>

<script lang="ts">
import slider1 from "../../../images/slider/1.webp";
import slider2 from "../../../images/slider/2.webp";
import slider3 from "../../../images/slider/3.webp";
import slider4 from "../../../images/slider/4.webp";

export default {
  data() {
    return {
      slides: [
        {
          title: "Современное оборудование",
          description: "Мы используем самое современное оборудование",
          image: slider3,
        },
        {
          title: "Передовые технологии обработки металла",
          description: "Мы применяем новейшие методы и оборудование для высокоточной обработки металла.",
          image: slider2,
        },
        {
          title: "Высококвалифицированные специалисты",
          description: "Наша команда состоит из опытных профессионалов, готовых решать задачи любой сложности.",
          image: slider1,
        },
        {
          title: "Качество и надежность продукции",
          description:
            "Мы гарантируем высокое качество и долговечность нашей продукции благодаря строгому контролю на всех этапах производства.",
          image: slider4,
        },
      ],
    };
  },
};
</script>
