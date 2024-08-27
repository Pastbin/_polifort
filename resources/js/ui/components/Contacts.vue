<template>
  <section class="contacts mt-5">
    <div class="container flex jcsb wrap">
      <div class="contacts_address flex column">
        <div class="contacts__item">
          <h5>
            <i class="bi bi-telephone"></i>
            Телефон
          </h5>
          <div>
            <a :href="COMPANY_INFO.phone.alink">{{ COMPANY_INFO.phone.number }}</a>
          </div>
        </div>

        <div class="contacts__item">
          <h5>
            <i class="bi bi-geo-alt"></i>
            Адрес
          </h5>
          <div>{{ COMPANY_INFO.address }}</div>
        </div>

        <div class="contacts__item">
          <h5>
            <i class="bi bi-envelope"></i>
            Электронная почта
          </h5>
          <div>
            <a href="mailto:polifort-pro@mail.ru">{{ COMPANY_INFO.email }}</a>
          </div>
        </div>

        <div class="contacts__item">
          <h5>
            <i class="bi bi-clock"></i>
            Время работы
          </h5>
          <div>{{ COMPANY_INFO.time }}</div>
        </div>

        <div class="contacts__item">
          <h5>
            <i class="bi bi-geo-alt"></i>
            Адрес производства
          </h5>
          <div>{{ COMPANY_INFO.prodAddress }}</div>
        </div>
      </div>

      <div class="map"><YaMap /></div>
    </div>
  </section>
</template>

<script setup>
import YaMap from "./YaMap.vue";
</script>

<script>
import { COMPANY_INFO } from "../../const/contacts";

export default {
  name: "Contacts",
  data() {
    return {
      COMPANY_INFO,
    };
  },
};
</script>

<style scoped>
.map {
  flex-grow: 1;
  min-height: 500px;
}
.contacts {
  background: #333;
  color: #eee;
  padding: 30px 0;
}
</style>
