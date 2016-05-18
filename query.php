<?php


//url OR xml
//xpath
$incorrectFlag = false;

if (empty($_GET['xpath'])){
    $incorrectFlag = true;
}

if ((empty($_GET['url']))
    && (empty($_GET['xml'])))
{
    $incorrectFlag  = true;
}

if ($incorrectFlag){
    $html = <<<EOD
<br />
<div id="container">
<div id="response"><pre><p>Please ensure you've supplied both xpath AND a url OR a full XML.</p></pre>
</div>
</div>
EOD;
    echo $html;
    exit;
}


include_once("class.Scraper.php");




$scraper = new Scraper();
if (!empty($_GET['url'])){
    $scraper->setUpScraper($_GET['url'], $_GET['xpath']);
}

if (!empty($_GET['xml'])){
    $xmlFromString = $scraper->getXMLFromString($_GET['xml']);
    $scraper->setPageXML($xmlFromString);
    $scraper->setXpath($_GET['xpath']);

}

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
<div class="row">
<div class="col-sm-1">
</div>

<br />
<div class="col-sm-1">
<button type="button" class="btn btn-warning"><a href="#top">Back to top</a></button>
</div>
<div class="col-sm-10">
</div>

</div>

EOD;


echo $output;

?>