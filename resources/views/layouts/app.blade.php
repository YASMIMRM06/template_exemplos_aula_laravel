<!-- resouces/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        ,<title>@yield('title', 'meu site')</title>
    
    </head>
    <body>
        <div class=" Container">
            <h1>Meu Sistema</h1>
            @yield('content')
        </div>
    </body>
</html>