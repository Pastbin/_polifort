<template>
  <MainLayout>
    <Head>
      <title>{{ COMPANY_INFO.name }} - Контакты</title>
    </Head>

    <div class="container">
      <Title title="Контакты" />

      <div class="list-group">
        <div class="list-group-item">
          <div class="title">
            <i class="bi bi-geo-alt"></i>
            Адрес офиса:
          </div>
          <div class="description">{{ COMPANY_INFO.address }}</div>
        </div>

        <div class="list-group-item">
          <div class="title">
            <i class="bi bi-telephone"></i>
            Телефон:
          </div>
          <div>
            <a :href="COMPANY_INFO.phone.alink">{{ COMPANY_INFO.phone.number }}</a>
          </div>
        </div>

        <div class="list-group-item">
          <div class="title">
            <i class="bi bi-envelope"></i>
            Электронная почта:
          </div>
          <div>
            <a href="mailto:{{ COMPANY_INFO.email }}">{{ COMPANY_INFO.email }}</a>
          </div>
        </div>

        <div class="list-group-item">
          <div class="title">
            <i class="bi bi-clock"></i>
            Время работы:
          </div>
          <div class="description">{{ COMPANY_INFO.time }}</div>
        </div>

        <div class="list-group-item">
          <div class="title">
            <i class="bi bi-geo-alt"></i>
            Адрес производства:
          </div>
          <div class="description">{{ COMPANY_INFO.prodAddress }}</div>
        </div>
      </div>

      <a class="call" :href="'tel:' + COMPANY_INFO.phone.alink">
        <button class="btn btn-primary flex gap-2 my-5">
          <i class="bi bi-telephone"></i>
          Позвонить
        </button>
      </a>
    </div>
  </MainLayout>
</template>

<script setup>
import { COMPANY_INFO } from "@/const/contacts";
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import Title from "@/ui/components/Title.vue";
</script>

<script>
export default {
  name: "Contacts",
  data: () => ({
    COMPANY_INFO,
  }),
};
</script>

<style scoped lang="scss">
.call {
  &:hover {
    text-decoration: none;
  }
}

.description {
  align-self: end;
}

.title {
  font-size: 20px;
}

.map {
  height: 500px;
  max-height: 80vh;
}
</style>
