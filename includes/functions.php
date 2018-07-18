<?php

/*
	THIS FILE CONTAINS CUSTOM FUNCTIONS FOR EASING THE PROCESS CODING PHP
	DO NOT DELETE ANY FUNCTION
*/

//	FUNCTION TO LINK CSS FILES WITH LAST MODIFIED DATE ATTACHED
function linkCssFiles( $cssFiles ){
	$ROOT = $_SERVER["DOCUMENT_ROOT"];
	foreach( $cssFiles as $css ){
		$loc = "$ROOT$css";
		$mtime = filemtime( $loc );
		echo("
		<link href='$css?inception=$mtime' rel='stylesheet' />
		");
	}
}

//	FUNCTION TO LINK JS FILES WITH LAST MODIFIED DATE ATTACHED
function linkJsFiles( $jsFiles ){
	$ROOT = $_SERVER["DOCUMENT_ROOT"];
	foreach( $jsFiles as $js ){
		$loc = "$ROOT$js";
		$mtime = filemtime( $loc );
		echo("
		<script src='$js?matrix=$mtime'></script>
		");
	}
}
?>
