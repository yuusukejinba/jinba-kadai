# アプリケーション名
お問い合わせフォーム

## 環境構築

- Dockerのビルドからマイグレーション、シーディングまでを記述する
・リポジトリの設定
1. コマンドラインにてgit clone git@github.com:coachtech-material/laravel-docker-template.git　
　　：コーチテックテンプレートをクローン
2.　mv laravel-docker-template jinba-kadai：リポジトリ名を変更
3.　GitHubから『New』でリモートリポジトリを作成
4.　git remote set-url origin：作成したリポジトリのurlを入力　
5.　git remote -v：ローカルリポジトリから紐付け先を変更
6.　git add .
7.　git commit -m "リモートリポジトリの変更"
8.　git push origin main：ローカルリポジトリに反映成功

・Docker の設定
1.　docker-compose up -d --build
2.　docker-compose exec php bash：PHPコンテナ内にログイン
3.　composer install：コンポーズインストール

・.env ファイルの作成
1.　cp .env.example .env：.env.exampleファイルをコピー
2.　DB_HOST=127.0.0.1→DB_HOST=mysql
3.　DB_DATABASE=laravel　→　DB_DATABASE=laravel_db
4.　DB_USERNAME=root　→　DB_USERNAME=laravel_user
5.　DB_PASSWORD=　→　DB_PASSWORD=laravel_pass　　に変更

・view ファイルの作成
1．resources/views　以下に
お問い合わせフォーム入力ページ　index.blade.php　
HTML書き込み　確認済み
お問い合わせフォーム確認ページ　confirm.blade.php　
サンクスページ　thanks.blade.php　　作成
HTML書き込み　確認済み

・css ファイルの作成
1．public/css以下に　リセット用のCSSファイル　sanitize.css
※　-webkit-appearance: button;の部分にエラーが出ていたため　→　--webkit-appearance: button;　
　　に2ヶ所変更
2．index.blade.php用のCSSファイル　index.css
3．confirm.blade.php用のCSSファイル　confirm.css
4・thanks.blade.php用のCSSファイル　thanks.css

・view ファイルを表示する処理の作成
1．php artisan make:controller ContactController　
　　にて　indexに表示するためコントローラー作成
2．ContactController に index表示アクションを作成
   ContactController に confirm表示アクションを作成


・ルーティングの設定
1. index設定
　　index画面表示、情報入力、確認画面→confirm　値送信、表示確認 
　　

2．confirm設定
　　confirm　修正→index画面表示遷移確認


3．
・contactsテーブル作成済み





## 使用技術(実行環境)
- 例) Laravel 8.x(言語やフレームワーク、バージョンなどが記載されていると良い)

## ER図
< - - - 作成したER図の画像 - - - >

## URL
- 例) 開発環境：http://localhost/