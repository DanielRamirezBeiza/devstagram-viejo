<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devstagram - @yield('titulo')</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="{{asset('js/app.js')}}" defer></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between item-center">
            <h1 class="text-3xl font-black">BienEstarValpo @yield('titulo')</h1>
                @auth
                    <nav class="flex gap-2">
                        <a href="{{route('posts.index')}}" class="font-bold uppercase text-gray-600 text-sm">Mi sesión: <span class="font-normal">{{auth()->user()->username}}</span></a>
                       <form method="post" action="{{route('logout')}}">
                            @csrf
                            <button type="submit" href="{{route('logout')}}" class="font-bold uppercase text-gray-600 text-sm">Cerrar sesión</button> 
                        </form>
                    </nav>
                @endauth
                
                @guest
                    <nav class="flex gap-2">
                        <a href="{{route('login')}}" class="font-bold uppercase text-gray-600 text-sm">Login</a>
                        <a href="{{route('register')}}" class="font-bold uppercase text-gray-600 text-sm">Crear Cuenta</a>
                    </nav>
                @endguest
          
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10>">@yield('titulo')</h2>
        @yield('contenido')
    </main>

    <footer class="text-center p-5 text-gray-500 font-bold uppercase mt-10">
        BienEstarValpo - I. Municipalidad de Valparaíso <?php echo date('Y'); ?>    </footer>

</div>
    <hr>
    
</body>
</html>


