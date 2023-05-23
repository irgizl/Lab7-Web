<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
  <div id="container">
    <header>
      <h1>Layout Sederhana</h1>
    </header>
    <div class="topnav">
      <a href="<?= base_url('/'); ?>" class="active">Home</a>
      <a href="<?= base_url('/article'); ?>">Article</a>
      <a href="<?= base_url('/about'); ?>">About</a>
      <a href="<?= base_url('/contact'); ?>">Contact</a>
    </div>
    <section id="hero">
      <h2>Hello JOY!</h2>
      <p>
        Tampil dengan gaya kekinian dan Menarik? Salah satu clothing brand produsen lokal terbaik yaitu Cosmic Clothes akan memenuhi kebutuhan fashion kamu setiap harinya.
        Cosmic Clothes menghadirkan berbagai macam produk fashion seperti sweater, jaket, hoodie, kaos dengan beragam desain, ikat pinggang, topi kupluk, boxer, tas,
        polo shirt, dompet, sandal dan masih banyak lagi produk fashion lainnya joy!.
      </p>
      <button>Learn More</button>
    </section>
    <section class="wrapper">
      <div class="main">