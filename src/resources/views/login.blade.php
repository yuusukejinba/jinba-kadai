<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
        FashionablyLate
        <a class="header__logo" href="/register">register</a>
    </div>
  </header>

  <main>
    <div class="login-form__content">
        <div class="login-form__heading">
          <h2>login</h2>
        </div>
      <form class="form" action="/admin" method="post" >
        @csrf
        <div class="form__group">
          <div class="form__label--item">メールアドレス</div>                
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="email" name="email" placeholder="例: test@example.com " value="{{ 'email' }}"/>
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
          </div>
        </div>

        <div class="form__group">
          <div class="form__label--item">パスワード</div>                
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="password" name="password" placeholder="例: coachtech1106 " value="{{ 'password' }}"/>
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
          </div>
        </div>
          <div class="form__button" >
            <button class="form__button-submit" type="submit">ログイン</button>
          </div>
      </form>
    </div>
  </main>
</body>