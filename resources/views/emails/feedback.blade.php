<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обратная связь</title>
</head>

<body>
    <h1>Новое сообщение с сайта</h1>
    <p><strong>Имя:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Сообщение:</strong> {{ $details['message'] }}</p>
</body>

</html>