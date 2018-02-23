<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        
        <!-- Referencing Bootstrap CSS that is hosted locally -->
        {{ Html::style('css/bootstrap.min.css') }}
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

        <!-- Referencing Bootstrap JS that is hosted locally -->
        {{ Html::script('js/bootstrap.min.js') }}
    </body>
</html>