

<h3 class="showcase-title"><?= $team->title()->html() ?></h3>

<?php echo $team->text()->kirbytext() ?>

<?php snippet('members-list', ['team' => $team]) ?>