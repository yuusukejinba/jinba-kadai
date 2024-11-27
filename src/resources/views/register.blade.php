<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
        FashionablyLate
        <a class="header__logo" href="/login">login</a>
    </div>
  </header>
  
  <main>
    <div class="register-form__content">
      <div class="register-form__heading">
        <h2>Register</h2>
      </div>
      <form class="form" action="/login" method="post" >
        @csrf
      <div class="form__group">
        <div class="form__label--item">お名前            
        </div>                
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="name" placeholder="例: 山田 太郎 " />
        </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
      </div>
      <div class="form__group">
        <div class="form__label--item">メールアドレス            
        </div>                
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="例: test@example.com " />
        </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
      </div>
      <div class="form__group">
        <div class="form__label--item">パスワード            
        </div>                
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password" placeholder="例: coachtech1106 " />
        </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
      </div>
      <div>
          <button class="form__button-submit" type="submit">登録</button>
        </div>



      </form>
    </div>
  </main>
</body>