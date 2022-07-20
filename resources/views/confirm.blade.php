<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VWエンジニアコンテスト</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
    </style>
</head>

<body>
    <h2>応募内容確認</h2>
    {{ $name }}
    {{ $reason }}
    {{ $language }}
    <form action="/contest/store" method="POST">
        <input id="name" name="name" value="{{ $name }}" hidden>
        <textarea id="reason" name="reason" hidden>{{ $reason }}</textarea>
        <input id="language" name="language" value="{{ $language }}" hidden>
        {{ csrf_field() }}
        <button type="button" onclick="location.href='/contest'">戻る</button>
        <button type="submit">送信する</button>
    </form>
</body>

</html>