<template>
  <div class="cooperate container">
    <div class="jcc _wrap">
      <div class="item card" v-for="item in items">
        <img :src="item.img" class="card-img-top" alt="" />
        <div class="card-body">
          <h5 class="card-title">{{ item.title }}</h5>
          <p class="card-text description">{{ item.description }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped lang="scss">
.cooperate {
  ._wrap {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 20px;

    @media (max-width: 600px) {
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    }
  }

  .item {
    img {
      height: 300px;

      @media (max-width: 600px) {
        height: 220px;
      }
    }

    .description {
      font-size: clamp(14px, 1vw, 16px);
    }
  }
}
</style>

<script>
const items = [
  {
    title: "Авиакор",
    img: "images/cooperate/aviakor.jpg",
    description:
      "«Авиакор — авиационный завод» — российское авиастроительное предприятие, расположенное в Самаре. Входит в машиностроительный холдинг «Русские машины».Завод относится к числу немногих предприятий России, которые обладают опытом в области серийного производства гражданских и военных самолётов из деталей, узлов и агрегатов собственного производства.В разные годы завод выпускал самолёты Ил-2, Ту-4, Ту-94, Ту-154, Ту-142 и другие модели. За время своего существования он произвёл более 22,5 тыс. самолётов.",
  },
  {
    title: "Теплант",
    img: "images/cooperate/teplant.jpg",
    description:
      "Промышленная Группа TEPLANT – объединение группы заводов по производству строительных конструкций и материалов из металлопроката с 1968 года. В Промышленную Группу Teplant входят производственные кластеры в городах Самара, Челябинск, Волгоград, предприятия ПАО «ЧЗПСН-Профнастил», ООО «Электрощит-Стройсистема», ООО «Теплант-ЮГ», ОСП «Электрощит-Стройсистема ЮГ», а также торговые марки Teplant и VattaRUS.",
  },
];
export default {
  data: () => ({
    items,
  }),
};
</script>
