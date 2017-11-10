<?php snippet('header') ?>

  <?php echo "Background:".$page->team()?>

  <h3 class="showcase-title"><?= $page->title()->html() ?></h3>

  <?php echo $page->text()->kirbytext() ?>

  <?php snippet('members-list', ['team' => $page]) ?>

<?php snippet('footer') ?>