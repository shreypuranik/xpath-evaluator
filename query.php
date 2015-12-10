<?php

if (empty($_GET['url'])
    || empty($_GET['xpath']))
{
    echo '<div id="warning">Please ensure you have filled in both URL and xpath fields.</div>';
    exit;
}

include_once("class.Scraper.php");

$scraper = new Scraper();
$scraper->setUpScraper($_GET['url'], $_GET['xpath']);
$queryResponse = $scraper->getResponse();
$output = "";
$output .=<<<EOD
<h3>Results of xpath query</h3>
<p>Here's the result of the xpath query you ran. And as a bonus, the entire XML tree is <a href="#xml">below</a> too. </p>
EOD;
$output .= <<<EOD
<div id="container">
<div id="response">
<pre>
EOD;
$output .= print_r($queryResponse, true);
$output .= <<<EOD
</pre>
</div>
<div id="xml">
<h3>XML tree</h3>
<p>If you need to refine your xpath, just copy the xml below and refactor your xpath.</p>
EOD;
$output .='<textarea  cols="100" rows="10">';
$output .= print_r($scraper->getPageXML(), true);
$output .='</textarea>';
$output .=<<<EOD
</div>
<div style="clear:both;"></div>
</div>

EOD;


echo $output;

?>