<div class="collapse" id="sidenav">
  <div class="m-3">
    <h4 class="text-center mb-">ООО "ПолифортМаш"</h4>

    <div class="flex jcsb wrap show">
      <nav>
        <ul class="flex flex-column gap-2">
          <li><a href="/">Главная</a></li>
          <li><a href="{{ route("about") }}">О нас</a></li>
          <li><a href="{{ route("products") }}">Продукция</a></li>
          <li><a href="{{ route("contacts") }}">Контакты</a></li>
        </ul>
      </nav>

      <div class="ms-auto">
        <a class="btn btn-primary" href="{{ route('login') }}">Войти</a>
        <a class="btn btn-primary" href="{{ route('register') }}">Регистрация</a>
      </div>

      <i data-bs-toggle="collapse" data-bs-target="#sidenav" class="bi bi-x-square"></i>
    </div>
  </div>
</div>