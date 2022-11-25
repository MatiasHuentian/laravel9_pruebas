<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    {{-- Tailwind scrips --}}
    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js' , 'resources/css/tailwind_v1.css'])

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @php
        $color = 'red';
        $alert = 'alert';
    @endphp
</head>

<body>
    <div class="container mx-auto">

        <x-alert :color="$color" class="mb-4">
            <x-slot name="title">
                Título 1
            </x-slot>
            Probando ando Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio beatae labore eius ut omnis
            aliquam ad assumenda error dolor repudiandae modi sapiente fuga, officia sunt nihil quos animi totam odit.
        </x-alert>
        <x-alert2 color="blue" class="mb-4">
            <x-slot name="title">
                Probando el título
            </x-slot>
            Priebando alert2 v1
        </x-alert2>


        <x-dynamic-component :component="$alert" >
            <x-slot name="title">
                Probando el título
            </x-slot>
            Priebando alert2 v1
        </x-dynamic-component>
        {{-- <x-alert>
            <x-slot name="title">
                Título 2
            </x-slot>
            Test dos
        </x-alert>
        <x-alert :color="$color" class="mb-4">
            <x-slot name="title">
                Título 1
            </x-slot>
            Probando ando Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio beatae labore eius ut omnis
            aliquam ad assumenda error dolor repudiandae modi sapiente fuga, officia sunt nihil quos animi totam odit.
        </x-alert> --}}

        {{-- <x-alert2>
            <x-slot name="title">
                Probando el título version 22222222222222
            </x-slot>
            Priebando alert2 v2
        </x-alert2> --}}
    </div>
</body>

</html>
