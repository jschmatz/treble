<?php

require_once('HomeController.php');
require_once('RegisterController.php');
require_once('ResultsController.php');
require_once('MusicianController.php');
require_once('AccountController.php');

class BaseController {
    public $pageTitle;
    public $startPage;
    public $jsFiles = array();
    public $pageTemplate;
    public $bodyClass;
    public $bodyId;
    
    public $isSelfContained = false;
    public $noSiteContainer = false;
    
    public function __construct()
    {
    
    }
    
    public function handleRequest($requestElements)
    {
    
    }
    
    public static function getController($type, $requestElements)
    {
        if(class_exists($type . "Controller")) {
            $newControllerClass = $type . "Controller";
            return new $newControllerClass($requestElements);
        }
        
        return false;
    }
}
?>