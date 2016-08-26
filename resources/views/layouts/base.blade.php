<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/molinstec.ico') }}">

    <!-- Stylesheets -->
    {!! Html::style('assets/css/style.css') !!}
    {!! Html::style('assets/scss/style.scss') !!}

    <!-- Scripts -->
    {!! Html::script('assets/js/jquery-1.11.3.min.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div class="container-fluid header">
        @include('includes.header')
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
