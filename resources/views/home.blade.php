@extends('layouts.app')

@section('title')
  <title>{{config('app.name')}}</title>
@endsection

@section('content')

  <img src="{{ asset("storage/home-image.jpg") }}" alt="home-image.jpg">

  <main id="home">
    <h2>ポートフォリオへようこそ!</h2>
    <p>
      当サイトでは私のサービスをまとめています。<br>
      仕事のご依頼や当サイトに関するお問い合わせは<a href="/contact" class="contact-btn">contact</a>よりご連絡ください。
    </p>
  </main>

@endsection
