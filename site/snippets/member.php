<h3 class="member-title"><?= $member->title()->html() ?></h3>

<?php echo $member->text()->kirbytext() ?>

<?php if ($member->link()) : ?>
  <a target="_blank" href="<?= $member->link();?>"><?= $member->link() ?></a>
<?php endif; ?>

<?php if($image = $member->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
	<img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $member->title()->html() ?>" class="" />
<?php endif ?>