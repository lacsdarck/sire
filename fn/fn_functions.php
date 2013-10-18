<?php 
	
function load_css ($css_lib) {
	
	if (isset($css_lib) && count($css_lib) > 0) {
			
			foreach ($css_lib as $item ) {
			?>
<link href="<?php echo $item;?>" rel="stylesheet" type="text/css">
<?php	
			}
			
	}
	
}

function load_js ($js_lib) {

if (isset($js_lib) && count($js_lib) > 0) {
			
			foreach ($js_lib as $item ) {
			?>
<script src="<?php echo $item;?>" type="text/javascript"></script>
<?php	
			}
			
	}	
}


?>