<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.includes.head')
    
    @yield('styles')
</head>
<body>
    <!-- Menu -->
    @include('layouts.includes.menuSuperior')

    <!-- Contenido -->
    <div id="app">
        @yield('content')
        <hr style="border-color: #73c5a44d">
    </div>
    <!-- Pie de Pagina -->
    <footer class="footer">
        <div class="col-md-12" align="center">
            <p>Copyright &copy; 2018 <b><a style="cursor: pointer">Andres Loja</a></b> All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    @include('layouts.includes.scripts')
    
    @yield('scripts')
</body>
</html>
