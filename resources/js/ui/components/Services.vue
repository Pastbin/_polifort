<template>
  <div class="services my-5">
    <div class="container">
      <ul class="list-group text-center">
        <li class="list-group-item" v-for="(service, i) in services" :data-aos="i % 2 ? 'fade-left' : 'fade-right'"
          data-aos-duration="1500">
          <div>{{ service.title }}</div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Services',
  data: () => ({
    services: [
      { title: 'Токарные работы' },
      { title: 'Фрезерные работы' },
      { title: 'Зубонарезные работы' },
      { title: 'Полировка' },
      { title: 'Шлифовка' },
      { title: 'Закалка металла' },
      { title: 'Отрезка металла' },
      { title: 'Плазменная резка' },
      { title: 'Изготовление шнеков' },
      { title: 'Заготовки до 6 метров, до 3 тонн' },
      { title: 'Проектные работы, разработка чертежей' },
      { title: 'Производство нестандартного оборудования' },
      { title: 'Установка оборудования, ввод в эксплуатацию' },
      { title: 'Послегарантийное обслуживание' },
    ]
  })
}

</script>


<style lang="scss">
.services {

  ul {
    margin: 0 auto;
    max-width: 700px;
    font-size: 18px;

    li {}
  }

}
</style>