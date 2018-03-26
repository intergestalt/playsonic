
<select class="event-select day-select">
	<option value="all"><?= l::get('all_days') ?></option>
	<option value="friday"><?= l::get('friday') ?></option>
	<option value="saturday"><?= l::get('saturday') ?></option>
	<option value="sunday"><?= l::get('sunday') ?></option>
</select>

<select class="event-select category-select">
	<option value="all"><?= l::get('all_categories') ?></option>
	<option value="extended"><?= l::get('extended') ?></option>
	<option value="focus"><?= l::get('focus') ?></option>
	<option value="exhibition"><?= l::get('exhibition') ?></option>
</select>


<ul class="event-list">

  <?php foreach($events as $event): ?>

    <li class="event <?php if(!$event->times_fri()->empty()) { echo "friday"; } ?> <?php if(!$event->times_sat()->empty()) { echo "saturday"; } ?> <?php if(!$event->times_sun()->empty()) { echo "sunday"; } ?> <?= $event->category() ?>">
		
		<?php snippet('event-times', ['event' => $event]) ?>
		<p class="event-artist"><?= $event->artists()->html() ?></p>        
		<a href="<?= $event->url() ?>"><h3 class="event-title"><?= $event->title()->html() ?></h3></a>

    </li>

  <?php endforeach ?>

</ul>
