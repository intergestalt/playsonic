<?php if($image = $member->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
	<img class="member-image" src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $member->title()->html() ?>" class="" />
<?php endif ?>

<h2 class="member-title"><?= $member->title()->html() ?></h2>
<?php if (!$member->role()->empty()) { echo '<h3>'.$member->role()->html().'</h3>'; } ?>

<?php echo $member->text()->kirbytext() ?>

<?php if ($member->link()) : ?>
  <a target="_blank" href="<?= $member->link();?>"><?= l::get('website'); ?></a>
<?php endif; ?>

