<?php snippet('header') ?>

  <h1><?php echo $page->title()->html() ?></h1>
  <div><?php echo $page->text()->html() ?></div>
  
  <?php snippet('event-list', ['events' => $page->children()->visible()]) ?>

<?php snippet('footer') ?>