
<div class="event-select day-select">
	<span data-value="all" class="selected"><?= l::get('all_days') ?></span>
	<span data-value="friday"><?= l::get('friday') ?></span>
	<span data-value="saturday"><?= l::get('saturday') ?></span>
	<span data-value="sunday"><?= l::get('sunday') ?></span>
</div>

<div class="event-select category-select">
	<span data-value="all" class="selected"><?= l::get('all_categories') ?></span>
	<span data-value="extended"><?= l::get('extended') ?></span>
	<span data-value="focus"><?= l::get('focus') ?></span>
	<span data-value="exhibition"><?= l::get('exhibition') ?></span>
</div>


<ul class="event-list">

  <?php foreach($events as $event): ?>

    <li class="event <?php if(!$event->times_fri()->empty()) { echo "friday"; } ?> <?php if(!$event->times_sat()->empty()) { echo "saturday"; } ?> <?php if(!$event->times_sun()->empty()) { echo "sunday"; } ?> <?= $event->category() ?>">
		
		<?php snippet('event-times', ['event' => $event]) ?>
		<p class="event-artist"><?= $event->artists()->html() ?></p>        
		<a href="<?= $event->url() ?>"><h3 class="event-title"><?= $event->title()->html() ?></h3></a>

    </li>

  <?php endforeach ?>

</ul>
