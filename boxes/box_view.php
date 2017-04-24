<?php
require_once('../style/css_style_class.php');
require_once('../action/js_action_class.php');

$box_identifier = $box->get_id();
// Add style to the global mapping of styles to boxes. In this way we can say "These boxes belong and are interpreted as having this style."
css_style::$style_map[$box->get_style()][] = '.' . $box_identifier;
// ^^^ consider changing this to a similar method as the action. it may help cut down on redundent css. If an individual has to tailer the css themselve and have it included via one selector there may be more prudence about how the styles are applied.


// Only add js if it hasn't been added before. this should cut down on redundent js.
if (empty(js_action::$action_map[$box->get_action()])) {
	js_action::$action_map[$box->get_action()] = $box_identifier;
}

?>

<div class="box <?=get_class($box)?> <?=$box_identifier?> <?=$box->get_action() ?: 'no-action'?>">
	BOX: <?=$box_identifier?>
	<?php
	// overflow: hidden;
		$box->sub_boxes->render();
	?>	
</div>
