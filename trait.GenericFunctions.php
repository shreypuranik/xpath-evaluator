<?php

trait GenericFunctions
{

    /**
     * Return the XML for a
     * specified URL.
     * Static for re-usability.
     * @param $url
     * @return SimpleXMLElement
     */

    public function getXMLFromURL($url)
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











