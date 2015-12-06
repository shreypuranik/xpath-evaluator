<?php


class Scraper
{

    protected $url;
    protected $xpath;
    protected $pageXML;

    function __construct()
    {
        //if hosting this application on a server with public access,
        // you could use the constructor to initialize IP checks.
    }



    function setURL($data)
    {
        $this->url = $data;
    }

    function getURL()
    {
        return $this->url;
    }

    function setXpath($data)
    {
        $this->xpath = $data;
    }

    function getXpath()
    {
        return $this->xpath;
    }

    function setPageXML($xml)
    {
        $this->pageXML = $xml;
    }

    function getPageXML()
    {
        return $this->pageXML;
    }




    function setUpScraper($url, $xpath)
    {
        $this->setURL($url);
        $this->setXpath($xpath);
        $this->setPageXML($this->getXML($this->getURL()));
    }


    static function getXML($url)
    {

        for($i=0;$i<10; $i++){
            $html = file_get_contents($url);
            if ($html){
                break;
            }
        }


        $doc = new DomDocument();
        @$doc->loadHTML($html);
        $xml = simplexml_import_dom($doc);
        return $xml;
    }

}


