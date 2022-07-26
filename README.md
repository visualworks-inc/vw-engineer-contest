# VWエンジニアコンテスト

## 前提
* PHP 7.4以上がインストールされていること。
* Composer 2.3以上がインストールされていること。

## 環境構築手順
下記の手順で環境を構築してください。

1. プロジェクト配下（vw-engineer-contest/）で下記コマンドを実行する。
```
# 環境設定ファイル作成
cp .env.example .env
```
```
# パッケージをインストール
composer install
```
```
# データベースファイルを作成
touch database/database.sqlite
```
```
# マイグレーション実行
php artisan migrate:fresh --seed
```
下記のエラーが発生した場合、php.iniの`;extension=pdo_sqlite`を有効化する。
```
Illuminate\Database\QueryException

  could not find driver (SQL: PRAGMA foreign_keys = ON;)
```
```
# 開発サーバーの起動
php artisan serve
```
2. ブラウザで「 http://127.0.0.1:8000/ 」にアクセスする。
1. 「Generate app key」ボタンを押下して、画面を更新する。

## ツール
### Git Bash
Windows環境で上記コマンドが実行できます。

### TablePlus（https://tableplus.com/）
SQLiteのテーブルをGUIで確認できます。

変更