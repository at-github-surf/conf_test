<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashonablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__outer">
            <div class="header__inner">
                <h1 class="header__sitetitle">FashonablyLate</h1>
                @yield('btn_mng_state')
            </div>
        </div>
    </header>
    
    <main>
        @yield('content')
    </main>
</body>

</html>