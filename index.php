<?php

require_once 'app/system/init.php';

$_url = get('url');
$_url = array_filter(explode('/', $_url));

if(!isset($_url[0])) {
  $_url[0] = 'index';
}

if($_url[0] == 'admin') {

} else {
  if(!file_exists('app/controller/' . $_url[0] . '.php')) {
    redirect();
  }
  require 'app/controller/' . $_url[0] . '.php';
}
