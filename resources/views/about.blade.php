@extends('layouts.app')

@section('title')
  <title>about | {{config('app.name')}}</title>
@endsection

@section('content')

  <main id="about">
    <h2>About Page</h2>
    <p>I wii introduce myself. Coming soon in detail!</p>

    <article id="profile">
      <img src="{{ asset("storage/footBallPlayer.svg") }}" alt="footBallPlayer">

      <h2 class="name">@KokiKazaore</h2>
      <ul>
        <li>好き：コーヒー/カレー/運動</li>
        <li>趣味：おいしいご飯を食べること/筋トレ</li>
        <li>職業：大学院生</li>
      </ul>
    </article>
  </main>

@endsection