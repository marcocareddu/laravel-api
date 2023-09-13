<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Test nuovo messaggio</h1>
    <h3>Inviato da: {{ $sender }}</h3>
    <h3>Oggetto: {{ $subject }}</h3>
    <p>Testo: {{ $content }}</p>
</body>

</html>
