<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <div class="container">
            <a href=""><img src="{{ asset('images/devsbook_logo.png') }}" /></a>
        </div>
    </header>
    <section class="container main">
        @yield('content')
    </section>
    @if ($errors->any())

        <div class="m-auto bg-red-500 text-white border border-black mt-4 p-4 w-1/2">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>

</html>
