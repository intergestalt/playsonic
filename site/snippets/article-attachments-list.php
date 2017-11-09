<?php $attachments = $item->children()->visible(); ?>

List of attachments:

<ul class="attachments-list">

  <?php foreach($attachments as $attachment): ?>

    <li class="attachment">

		<h3 class="attachment-title"><?= $attachment->title()->html() ?></h3>

		<?php echo $attachment->text()->kirbytext() ?>

		<div class="attachment-embed"><?php echo $attachment->embed()->embed() ?></div>

    </li>

  <?php endforeach ?>

</ul>