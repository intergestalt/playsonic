<?php snippet('header') ?>

  <?php //echo "Background:".$page->team()?>

  <h1 class="showcase-title">/ <?= $page->team() ?></h1>

  <?php echo $page->text()->kirbytext() ?>

  <?php if (!$page->event_link()->empty()) :?>
	<a href="<?= url("programm/" . $page->event_link()) ?>"><?= l::get('to_event_in_program') ?></a>
  <?php endif ?>

  <?php snippet('members-list', ['team' => $page]) ?>


<?php snippet('footer') ?>