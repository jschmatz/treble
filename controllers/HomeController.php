<?php

require_once('BaseController.php');

class HomeController extends BaseController {
    
    public function __construct($requestElements)
    {
        $this->handleRequest($requestElements);
        $this->jsFiles = array(__ROOT_DIR__ . "/static/js/home.js");
        $this->pageTemplate = "templates/home.php";
        $this->bodyClass = "home";
    }
    
    public function handleRequest($requestElements)
    {
        
    }
}
?>