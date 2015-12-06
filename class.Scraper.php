<?php

/**
 * Class Scraper
 * By Shrey Puranik
 * December 2015
 */
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

    /**
     * Upon initialising the object,
     * this should be run.
     * @param $url
     * @param $xpath
     */
    function setUpScraper($url, $xpath)
    {
        $this->setURL($url);
        $this->setXpath($xpath);
        $this->setPageXML($this->getXML($this->getURL()));
    }

    /**
     * Declare the URL
     * @param $data
     */
    function setURL($data)
    {
        $this->url = $data;
    }

    /**
     * Get back the URL
     * @return mixed
     */
    function getURL()
    {
        return $this->url;
    }

    /**
     * Set up the Xpath
     * for the query
     * @param $data
     */
    function setXpath($data)
    {
        $this->xpath = $data;
    }

    /**
     * Get the Xpath
     * that the query is
     * running
     * @return mixed
     */
    function getXpath()
    {
        return $this->xpath;
    }

    /**
     * Declare the XML
     * @param $xml
     */
    function setPageXML($xml)
    {
        $this->pageXML = $xml;
    }

    /**
     * Get the XML
     * @return mixed
     */
    function getPageXML()
    {
        return $this->pageXML;
    }


    function getResponse()
    {
        $response = $this->pageXML->xpath($this->xpath);
        return $response;
    }


    /**
     * Return the XML for a
     * specified URL.
     * Static for re-usability.
     * @param $url
     * @return SimpleXMLElement
     */

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


