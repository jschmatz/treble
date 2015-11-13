<?php

require_once('BaseController.php');

class ResultsController extends BaseController {
    
    public function __construct($requestElements)
    {
        $this->handleRequest($requestElements);
        $this->jsFiles = array(__ROOT_DIR__ . "/static/js/results.js");
        $this->pageTemplate = "templates/results.php";
        $this->bodyClass = "results";
        $this->noSiteContainer = true;
    }
    
    public function handleRequest($requestElements)
    {
        
    }
}
?>