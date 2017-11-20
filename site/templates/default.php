<?php snippet('header') ?>
  <h1><?= $page->headline()->isEmpty() ? $page->title()->html() : $page->headline() ?></h1>
  <div><?= $page->text()->kirbytext() ?></div>  
<?php snippet('footer') ?>