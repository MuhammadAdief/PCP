<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PCP TELKOM</title>
    <link rel="icon" href="{{ asset('build\assets\24364255.png') }}" alt="logo telkom">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Inline CSS -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
            color: #1a202c; /* Tailwind's text-gray-900 */
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .background {
            background-image: url('{{ asset('build/assets/bgblur.jpeg') }}');
            background-size: cover;
            background-position: center;
        }

        .min-h-screen {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 1.5rem;
            padding-bottom: 0;
            background-color: #f7fafc;
        }

        .container {
            width: 100%;
            max-width: 28rem; /* Tailwind's sm:max-w-md */
            margin-top: 1.5rem;
            padding: 1.5rem;
            background-color: rgba(255, 255, 255, 0.4); /* Warna putih dengan opacity 0.8 */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border-radius: 0.5rem; /* Tailwind's sm:rounded-lg */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .icon {
            width: 5rem; /* Tailwind's w-20 */
            height: 5rem; /* Tailwind's h-20 */
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="min-h-screen background">
        <div class="container">
            <div>
                <img src="{{ asset('build/assets/24364255.png') }}" alt="Your Icon" class="icon" style="width: 60px; height: 60px;">
            </div>
            <div>
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
