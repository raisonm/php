<?php

$box_identifier = $box->get_id();

?>
<div class="box <?=get_class($box)?> <?=$box_identifier?>" style="width:<?=$box->size[0]?>; height:<?=$box->size[1]?>; border: <?=$box->border?>; align: <?=$box->align?>; position: relative; float: <?=$box->float?>">
	<ul>
		<?php
			$array_of_boxes = $box->sub_boxes->return_boxes_array();
			foreach ($array_of_boxes as $option_box) {
				echo '<li style="padding: 5px;">';
				$option_box->render();
				echo '</li>';
			}
		?>
	</ul>	
</div>
