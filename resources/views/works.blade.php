@extends('layouts.app')

@section('title')
  <title>works | {{config('app.name')}}</title>
@endsection

@section('content')

  <main id="works">
    <h2>Works Page</h2>
    <p>このページでは、私がこれまでに作成してきたものを掲載しています。</p>

    <article>
      <section>
        <h3>PFC BALANCE</h3>
        <ul>
          <li>
            <a href="https://google.com" target="_blank" rel="noopener noreferrer">
              <img src="{{ asset("storage/footBallPlayer.svg") }}" alt="footBallPlayer">
              ここにURLを表示予定
            </a>
          </li>
          <li><p>機械学習を実装した栄養管理アプリです。<br>料理の判定制度はおもちゃなので遊び感覚で試して頂けると幸いです。</p> </li>
        </ul>
      </section>
    </article>
  </main>

@endsection