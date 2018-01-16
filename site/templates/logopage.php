<?php snippet('header') ?>
  <h1><?= $page->headline()->isEmpty() ? $page->title()->html() : $page->headline() ?></h1>
  <div><?= $page->text()->kirbytext() ?></div>

  <?php snippet('partner-logos') ?>

  <div class="legal">
  	<a href="/<?= $site->language()?>/impressum"><?= $site->page('impressum') ? $site->page('impressum')->title() : "" ?></a>
  	<a href="/<?= $site->language()?>/datenschutz"><?= $site->page('datenschutz') ? $site->page('datenschutz')->title() : "" ?></a>
  </div>
	
  
<?php snippet('footer') ?>