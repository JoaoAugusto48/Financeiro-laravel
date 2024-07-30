<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@isset($title) {{ $title }} | @endisset Financeiro</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css">
</head>
<body>
    <x-menu/>

    <div class="container">
        @isset($title)
        <p class="h1">{{ $title }}</p>
        @endisset
        
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- @isset($success)
                <div class="alert alert-success">
                    {{ $success }}
                </div>
            @endisset
            @isset($error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endisset --}}

            {{ $slot }}
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
