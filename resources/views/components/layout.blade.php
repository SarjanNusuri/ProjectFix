
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Website Penjualan</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.5/dist/cdn.min.js" defer></script>

    </head>
    <body class="flex flex-col min-h-screen">
        @stack('sidebar')
        @stack('navbar')
        {{ $slot }}
        @stack('footer')
    </body>
</html>
