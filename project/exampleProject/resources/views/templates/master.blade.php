<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        {{-- loads and renders the footer.blade.php  --}}
        @include('templates.header')

        {{-- this is where the page specific content will be filled into --}}
        @yield('content')

        {{-- loads and renders the footer.blade.php  --}}
        @include('templates.footer')
    </body>
</html>

