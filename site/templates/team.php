<?php snippet('header') ?>

  <?php echo "Background:".$page->team()?>

  <h1 class="showcase-title">/ <?= $page->team() ?></h1>

  <?php echo $page->text()->kirbytext() ?>

  <?php snippet('members-list', ['team' => $page]) ?>

<?php snippet('footer') ?>