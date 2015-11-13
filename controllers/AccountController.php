<?php

require_once('BaseController.php');

class AccountController extends BaseController {
    
    public function __construct($requestElements)
    {
        $this->handleRequest($requestElements);
        $this->jsFiles = array(__ROOT_DIR__ . "/static/js/editprofile.js");
        
        $this->bodyClass = "editprofile";
    }
    
    public function handleRequest($requestElements)
    {
        
        if(count($requestElements) == 0) {
            switch(array_shift($requestElements))
            {
                case "personal":
                default:
                    $this->pageTemplate = "templates/account/personal.php";
                    break;
            }
        }
    }
}
?>