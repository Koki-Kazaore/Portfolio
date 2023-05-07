@extends('layouts.app')

@section('title')
  <title>about | {{config('app.name')}}</title>
@endsection

@section('content')

  <img src="{{ asset("storage/home-image.jpg") }}" alt="home-image.jpg">

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

@endsection