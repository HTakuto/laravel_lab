<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>タイトル</title>
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('../css/html.css') }}"> リセットcss --}}
</head>
{{-- <body>
    <header>
    </header>
    {{-- <h1>見出し1です</h1>
    <h2 id="headline-second">見出し2です</h2>
    <h3>見出し3です</h3>
    <p class="first-message">段落1です。<b>太字です。</b></p>
    <p class="second-message">段落2です。<span class="middle-text">スパンです。</span>続く</p>
    <p class="thaad-message">段落3です。<b>太字です。</b></p>
    <br>改行です。
    <br>
    <a href="https://google.com">リンクです</a> --}}
    {{-- コメントアウトです。 --}}
    {{--
    <div class="parents">
        <div class="child">子要素1</div>
        <div class="child">子要素2</div>
        <div class="child">子要素3</div>
    </div>

    <ul class="lists">
        <li class="list">リスト1</li>
        <li class="list featured">リスト2</li>
        <li class="list">リスト3</li>
    </ul> --}}

   {{-- <div class="main">
        <div class="left-content"></div>
        <div class="center-content"></div>
        <div class="right-content"></div>
    </div>

    <footer>
    </footer>
</body> --}}
{{-- <body>
    <div class="side-bar">
    </div>
    <div class="main">
      <div class="main-header"></div>
      <div class="main-content">
        <div class="messages">
          <div class="message">
            <div class="message-name">田中太郎</div>
            <div class="message-body">メッセージだよ</div>
          </div>
          <div class="message">
            <div class="message-name">鈴木次郎</div>
            <div class="message-body">メッセージ確認しました</div>
          </div>
          <div class="message">
            <div class="message-name">鈴木次郎</div>
            <div class="message-body">田中太郎さん、メッセージありがとう。</div>
          </div>
        </div>
      </div>
    </div> --}}
    <body>
        {{-- <header></header>
        <div class="main">
          <div class="parent">
            <div class="child">
            </div>
          </div>
        </div>
        <footer></footer>
      </body> --}}

  <body>
    {{-- <header>
    </header>
    <div class="main">
      <div class="left-content">
        <img src="{{ asset('images/sample1.png') }}" alt="オムライス" class="left-image">
      </div>
      <div class="center-content">
      </div>
      <div class="right-content"></div>
    </div>
    <footer>
    </footer> --}}
    <div class="contact">
        <form action="" class="contact-form">
            <input type="text" placeholder="NAME" class="name-form">
            <textarea name="message" placeholder="MESSAGE" class="message-form"></textarea>
            <input type="submit" value="SEND" class="send">
        </form>
    </div>
  </body>
</html>
