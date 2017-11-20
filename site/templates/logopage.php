<?php snippet('header') ?>
  <h1><?= $page->headline()->isEmpty() ? $page->title()->html() : $page->headline() ?></h1>
  <div><?= $page->text()->kirbytext() ?></div>

  <div class="partner-logo-container">  	
  	<img src="<?= $kirby->urls()->assets() ?>/images/partner-logos.png" alt="partner logos" usemap="partner-logos"/>	
  	
  	<map name="partner-logos">
  		<area shape="rect" coords="0,0,445,220" href="https://www.alteoper.de/" alt="Alte Oper Frankfurt">
  		<area shape="rect" coords="500,0,1200,220" href="http://ensemble-modern.com/" alt="Ensemble Modern">
  		<area shape="rect" coords="0,245,445,697" href="http://hfmdk-frankfurt.info" alt="HfMDK Frankfurt am Main">
  		<area shape="rect" coords="500,245,1200,697" href="https://www.deutsche-bank-stiftung.de/" alt="Deutsche Bank Stiftung">
	</map>

  </div>

  <div class="legal">
  	<a href="/<?= $site->language()?>/impressum"><?= $site->page('impressum') ? $site->page('impressum')->title() : "" ?></a>
  	<a href="/<?= $site->language()?>/datenschutz"><?= $site->page('datenschutz') ? $site->page('datenschutz')->title() : "" ?></a>
  </div>
	
  
<?php snippet('footer') ?>