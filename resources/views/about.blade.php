<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Site Info -->
  <title>about | {{config('app.name')}}</title>

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

  <main id="about">
    <h2>About Page</h2>
    <p>当サイトでは，私がLaravelを勉強していく中で簡単なポートフォリオを作成したいと思い作成しました．</p>

    <article id="profile">
      <img src="/img/profile.svg" alt="profile.svg">

      <h2 class="name">@KokiKazaore</h2>
      <ul>
        <li>好き：コーヒー/カレー/運動</li>
        <li>趣味：おいしいご飯を食べること/筋トレ</li>
        <li>職業：大学院生</li>
      </ul>
    </article>
  </main>

  <footer id="footer">
    <small>&copy; 2023 KokiKazaore</small>
  </footer>
</body>
</html>