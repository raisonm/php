<?php

$box_identifier = $box->get_id();

?>

<div class="box <?=$box->name?> <?=$box_identifier?>" name="<?=get_class($box)?>" style="<?=$box->get_style()?>">
	<div class="add_sub_box js-add-sub-box" style="background: #c0c0c0; width: 15px; height: 15px; float: right; border: 1px solid black; text-align: center; margin-right: 5px">
		+
	</div>
	<div class="delete_box js-delete-box" style="background: #c0c0c0; width: 15px; height: 15px; float: right; border: 1px solid black; text-align: center; margin-right: 5px">
		X
	</div>
	<?php
		$box->sub_boxes->render();
	?>
	<div class="resizer js-resizer" style="background: #c0c0c0; width: 15px; height: 15px; float: right; border: 1px solid black; text-align: center; right: 0; bottom: 0; position: absolute;">
		=
	</div>
</div>
