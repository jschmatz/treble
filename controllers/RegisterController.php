<?php

require_once('BaseController.php');

class RegisterController extends BaseController {
    
    public function __construct($requestElements)
    {
        $this->handleRequest($requestElements);
        $this->jsFiles = array(__ROOT_DIR__ . "/static/js/register.js");
        $this->pageTemplate = "templates/register.php";
        $this->bodyClass = "register";
    }
    
    public function handleRequest($requestElements)
    {
        
    }
}
?>