<?php

$box_identifier = $box->get_id();

?>

<div class="box <?=get_class($box)?> <?=$box_identifier?>" style="height: 100%; position: relative; margin-left: <?=$box->margin_left?>; border: <?=$box->border?>; align: left;">
	<?php
		$box->sub_boxes->render();
	?>	
</div>
