<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
        FashionablyLate
    </div>
  </header>

  <main>
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>confirm</h2>
      </div>
      <form class="form" action="/contacts" method="post">
      @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
                <td class="confirm-table__text">                  
                  <input type="text" name="first-name , last-name" value="{{ $contact['first-name'] }}  {{ $contact['last-name' ]}}"/>                                    
                </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
                <td class="confirm-table__text">
                  <input type="text" name="gender" value="{{ $contact['gender'] }}" />
                </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
                <td class="confirm-table__text">
                  <input type="email" name="email" value="{{ $contact['email'] }}" />
                </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
                <td class="confirm-table__text">
                  <input type="tel" name="tel" value="{{ $contact['tel'] }}" />
                </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
                <td class="confirm-table__text">
                  <input type="text" name="address" value="{{ $contact['address'] }}" />
                </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
                <td class="confirm-table__text">
                  <input type="text" name="building" value="{{ $contact['building'] }}" />
                </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせの種類</th>
                <td class="confirm-table__text">
                  <input type="text" name="" value="" />
                </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
                <td class="confirm-table__text">
                  <input type="text" name="detail" value="{{ $contact['detail'] }}" />
                </td>
            </tr>
          </table>
        </div>
        <div class="form__button" >
          <button class="form__button-submit" type="submit" >送信</button>
          <a href="/">修正</a>>  
        </div>
      </form>
    </div>
  </main>
</body>

