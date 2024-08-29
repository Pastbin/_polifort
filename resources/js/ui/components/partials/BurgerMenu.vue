<template>
  <div class="collapse" id="sidenav">
    <div class="m-3">
      <h4 class="text-center mb-">ООО "ПолифортМаш"</h4>

      <div class="flex jcsb wrap show">
        <nav>
          <ul class="flex flex-column gap-2">
            <MenuList />
          </ul>

          <div class="ms-auto">
            <Link class="btn btn-primary me-2" :href="route('login')">Войти</Link>
            <Link class="btn btn-primary" :href="route('register')">Регистрация</Link>
          </div>
        </nav>

        <i data-bs-toggle="collapse" data-bs-target="#sidenav" class="bi bi-x-square"></i>
      </div>
    </div>
  </div>
</template>

<script setup>
import MenuList from "./MenuList.vue";
import { Link } from "@inertiajs/vue3";
</script>

<style lang="scss">
#sidenav {
  position: fixed;
  top: 0;
  background: #fff;
  right: 0;
  left: 0;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  z-index: 11;

  ul {
    list-style: none;
  }

  i {
    font-size: 22px;
    align-self: flex-end;
  }
}
</style>
