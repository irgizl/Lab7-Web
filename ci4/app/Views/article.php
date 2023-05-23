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
      <img src="seblak.jpg" title="Tshirt" alt="Tshirt" class="image-circle" width="150" style="text-align: center; border: 2px solid black; border-radius: 10px; margin-left: 130px; margin-bottom: 15px;">
      <h1>New Product</h1>
      <p>
      </p>
    </div>
  </section>
  <?= $this->include('template/footer'); ?>
</body>