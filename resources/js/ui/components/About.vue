<template>
  <div class="about container my-5">
    <div class="accordion" id="accordion">
      <!-- <div class="accordion-item" v-for="(card, i) in cards">
        <h2 class="accordion-header">

          <button class="accordion-button" type="button" data-bs-toggle="collapse" :data-bs-target="`#collapse${i + 1}`"
            aria-expanded="true">
            {{ card.title }}
          </button>
        </h2>
        <div :id="`collapse${i + 1}`" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body flex">
            <div class="image">
              <img :src="card.image" alt="accordion image">
            </div>
            <div>
              {{ card.description }}
            </div>
          </div>
        </div>
      </div> -->

      <div class="flex wrap gap-0 about_wrap">
        <div class="gear">
          <div class="rotate">
            <i class="bi bi-gear"></i>
          </div>
        </div>
        <div class="about_card" v-for="(card, i) in cards" :key="i">
          <div class="title">{{ card.title }}</div>
          <img :src="card.image" alt="about image" />
          <div class="description">{{ card.description }}</div>
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

.about_card {
  width: 50%;
  height: 500px;
  position: relative;
  transition: all 0.5s;

  img {
    transition: all 0.5s;
  }
}

.description {
  font-size: 18px;
  z-index: 1;
  position: absolute;
  padding: 25px;
  bottom: 0;
  color: white;
  text-shadow:
    2px 2px 3px #000,
    -2px -2px 3px #000;
  background: rgba(0, 0, 0, 0.1);
  text-align: justify;
}

.gear {
  font-size: 80px;
  z-index: 2;
  color: rgb(53, 113, 186);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

  .rotate {
    animation: rotate 5s linear infinite;
  }
}

@keyframes rotate {
  0% {
    transform: rotate(0);
  }

  100% {
    transform: rotate(360deg);
  }
}

.about_wrap {
  border-radius: 20px;
  overflow: hidden;
  position: relative;
  transition: all 0.5s;
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
