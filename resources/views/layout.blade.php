<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />   
</head>
<body>
    <div class="container">
    @yield('content')
    </div>
    <script src="{{asset('js/app.js')}}" type="text/js"></script>
</body>
</html>