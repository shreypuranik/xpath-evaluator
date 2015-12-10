<?php

include_once("class.Scraper.php");

$scraper = new Scraper();
$scraper->setUpScraper($_GET['url'], $_GET['xpath']);
$queryResponse = $scraper->getResponse();
echo '<pre>';
print_r($queryResponse);
echo '</pre>';

?>