<?php

require_once(__DIR__ . "/../Page.class.php");

$page = new Page("Example Page with JS and CSS and JS at The Bottom");
// Note that neither of these files contain anything in the page class examples
// But this is how you'd add js and css.  One addHeadElement() call per file is best practice.
$page->addHeadElement("<script src=\"js/script.js\"></script>");
$page->addHeadElement("<link rel=\"stylesheet\" href=\"css/styles.css\">");
$page->addBottomElement("<script src=\"js/bottomscript.js\"></script>");

print $page->getTopSection();
print "<h1>Page created with Page class</h1>" . PHP_EOL;
print "<div class=\"main\">Here is the main section</div>" . PHP_EOL;
print $page->getBottomSection();
