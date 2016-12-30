<?php

$box_identifier = $box->get_id();

?>

<div class="box <?=get_class($box)?> <?=$box_identifier?>" style="width:<?=$box->size[0]?>; height:<?=$box->size[1]?>; position: relative; border: <?=$box->border?>; align: left; float: left">
	BOX: <?=$box_identifier?>
	<?php
		$box->sub_boxes->render();
	?>	
</div>
