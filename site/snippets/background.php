<?php 

/* static content - not replaced by pjax */ 

function get_svg($name) {
	return file_get_contents('site/snippets/svg/'.$name.'.svg');
}

?>

<div id="background">
	<div class="pattern-repeat" data-scroll-speed="1.5">
		<?= get_svg('pattern') ?>
	</div>
</div>