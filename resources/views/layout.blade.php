<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Meta -->
    <meta name="description" content="@yield('meta_description')" />
    <meta name="keywords" content="@yield('meta_keywords')" />
    <meta name="author" content="@yield('author')">
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="3 days" />



    <meta property="og:image" content="@yield('image')" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('meta_description')" />
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    @include('css')

</head>
<body>

@yield('content')

@include('footer')

    @include('scripts')

</body>
</html>