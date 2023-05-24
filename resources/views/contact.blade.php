@extends('layouts.app')

@section('title')
  <title>contact | {{config('app.name')}}</title>
@endsection

@section('content')

  <main id="contact">
    <h2>お問い合わせフォーム</h2>
    <p>当サイトに関する事や，お仕事のご依頼はこちらからご連絡ください。</p>

    <form action="#" method="post">
      @csrf
      <ul>
        <li>
          <label for="name">お名前</label>
          <input type="text" name="name" id="name" placeholder="Koki Kazaore" required>
        </li>
        <li>
          <label for="email">メール</label>
          <input type="email" name="email" id="email" placeholder="example@mail.com" required>
        </li>
        <li>
          <label for="text">内容</label>
          <textarea type="text" name="text" id="text" row="6" placeholder="こちらにお問い合わせ内容をご入力ください" required></textarea>
        </li>
      </ul>
      <button type="submit">送信</button>
    </form>
  </main>

@endsection