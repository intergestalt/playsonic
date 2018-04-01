
<div class="event-select day-select">
	<span data-value="all" class="selected"><?= l::get('all_days') ?></span><br>
	<span data-value="friday"><?= l::get('friday') ?></span>
	<span data-value="saturday"><?= l::get('saturday') ?></span>
	<span data-value="sunday"><?= l::get('sunday') ?></span>
</div>

<div class="event-select category-select">
	<span data-value="all" class="selected"><?= l::get('all_categories') ?></span><br>
	<span data-value="extended"><?= l::get('extended') ?></span><br>
	<span data-value="focus"><?= l::get('focus') ?></span><br>
	<span data-value="exhibition"><?= l::get('exhibition') ?></span>
</div>


<ul class="event-list">

  <?php foreach($events as $event): ?>

    <li class="event <?php if(!$event->times_fri()->empty()) { echo "friday"; } ?> <?php if(!$event->times_sat()->empty()) { echo "saturday"; } ?> <?php if(!$event->times_sun()->empty()) { echo "sunday"; } ?> <?= $event->category() ?>">
		
		<?php snippet('event-times', ['event' => $event]) ?>
		<p class="event-artist"><?= $event->artists()->html() ?></p>        
		<a class="event-title" href="<?= $event->url() ?>"><h1 class="event-title"><?= $event->title()->html() ?></h1></a>

    </li>

  <?php endforeach ?>

</ul>
