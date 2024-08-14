<div class="collapse" id="sidenav">

  <div class="m-3">
    <h4 class="text-center mb-">ООО "ПолифортМаш"</h4>

    <div class="flex jcsb">
      <nav>
        @vite("resources/scss/burger.scss")
        <ul class="sidenav-menu flex flex-column gap-2">
          <li><a href="{{ route("home") }}">Главная</a></li>
          <li><a href="{{ route("about") }}">О нас</a></li>
          <li><a href="{{ route("products") }}">Продукция</a></li>
          <li><a href="{{ route("contacts") }}">Контакты</a></li>
        </ul>
      </nav>

      <i data-bs-toggle="collapse" data-bs-target="#sidenav" class="bi bi-x-square"></i>
    </div>
  </div>
</div>
