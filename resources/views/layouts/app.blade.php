<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('page_title') - JOBALLATION</title>
  <link rel="stylesheet" href="\css\app.css">
  <link rel="icon" href="\images\favicon.ico">
</head>
<body>
  <h1>JOBALLATION</h1>
  <div class="container main_container flex-grow-1">
    @yield('content')
  </div>
  
</body>
</html>