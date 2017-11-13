<?php snippet('header') ?>
  <h1><?= $page->headline()->isEmpty() ? $page->title()->html() : $page->headline() ?></h1>
  <div><?= $page->text()->kirbytext() ?></div>

  <?php if(!$page->logos()->isEmpty()) : ?>
	<div class="partner-logo-container"><?= $page->logos()->kirbytext() ?></div>
  <?php endif ?>
  
<?php snippet('footer') ?>