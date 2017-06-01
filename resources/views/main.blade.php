<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Real Toledo XIII</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style('css/bootstrap.min.css') !!}

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {!! Html::style('css/ie10-viewport-bug-workaround.css') !!}

    <!-- Custom styles for this template -->
    {!! Html::style('css/jumbotron-narrow.css') !!}


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active">{!! Html::link('/', 'Inicio') !!}</li>
                <li role="presentation">{!! Html::link('register', 'Registro') !!}</li>
                <li role="presentation">{!! Html::link('login', 'Iniciar') !!}</li>
            </ul>
        </nav>
        <h3 class="text-muted">Real Toledo XIII</h3>
    </div>

    @yield('content')



    <footer class="footer">
        <p>Real Toledo Sección 13</p>
    </footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{!! Html::script('js/ie10-viewport-bug-workaround.js') !!}
</body>
</html>
