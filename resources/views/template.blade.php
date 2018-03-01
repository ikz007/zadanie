<html lang="{{ app()->getLocale() }}">
    <head>
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Задание</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
<div class="container">
            @yield('content')
        </div>
    </div>
    </body>
</html>