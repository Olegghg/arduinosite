<?php
//Запуск сессий;
session_start();
//если пользователь не авторизован

if (!(isset($_SESSION['Name'])))
{
//идем на страницу авторизации
header("Location: /auth/auth.php");
exit;
};
//Выводим саму страницу для авторизованных пользователей
$nm =$_SESSION['Name'] ;?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title?></title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body onload="startTime()">
<header class="navbar navbar-light sticky-top bg-white flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-5" href="#" style="background-color:#d8bfd8;">Manage power socket</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php include "elements/date.php" ?>
  <div class="navbar-nav" style="background-color: #e3f2fd;">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="auth/destr.php">Sign out</a>
    </div>
  </div>
</header>
<main class="d-flex flex-nowrap">
  <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width:32; <?php echo $style ?>">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"></svg>
      <span class="fs-4">Menu</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li <?php echo $home ?>>
        <a href="/osnovnai.php" <?php echo $home2 ?> aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"></svg>
          Home
        </a>
      </li>
      <li <?php echo $ps1 ?>>
        <a href="/ps1.php" <?php echo $ps12 ?>>
          <svg class="bi pe-none me-2" width="16" height="16"></svg>
          Ps1
        </a>
      </li>
      <li <?php echo $ps2 ?>>
        <a href="/ps2.php" <?php echo $ps22 ?>>
          <svg class="bi pe-none me-2" width="16" height="16"></svg>
          Ps2
        </a>
      </li>
      <li <?php echo $ps3 ?>>
        <a href="/ps3.php" <?php echo $ps32 ?>>
          <svg class="bi pe-none me-2" width="16" height="16"></svg>
          Ps3
        </a>
      </li>
      <li <?php echo $ps4 ?>>
        <a href="/ps4.php" <?php echo $ps42 ?>>
          <svg class="bi pe-none me-2" width="16" height="16"></svg>
          Ps4
        </a>
      </li>
      <hr>
      <span class="fs-4">User:</span>
      <hr>
      <h3><?php echo $nm ?></h3>
    </ul>
    </div>
  </div>
