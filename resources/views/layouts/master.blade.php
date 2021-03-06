<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset='utf-8'>

    {{-- CSS global to every page can be loaded here --}}
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link href='/css/styles.css' rel='stylesheet'>
</head>
<body>

<header>

</header>

<section id='main'>
    @yield('content')
</section>

<footer>
    &copy; Tara Waddell {{ date('Y') }} -
    <a href='http://github.com/susanBuck/foobooks'>View on Github</a>
</footer>

</body>
</html>
