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
    <h2>VWエンジニアコンテスト応募</h2>
    <form action="/contest/confirm" method="POST">
        <label for="name">名前:</label>
        <input id="name" name="name" value="{{ old('name') }}" required onblur="test();">
        <br>
        @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
            @endforeach
        </div>
        @endif
        <label for="reason">志望動機:</label>
        <textarea id="reason" name="reason" required>{{ old('reason') }}</textarea>
        <br>
        <label for="language">プログラミング言語:</label>
        <input id="language" name="language" value="{{ old('language') }}" required>
        {{ csrf_field() }}
        <br>
        <button type="submit">確認</button>
    </form>
    <script>
        $('#language').autocomplete({
            source: function(req, resp) {
                $.ajax({
                    url: '/api/get_languages',
                    type: 'POST',
                    cache: false,
                    dataType: 'json',
                    data: {
                        language: req.term
                    },
                    success: function(o) {
                        resp(o);
                    },
                    error: function(xhr, ts, err) {
                        resp(['']);
                    }
                });
            },
        });
    </script>
</body>

</html>