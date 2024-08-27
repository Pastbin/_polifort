<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Регистрация</div>
          <div class="card-body">
            <form @submit.prevent="submit">
              <div class="form-group row mb-2">
                <label for="name" class="col-md-4 col-form-label text-md-right">Логин</label>
                <div class="col-md-6">
                  <input id="name" type="text" class="form-control" v-model="form.name" required autofocus />
                  <InputError :message="form.errors.name" />
                </div>
              </div>

              <div class="form-group row mb-2">
                <label for="email" class="col-md-4 col-form-label text-md-right">Электронная почта</label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control" v-model="form.email" required />
                  <InputError :message="form.errors.email" />
                </div>
              </div>

              <div class="form-group row mb-2">
                <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>
                <div class="col-md-6">
                  <input id="password" type="password" class="form-control" v-model="form.password" required />
                  <InputError :message="form.errors.password" />
                </div>
              </div>

              <div class="form-group row mb-2">
                <label for="password_confirmation" class="col-md-4 col-form-label text-md-right"
                  >Подтвердите пароль</label
                >
                <div class="col-md-6">
                  <input
                    id="password_confirmation"
                    type="password"
                    class="form-control"
                    v-model="form.password_confirmation"
                    required
                  />
                  <div class="form-text">{{ form.errors.password_confirmation }}</div>
                </div>
              </div>

              <div class="form-group row mb-2">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">Регистрация</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Head, useForm } from "@inertiajs/vue3";

const form = useForm({
  name: "",
  email: "",
  password: "",
  password_confirmation: "",
});

const submit = () => {
  if (form.password !== form.password_confirmation) {
    form.setError("password", "Пароли не совпадают");
    return;
  }
  form.post(route("register"), {
    onFinish: () => {
      form.reset("password", "password_confirmation");
    },
  });
};
</script>
