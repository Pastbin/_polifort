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

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
      m[i] = m[i] || function() {
        (m[i].a = m[i].a || []).push(arguments)
      };
      m[i].l = 1 * new Date();
      for (var j = 0; j < document.scripts.length; j++) {
        if (document.scripts[j].src === r) {
          return;
        }
      }
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(99879914, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true
    });
  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/99879914" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->
</head>

<body class="font-sans antialiased">
  @inertia
</body>

</html>