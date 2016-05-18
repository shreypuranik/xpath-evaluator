<?php

trait GenericFunctions
{

    /**
     * Get the HTML
     * from the supplied URL
     * @param $url
     * @return string
     */


    public function getHTMLFromURL($url)
    {
        $html = "";
        for($i=0;$i<10; $i++){
            $html = file_get_contents($url);
            if ($html){
                break;
            }
        }

        return $html;
    }

    /**
     * Return the XML for a
     * specified URL.
     * Static for re-usability.
     * @param $url
     * @return SimpleXMLElement
     */

    public function getXMLFromURL($url)
    {

        $html = $this->getHTMLFromURL($url);
        $doc = new DomDocument();
        @$doc->loadHTML($html);
        $xml = simplexml_import_dom($doc);
        return $xml;
    }

    /**
     * Retrieve the XML once it's gone through
     * PHP's simplexml_load method
     * @param $string
     * @return SimpleXMLElement
     */
    public function getXMLFromString($string)
    {
        $xml = simplexml_load_string($string);
        return $xml;
    }

}
