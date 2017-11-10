<?php 

/* static content - not replaced by pjax */ 

function get_svg($name) {
	return file_get_contents('site/snippets/svg/'.$name.'.svg');
}

?>

<div id="background">
	<?= get_svg('pattern') ?>
</div>