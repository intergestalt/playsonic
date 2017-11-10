<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <?= js('assets/js/main.js') ?>

  <?= css('assets/plugins/embed/css/embed.css') ?>
  <?php snippet('scss') ?>  

</head>

<body>

  <?php snippet('menu') ?>
  
