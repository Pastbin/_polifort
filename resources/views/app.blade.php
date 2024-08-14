<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title inertia>ПолифортМаш - Металлообработка</title>
  @routes
  @vite(["resources/js/app.ts", "resources/js/Pages/{$page["component"]}.vue"])
  @inertiaHead
</head>

<body class="font-sans antialiased">
  @include("partials.header")
  <nav class="header__nav jcc flex">
    <ul>
      <li><a href="{{ route("home") }}">Главная</a></li>
      <li><a href="{{ route("about") }}">О нас</a></li>
      <li><a href="{{ route("products") }}">Продукция</a></li>
      <li><a href="{{ route("contacts") }}">Контакты</a></li>
    </ul>
  </nav>
  @include("partials.burger")
  <main>@inertia</main>
  {{-- @include("partials.footer") --}}
</body>

</html>
