<?php
include_once("trait.GenericFunctions.php");

/**
 * Class Scraper
 * By Shrey Puranik
 * December 2015
 */
class Scraper
{
    use GenericFunctions;

    protected $url;
    protected $xpath;
    protected $pageXML;

    function __construct()
    {
        //if hosting this application on a server with public access,
        // you could use the constructor to initialize IP checks to avoid
        //your server being used for external productions
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
        $this->setPageXML($this->getXMLFromURL($this->getURL()));
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


    /**
     * Get back the response from the generated XML
     * @return mixed
     */
    function getResponse()
    {
        $response = $this->pageXML->xpath($this->xpath);
        return $response;
    }


}


