<template>
  <MainLayout>
    <Head>
      <title>{{ COMPANY_INFO.name }} - Главная</title>
    </Head>

    <CarouselHome />

    <div class="container mt-5 d-flex gap-3 feature">
      <div class="flex-grow-1" v-for="(card, i) in featureCards" data-aos="fade-up" :data-aos-delay="(i + 1) * 150">
        <div class="card h-100 mx-auto">
          <div class="card-body">
            <h5 class="card-title">{{ card.title }}</h5>
            <p class="card-text">{{ card.description }}</p>
          </div>
        </div>
      </div>
    </div>

    <Works />

    <Title title="Наши преимущества" />
    <BgParallax src="images/bg/parallax.webp" class="my-5">
      <Feature class="my-5" />
    </BgParallax>

    <Title title="О Компании" />
    <About />

    <Title title="Услуги" />
    <Services />

    <Title title="Схема работы" />
    <Scheme />

    <Title title="С нами сотрудничают" />
    <CooperateWith />

    <Title title="Обратная связь" />
    <Feedback />
  </MainLayout>
</template>

<style scoped>
.slider-description {
  text-shadow: 0 0px 4px rgba(0, 0, 0);
  background: rgba(0, 0, 50, 0.2);
  border-radius: 20px;

  h5 {
    font-size: 2.5rem;
    font-weight: 700;
  }

  p {
    font-size: 24px;
  }
}

.feature {
  @media (max-width: 1024px) {
    flex-wrap: wrap;
  }
}

#carouselHome {
  img {
    width: 100%;
    height: 650px;
    object-fit: cover;
  }
}
</style>

<script setup>
import { usePage } from "@inertiajs/vue3";
import { COMPANY_INFO } from "@/const/contacts";
import { Head } from "@inertiajs/vue3";
import AOS from "aos";
import "aos/dist/aos.css";
import "aos/dist/aos.js";
import Works from "../ui/Works.vue";
import Feature from "@/ui/Feature.vue";
import BgParallax from "@/ui/components/BgParallax.vue";
import CarouselHome from "@/ui/components/CarouselHome.vue";
import Title from "@/ui/components/Title.vue";
import Contacts from "@/ui/components/Contacts.vue";
import About from "@/ui/components/About.vue";
import Services from "@/ui/components/Services.vue";
import Scheme from "@/ui/components/Scheme.vue";
import CooperateWith from "@/ui/components/CooperateWith.vue";
import Feedback from "@/ui/components/Feedback.vue";
import MainLayout from "@/Layouts/MainLayout.vue";

AOS.init({ duration: 1000, delay: 300 });

usePage().props.title = COMPANY_INFO.name + " - Главная";
</script>

<script>
export default {
  data() {
    return {
      featureCards: [
        {
          title: "Высокоточная обработка",
          description:
            "Наше оборудование позволяет выполнять операции с точностью до сотой доли миллиметра, что гарантирует качество и соответствие чертежам.",
        },
        {
          title: "Широкий спектр услуг",
          description:
            "Мы предоставляем полный комплекс услуг по металлообработке, включая токарные, фрезерные, сверлильные и шлифовальные работы.",
        },
        {
          title: "Надёжность и долговечность",
          description:
            "Наши изделия проходят строгий контроль качества, что обеспечивает их надёжность и долговечность в эксплуатации.",
        },
      ],
    };
  },
};
</script>
