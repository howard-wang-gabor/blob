<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show
            
        <div class="container">
            @yield('content')
            <table border="1">
    <tr>
        <td><strong>id</strong></td>
        <td><strong>title</strong></td>
        <td><strong>content</strong></td>
        <td><strong>tag</strong></td>
    </tr>
    <tr>
        <td>{{$id}}</td>
        <td>{{$title}}</td>
        <td>{{$content}}</td>
        <td>{{$tag}}</td>
    </tr>
</table>
        </div>
    </body>
</html>
