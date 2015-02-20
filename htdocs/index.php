<?php
// ライブラリの読み込み
require __DIR__.'/../vendor/autoload.php';
// 設定ファイルの読み込み
require __DIR__.'/../config.php';

require_once __DIR__.'/../models/Artist.php';

if (file_exists('../.env.php')) {
    require_once('../.env.php');
}

// TODO: delete
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Slimの初期化
$app = new \Slim\Slim();

// Slimにルート登録
\Route::registration($app);

// 実行
$app->run();

$connections = array(
  'master' => getenv('DATABASE_URL'),
);

ActiveRecord\Config::initialize(function($cfg) use ($connections) {
  $cfg->set_connections($connections);

  # default connection is now production
  $cfg->set_default_connection('master');
});

