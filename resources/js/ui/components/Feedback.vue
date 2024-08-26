<template>
  <div class="feedback container">
    <form
      autocomplete="on"
      ref="feedbackForm"
      @submit.prevent="checkCaptcha"
      method="POST"
      action="/feedback"
      class="flex flex-column gap-2"
    >
      <input type="hidden" :value="csrfToken" name="_token" />
      <label class="form-label">
        Имя
        <input name="name" placeholder="Ваше имя" class="form-control" />
      </label>
      <label class="form-label">
        Почта
        <input name="email" type="email" placeholder="Ваша почта" class="form-control" />
      </label>
      <label class="form-label">
        Сообщение
        <textarea name="message" placeholder="Напишите сообщение" class="form-control" rows="4"></textarea>
      </label>

      <label class="form-label">
        Сколько будет {{ num1 }} + {{ num2 }}?
        <input type="text" v-model="userAnswer" class="form-control" placeholder="Введите ответ" />
        <div class="text-danger">{{ errorMessage || "&nbsp;" }}</div>
      </label>

      <button class="btn btn-primary">Отправить</button>

      <div v-if="isSent" class="modal fade show" style="display: block" tabindex="-1" aria-modal="true" role="dialog">
        <div class="modal-dialog shadow-lg bg-white rounded" style="background-color: rgba(0, 0, 0, 0.5)">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Сообщение отправлено</h5>
              <button type="button" class="btn-close" @click="isSent = false" aria-label="Close"></button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min) + min);
}

export default {
  name: "Feedback",
  data() {
    return {
      num1: getRandomInt(10, 20),
      num2: getRandomInt(10, 20),
      userAnswer: "",
      csrfToken: document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
      errorMessage: "",
      isSent: false,
    };
  },
  methods: {
    checkCaptcha() {
      if (parseInt(this.userAnswer) === this.num1 + this.num2) {
        this.errorMessage = "";
        this.$refs.feedbackForm.submit();
        this.isSent = true;
        // fetch("https://polifortmash.ru/feedback", {
        //   method: "POST",
        //   body: new FormData(this.$refs.feedbackForm),
        // })
        //   .then((response) => response.json())
        //   .then((data) => {
        //     console.log("data", data);

        //     if (data.ok) this.isSent = true;
        //   })
        //   .catch((error) => {
        //     console.error("Error:", error);
        //   });
      } else {
        this.errorMessage = "Неправильный ответ. Попробуйте снова.";
        this.num1 = getRandomInt(10, 20);
        this.num2 = getRandomInt(10, 20);
        this.userAnswer = "";
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.feedback {
  max-width: 500px;
}
</style>
