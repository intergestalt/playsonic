<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
  
  <?= js('assets/js/main.js') ?>

  <?= css('assets/plugins/embed/css/embed.css') ?> <!-- note that this doesn't work on localhost with php -S -->
  <?php snippet('scss') ?>  


</head>

<body>

  <div id="pjax-container">

    <script>
      document.documentElement.setAttribute('data-page','<?= $site->activePage()->id() ?>');
      document.documentElement.setAttribute('data-bg','<?= $site->activePage()->team() ?>');
    </script>

    <?php snippet('menu') ?>

    <main id="main" class="main" role="main">
