<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="description" content="{{ $description ?? '' }}">
    <title>{{ $title ?? 'Math Spark' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <x-ui.navbar />
    
    <div class="min-h-[70vh]">
        {{ $slot }}
    </div>
</body>

</html>
