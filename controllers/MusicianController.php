<?php

require_once('BaseController.php');

class MusicianController extends BaseController {
    
    public function __construct($requestElements)
    {
        $this->handleRequest($requestElements);
        $this->jsFiles = array(__ROOT_DIR__ . "/static/js/musician.js");
        $this->pageTemplate = "templates/musician.php";
        $this->bodyClass = "musician";
    }
    
    public function handleRequest($requestElements)
    {
        
    }
}
?>