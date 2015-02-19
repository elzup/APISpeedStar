<?php
// ライブラリの読み込み
require __DIR__.'/../vendor/autoload.php';
// 設定ファイルの読み込み
require __DIR__.'/../config.php';

ini_set('display_errors', '1');
error_reporting(E_ALL);
var_dump(getenv('db_key'));

// Slimの初期化
$app = new \Slim\Slim([
]);

// Slimにルート登録
\Route::registration($app);

// 実行
$app->run();
