@extends('layouts.app')

@section('title')
  <title>contact | {{config('app.name')}}</title>
@endsection

@section('content')

  <main id="contact">
    <h2>お問い合わせフォーム</h2>
    <p>当サイトに関する事や，お仕事のご依頼はこちらからご連絡ください。</p>

    <form id="contactForm" action="#" method="get">
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
          <textarea type="text" name="message" id="message" row="6" placeholder="こちらにお問い合わせ内容をご入力ください" required></textarea>
        </li>
      </ul>
      <button type="submit" id="submitBtn">送信</button>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="confirmModalLabel">お問い合わせ内容の確認</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- ここにお問い合わせ内容を表示する -->
            <p id="modalName"></p>
            <p id="modalEmail"></p>
            <p id="modalMessage"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            <button type="submit" id="confirmSubmitBtn" class="btn btn-primary">送信する</button>
          </div>
        </div>
      </div>
    </div>

  </main>

  <script>
    $(document).ready(function() {
      $('#submitBtn').click(function(event) {
          event.preventDefault(); // デフォルトの送信動作を停止

          // フォームデータを取得し、モーダル内に表示する処理をここに書く
          var name = $('#name').val();
          var email = $('#email').val();
          var message = $('#message').val();

          // モーダル内に表示
          $('#modalName').text(name);
          $('#modalEmail').text(email);
          $('#modalMessage').text(message);

          // モーダルを表示
          $('#confirmModal').modal('show');
      });

      $('#confirmSubmitBtn').click(function() {
        // フォームを送信
        $('#contactForm').submit();
      });

    });
  </script>

@endsection