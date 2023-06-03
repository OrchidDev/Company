<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        @include('include.meta')
        @include('include.style')
    </head>
    <body>
        <main class="container">
            {{ $slot }}
        </main>
        @include('include.script')
    </body>
</html>
