<template>
  <div class="about container my-5">
    <div class="accordion" id="accordionAbout">
      <div class="accordion-item" v-for="(card, i) in cards">
        <h2 class="accordion-header">
          <button
            class="accordion-button"
            type="button"
            data-bs-toggle="collapse"
            :data-bs-target="`#collapse${i + 1}`"
            aria-expanded="true"
          >
            {{ card.title }}
          </button>
        </h2>
        <div :id="`collapse${i + 1}`" class="accordion-collapse collapse show" data-bs-parent="#accordionAbout">
          <div class="accordion-body flex">
            <div class="image">
              <img :src="card.image" alt="accordion image" />
            </div>
            <div>
              {{ card.description }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.about {
  p {
    font-size: 18px;
  }

  .title {
    font-size: 24px;
    font-weight: 700;
    position: absolute;
    color: white;
    top: 0;
    right: 0;
    left: 0;
    text-align: center;
    padding: 20px;
    background: rgba(0, 0, 0, 0.3);
  }
}

.image {
  width: 40%;
  height: 300px;
  flex-shrink: 0;
}

.about_card {
  width: 50%;
  height: 500px;
  position: relative;
  transition: all 0.5s;

  img {
    transition: all 0.5s;
  }
}
</style>

<script>
import slide1 from "../../../images/about/1.jpg";
import slide2 from "../../../images/about/2.jpg";
import slide4 from "../../../images/about/4.jpeg";
import slide5 from "../../../images/about/5.jpg";

export default {
  name: "About",
  data() {
    return {
      cards: [
        {
          title: "О компании",
          description: `ООО "ПолифортМаш" была основана в 2005 году в городе Самара группой профессионалов в области
        металлообработки. Компания стремится стать ведущим предприятием по производству высококачественных
        деталей и оборудования для различных отраслей промышленности.`,
          image: slide1,
        },
        {
          title: "Развитие Компании",
          description: `"ПолифортМаш" быстро завоевала доверие клиентов и
        начала расти. В 2010 году компания установила современное оборудование для токарной, фрезерной и
        зубонарезной обработки, что позволило значительно увеличить объемы производства. В 2015 году внедрение
        систем ЧПУ - обработки повысило точность и эффективность процессов.`,
          image: slide2,
        },
        {
          title: "Специалисты",
          description: `На сегодняшний день штат компании составляет 10 человек. Все сотрудники — высококвалифицированные
        профессионалы 5-6 разрядов. Каждый из них имеет глубокие знания в области металлообработки и
        способен решать задачи любой сложности. В "ПолифортМаш" трудятся не только грамотные рабочие, но и
        инженеры, умеющие проектировать и внедрять нестандартные решения.`,
          image: slide4,
        },
        {
          title: "Наша миссия",
          description: `Миссия "ПолифортМаш" — предоставлять высококачественные услуги по металлообработке, удовлетворяя
        потребности клиентов и помогая им достигать успеха.Мы гордимся своей работой и стремимся выполнять
        каждый заказ с максимальной точностью и в установленные сроки.`,
          image: slide5,
        },
      ],
    };
  },
};
</script>
