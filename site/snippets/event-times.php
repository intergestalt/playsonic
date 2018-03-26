<p class="event-times">
	<?php if (!$event->times_fri()->empty()) :?>
		<span class="friday"> <?= l::get('friday') . " " . $event->times_fri()->html() ?></span>
	<?php endif ?>

	<?php if (!$event->times_sat()->empty()) :?>
		<span class="saturday"><?= l::get('saturday') . " " . $event->times_sat()->html() ?></span>
	<?php endif ?>

	<?php if (!$event->times_sun()->empty()) :?>
		<span class="sunday"><?= l::get('sunday') . " " . $event->times_sun()->html() ?></span>
	<?php endif ?>		
</p>