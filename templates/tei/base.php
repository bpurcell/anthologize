<?php


error_reporting(0);

include_once(WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . "anthologize" . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'class-tei-dom.php');

$projectID = 865;
$tei = new TeiDom($projectID);

/*
$op = get_option('anthologize_settings');
print_r($op);
*/


header("Content-type: text/xml");
echo $tei->getTeiString();


die();

