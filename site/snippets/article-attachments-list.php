<?php $attachments = $item->children()->visible(); ?>

<ul class="attachments-list">

  <?php foreach($attachments as $attachment): ?>

    <li class="attachment">

		<h3 class="attachment-title"><?= $attachment->title()->html() ?></h3>

		<?php echo $attachment->text()->kirbytext() ?>

		<?php if($attachment->embed()->isNotEmpty()) : ?>
			<div class="attachment-embed"><?php echo $attachment->embed()->embed() ?></div>
		<?php endif ?>

		<?php if($image = $attachment->images()->sortBy('sort', 'asc')->first()) : $thumb = $image->crop(600, 600); ?>
			<img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $attachment->title()->html() ?>" class="" />
		<?php endif ?>

    </li>

  <?php endforeach ?>

</ul>