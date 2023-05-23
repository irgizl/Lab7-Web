<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $title; ?></title>
</head>

<body>
  <?= $this->include('template/header'); ?>
  <section id="about">
    <div class="row">
      <img src="cosmic2.jpg" title="pakaian" alt="pakaian" class="image-circle" width="300" style="text-align: center; border: 2px solid white; border-radius: 30px; margin-left: 60px; margin-bottom: 15px;">
      <h1>COSMIC</h1>
      <p>Tampil dengan gaya kekinian dan Menarik? Salah satu clothing brand produsen lokal terbaik yaitu Cosmic Clothes akan memenuhi kebutuhan fashion kamu setiap harinya.
            Cosmic Clothes menghadirkan berbagai macam produk fashion seperti sweater, jaket, hoodie, kaos dengan beragam desain, ikat pinggang, topi kupluk, boxer, tas,
            polo shirt, dompet, sandal dan masih banyak lagi produk fashion lainnya joy!.
    </div>
  </section>
  <?= $this->include('template/footer'); ?>
</body>