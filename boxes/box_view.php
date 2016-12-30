<?php

$box_identifier = $box->get_id();

?>

<div class="box <?=get_class($box)?> <?=$box_identifier?>" style="width:<?=$box->size[0]?>; height:<?=$box->size[1]?>; border: <?=$box->border?>; align: <?=$box->align?>; padding: <?=$box->padding?>; float: <?=$box->float?>; position: relative; margin-left: <?=empty($box->margin_left) ? $box->margin_left : 0?>;">
	BOX: <?=$box_identifier?>
	<?php
	// overflow: hidden;
		$box->sub_boxes->render();
	?>	
</div>
