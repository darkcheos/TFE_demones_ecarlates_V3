<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="icon" href="{{ asset('/storage/icons/demones.jpg') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body class="bg-dark">
    <div class="d-flex flex-column min-vh-100 bg-image" style="background-image: url('/storage/background/cl2.jpg');">
        @include('layouts.navigation')

        <div class="container-lg">
            <!-- Page Heading -->
            @if (isset($header))
                <header class="text-danger">
                    <h2 class="max-w-7xl mx-auto py-4 px-4 ">
                        {{ $header }}
                    </h2>
                </header>
            @endif

            <!-- Page Content -->
            <main class="pb-5">
                {{ $slot }}
            </main>
        </div>
        <footer class="mt-auto">
            @include('layouts.footer')
        </footer>
    </div>
</body>

</html>
