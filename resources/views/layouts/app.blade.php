<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devstagram - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between item-center">
            <h1 class="text-3xl font-black">DevStagram @yield('titulo')</h1>
            <nav class="flex gap-2">
                <a href="#" class="font-bold uppercase text-gray-600 text-sm">Login</a>
                <a href="#" class="font-bold uppercase text-gray-600 text-sm">Crear Cuenta</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10>">@yield('titulo')</h2>
        @yield('contenido')
    </main>

    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
        DevStagram - Todos los derechos reservados <?php echo date('Y'); ?>    </footer>

</div>
    <hr>
    @yield('contenido')
</body>
</html>