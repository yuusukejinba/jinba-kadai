<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>

<body>
  <main>
    <div class="thanks-form__content" >
      <div class="thanks-form__title">
        <h3>お問い合わせありがとうございました</h3>
      </div>
      <form class="form "action="/" method="post">
      @csrf
      <div class="form__button" >
        <button class="form__button-submit" type="submit" >HOME</button>
      </div>
    </form>
    </div>
  </main>
</body>