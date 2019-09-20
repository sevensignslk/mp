<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MP - @yield('title')</title>
		
</head>
<body>

        @include('layouts.header')

        <main class="container">

            @yield('content')

        </main>


        @include('layouts.footer')

       
    </body>
</html>
