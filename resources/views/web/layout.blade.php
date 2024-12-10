<!DOCTYPE html>
<html lang="en">
<head>
    @include('web.head')
    @yield('style')
</head>
<body>
    @include('web.header')

    <main>
        @yield('content')
    </main>
   
    @include('web.login')
    @include('web.footer')
    @include('web.scripts')
</body>
</html>