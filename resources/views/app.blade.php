<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta title="ПолифортМаш - Металлообработка в Самаре">
  <meta name="keywords"
    content="металлообработка, заказы на металлообработку, металлообработка чпу, завод металлообработки, машиностроение и металлообработка, цех металлообработки">
  <title inertia>ПолифортМаш - Металлообработка</title>
  @routes
  @vite(["resources/js/app.ts", "resources/js/Pages/{$page["component"]}.vue"])
  @inertiaHead
</head>

<body class="font-sans antialiased">
  @inertia
</body>

</html>