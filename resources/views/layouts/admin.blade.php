<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ '/images/logo-ico.png' }}" type="image/icon type" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{'/css/style.css' }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
      src="https://kit.fontawesome.com/d8e60bc0b5.js"
      crossorigin="anonymous"
    ></script>
    <title>@yield('title')</title>
</head>
<body class="app">
    @include('sweetalert::alert')
    @yield('content')
    <script type="text/javascript" src="{{ '/js/vendor.js' }}"></script>
    <script type="text/javascript" src="{{ '/js/bundle.js' }}"></script>
</body>
</html>
