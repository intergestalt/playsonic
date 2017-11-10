<?php snippet('header') ?>

  <?php echo "Background:".$page->team()?>

  <main class="main" role="main">

	<h3 class="showcase-title"><?= $page->title()->html() ?></h3>

	<?php echo $page->text()->kirbytext() ?>

	<?php snippet('members-list', ['team' => $page]) ?>

  </main>

<?php snippet('footer') ?>