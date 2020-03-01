<?php
ob_start('ob_gzhandler');
$file = isset($_REQUEST['file']) ? $_REQUEST['file'] : null;
if(!empty($file)) {
	$file = $_SERVER['DOCUMENT_ROOT'].'/'.$file;
	if(pathinfo($file, PATHINFO_EXTENSION) == 'svg' && file_exists($file) && mime_content_type($file) == 'image/svg+xml') {
		$content = file_get_contents($file);
		echo $content;
	}
}
ob_flush();