# VWエンジニアコンテスト

## 環境構築手順
下記の手順で環境を構築してください。

1. プロジェクト配下（vw-engineer-contest/）で下記コマンドを実行する。
```
$ cp .env.example .env
```
```
$ php artisan serv
```
1. ブラウザで「http://127.0.0.1:8000/」にアクセスする。

1. 「Generate app key」ボタンを押下して、画面を更新する。

1. プロジェクト配下（vw-engineer-contest/）で下記コマンドを実行する。
```
$ php artisan migrate:fresh --seed
```
