<template>
  <header>
    <div class="container">
      <div class="header">
        <div class="header__top">
          <div class="header__logo flex jcsb w-100">
            <Link href="/"> ООО «ПолифортМаш» </Link>

            <div class="header_menu d-md-none">
              <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#sidenav">
                <i class="bi bi-list"></i>
              </button>
            </div>
          </div>

          <div class="header__info w-100">
            <div class="header__info__wrap">
              <div class="header__info__item mb-2">
                <i class="bi bi-geo-alt"></i>
                г. Самара, ул. Революционная, д. 70, литера п, офис 409
              </div>
              <div class="header__info__item">
                <i class="bi bi-clock"></i>
                Пн-Пт: 8:00-18:00
              </div>
            </div>

            <div class="header__info__wrap">
              <div class="header__info__item mb-2">
                <i class="bi bi-telephone"></i>
                <a class="d-block" href="tel:+78463425226">8 (846) 342-52-26</a>
              </div>
              <div class="header__info__item">
                <i class="bi bi-envelope"></i>
                <a class="d-block" href="mailto:polifort-pro@mail.ru ">polifort-pro@mail.ru</a>
              </div>
            </div>

            <div class="ms-auto">
              <div class="flex gap-2" v-if="$page.props.auth.user">
                <Link :href="route('profile.edit')" class="btn btn-primary">Профиль</Link>
                <button :href="route('logout')" @click="logout" class="btn btn-primary btn-danger">Выйти</button>
              </div>
              <div v-else class="flex gap-2">
                <Link class="btn btn-primary" :href="route('login')">Войти</Link>
                <Link class="btn btn-primary" :href="route('register')">Регистрация</Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
  methods: {
    logout() {
      this.$inertia.post(route("logout"));
    },
  },

  components: { Link },
};
</script>

<style lang="scss" scoped>
.header {
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;

  &__info {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    align-items: center;

    @media (max-width: 767px) {
      display: none;
    }

    &__wrap {
      @media (max-width: 768px) {
        width: 100%;
      }
    }

    a {
      text-wrap: nowrap;
    }

    &__item {
      display: flex;
      align-items: center;
      gap: 10px;
    }
  }

  &__logo {
    font-size: 1.5rem;
    font-weight: 700;
  }

  &__top {
    width: 100%;
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 40px;
  }
}
</style>
