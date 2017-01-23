<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <title>@yield('title', 'Default') | Panel de administracion</title>
</head>
<body>
    @include('admin.template.partials.nav')
    <section class="container">
        @yield('content')
    </section>
    <script type="text/javascript" src="{{asset('plugins/jquery/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>