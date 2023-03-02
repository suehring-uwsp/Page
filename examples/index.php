<?php

require_once(__DIR__ . "/../Page.class.php");

$page = new Page("Page");

print $page->getTopSection();
print "<h1>Page created with Page class</h1>" . PHP_EOL;
print $page->getBottomSection();

