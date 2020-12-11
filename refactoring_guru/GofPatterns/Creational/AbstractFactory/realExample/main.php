<?php

include_once("Classes/Page.php");
include_once("Classes/Factory/PHPTemplateFactory.php");

$page = new Page('Sample page', 'This is the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());