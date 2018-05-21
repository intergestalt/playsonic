<?php snippet('header') ?>

  <h1><?php echo $page->title()->html() ?></h1>
  <div><?php echo $page->text()->kirbytext() ?></div>
  
  <?php snippet('event-list', ['events' => $page->children()->visible()]) ?>

<?php snippet('footer') ?>