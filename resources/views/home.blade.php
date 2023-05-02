<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Site Info -->
  <title>Portfolio</title>

  <!-- CSS -->
  <!-- リセットCSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@4.0.0/destyle.min.css">
  <link rel="stylesheet" href="/css/rsc-style.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&display=swap" rel="stylesheet">

</head>
<body class="container">
  <header id="header">
    <h1>{{config('app.name')}}</h1>
    <ul id="global-menu">
      <li><a href="#">about</a></li>
      <li><a href="#">works</a></li>
      <li><a href="#">contact</a></li>
    </ul>
  </header>

  <img src="./img/home-image.jpg" alt="home-image.jpg">

  <main id="home">
    <h2>ポートフォリオへようこそ!</h2>
    <p>
      当サイトでは私のサービスをまとめています。<br>
      仕事のご依頼や当サイトに関するお問い合わせは<a href="#" class="contact-btn">contact</a>よりご連絡ください。
    </p>
  </main>

  <footer id="footer">
    <small>&copy; 2023 KokiKazaore</small>
  </footer>
</body>
</html>