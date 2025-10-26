# check-test-2nd
アプリケーション名：もぎたて

環境構築
　Dockerの設定
　　ディレクトリの作成
　　Docker-compose.yml の作成
　　Nginx の設定
　　PHP の設定
　　MySQL の設定
　　docker compose up -d --build のコマンドでビルド（APP_KEYの自動作成）
　Laravelの設定
　　PHPコンテナにログイン（docker compose exec php bash）
　　Laravelのプロジェクトの作成（composer create-project "laravel/laravel=8.*" . --prefer-dist）
　　時間設定の修正
　　.envファイルの修正
　　viewファイルの作成
　　cssファイルの作成
　　マイグレーション（php artisan migrate）の実行
　　シーディング（php artisan db:seed）の実行
　　バリデーションの設定（フォームリクエストの作成）
　　
使用技術（実行環境）
　docker-compose.yml 3.8
　PHP 8.2
　Laravel 8
　MYSQL 8.0.26
　Composer 2.8.12

URL
　開発環境: http://localhost/
　phpMyAdmin: http://localhost/8080/

ER図
