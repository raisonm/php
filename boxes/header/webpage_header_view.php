<?php

$box_identifier = $box->get_id();

?>
<header class="header <?=get_class($box)?> <?=$box_identifier?>">
	<div class="box <?=get_class($box)?> <?=$box_identifier?>" style="width:<?=$box->size[0]?>; height:<?=$box->size[1]?>; border: <?=$box->border?>; align: <?=$box->align?>; position: relative;">
		<h1>HEADER: <?=$box_identifier?></h1>
		<?php
			$box->sub_boxes->render();
		?>	
	</div>
</header>
