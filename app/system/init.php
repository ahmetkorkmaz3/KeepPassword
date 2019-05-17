<?php

require_once 'config.php';

session_start();

define('BASE_URL', rtrim(trim($config['site_url']), '/').'/');
define('BASE_DIR', dirname(dirname(__DIR__)).'/');

foreach ($config['helpers'] as $helper) {
  $helper_adres = BASE_DIR . 'app/helper/'.$helper.'.php';
  if(file_exists($helper_adres)){
    require_once $helper_adres;
  }
}

try{
  $db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'].';charset=utf8', $config['db']['user'], $config['db']['password']);
}catch(PDOException $e){
  die('<b>Veritabanı hatası:</b> '. $e);
}
