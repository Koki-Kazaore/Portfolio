<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Site Info -->
  @yield('title')

  <!-- CSS -->
  <!-- BootstrapCSSのインポート -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- リセットCSSのインポート -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@4.0.0/destyle.min.css">

  <link rel="stylesheet" href="/css/rsc-style.css">

  <!-- その他JSのインポート -->
  <!-- jquery -->
  <!-- <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" 
  integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script> -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <!-- cloudflare->popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- BootstrapJS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&display=swap" rel="stylesheet">

</head>
<body class="container">
  <header id="header">
    <h1><a href="/">{{config('app.name')}}</a></h1>
    <ul id="global-menu">
      <li><a href="{{route('about')}}">about</a></li>
      <li><a href="{{route('works')}}">works</a></li>
      <li><a href="{{route('contact')}}">contact</a></li>
    </ul>
  </header>

  @yield('content')

  <footer id="footer">
    <small>&copy; 2023 KokiKazaore</small>
  </footer>
</body>
</html>