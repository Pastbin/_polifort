<template>
  <Head>
    <title>{{ COMPANY_INFO.name }} - Продукция</title>
  </Head>

  <Works />

  <div class="container">
    <Title title="Оборудование" />

    <div class="products gap-3 my-5">
      <div class="w-100 my-4" v-for="(card, i) in cards">
        <div class="card">
          <div class="card-body">
            <div class="card-title mb-3">
              <h5>{{ card.title }}</h5>
            </div>

            <div class="flex item wrap">
              <div class="video"><Rutube :src="card.video" /></div>

              <div class="description">{{ card.description }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <Contacts />
</template>

<script>
import Title from "@/ui/components/Title.vue";
import Works from "@/ui/Works.vue";
import Rutube from "@/ui/components/Rutube.vue";
import Contacts from "@/ui/components/Contacts.vue";
import Home from "./Home.vue";
import { COMPANY_INFO } from "@/const/contacts";

export default {
  name: "Products",
  components: {
    Title,
    Works,
    Rutube,
    Contacts,
    Home,
  },
  data: () => ({
    cards: [
      {
        title: "Название Оборудования",
        description: `Металлорежущий инструмент - это инструмент, который используется для резания, изгибания, ковки и фрезерования металла. Он состоит из ручки, головки и хвостовика, которые соединяются для формирования инструмента. Один из основных типов металлорежущего инструмента - фрезы, которая используется для фретирования и выдавливания. Металлорежущий инструмент имеет множество применений в различных областях, включая производство, строительство и ремонт.`,
        image: "https://picsum.photos/300/200?random=1",
        video: "https://rutube.ru/play/embed/19a5f2aca1d32c42d6dbbd358bff777f/?t=16",
      },
      {
        title: "Название Оборудования",
        description: `Металлорежущий инструмент - это инструмент, который используется для резания, изгибания, ковки и фрезерования металла. Он состоит из ручки, головки и хвостовика, которые соединяются для формирования инструмента. Один из основных типов металлорежущего инструмента - фрезы, которая используется для фретирования и выдавливания. Металлорежущий инструмент имеет множество применений в различных областях, включая производство, строительство и ремонт.`,
        image: "https://picsum.photos/300/200?random=1",
        video: "https://rutube.ru/play/embed/19a5f2aca1d32c42d6dbbd358bff777f/?t=16",
      },
    ],
    COMPANY_INFO,
  }),
};
</script>

<style lang="scss" scoped>
.video {
  flex-grow: 1;
  height: 500px;
  max-height: 50vh;
  min-height: 300px;
}

.description {
  width: 40%;

  @media (max-width: 1024px) {
    width: 100%;
  }
}
</style>
