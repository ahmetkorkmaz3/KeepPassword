<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="<?php echo assets_url('vendor/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo assets_url('vendor/fontawesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo assets_url('css/main.css') ?>">

    <title>
      <?php
      if($title) {
        echo $title;
      } else {
        echo "KeepPassword";
      }
      ?>
    </title>
  </head>
  <body>

      <div class="header"><!-- Header -->
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <img src="assets/images/keep-password.svg" class="d-inline-block align-top" alt="Keep Password">
          </a>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>">Anasayfa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Notlar</a>
              </li>
            </ul>
          </div>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </nav>
      </div><!-- Header Son -->
