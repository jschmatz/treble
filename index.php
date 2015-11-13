<?php

require_once('config.php');
require_once('controllers/BaseController.php');

$globalVars = array();
$includeTemplate = "";
$bodyClass = "";
$bodyId = "";

global $pc;
$pc = null;

$path = "/" . ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
if(__ROOT_DIR__ != "")
{
    if (strpos($path, __ROOT_DIR__) === 0)
    {
        $path = preg_replace('/' . preg_quote(__ROOT_DIR__ . "/", "/") . '/', '', $path, 1);
    }
}
else
{
    $path = substr($path, 1);
}

$path = preg_replace('/\?.*/', '', $path);

$elements = explode('/', $path);                // Split path on slashes
if($path == "" || count($elements) == 0)
{
    $pc = BaseController::getController("Home", $elements);
}
else 
{ 
    switch(array_shift($elements))             // Pop off first item and switch
    {
        case 'results':
            $pc = BaseController::getController("Results", $elements);
            break;
        case 'musician':
            $pc = BaseController::getController("Musician", $elements);
            break;
        case 'register':
            $pc = BaseController::getController("Register", $elements);
            break;
        case 'account':
            $pc = BaseController::getController("Account", $elements);
            break;
        default:
            header('HTTP/1.1 404 Not Found');
            //Show404Error();
            break;
    }
}
if($pc != null && $pc->pageTemplate != null && $pc->isSelfContained == false) {
?>
<html>
<?php include "templates/global/head.php"; ?>
<?php include "templates/global/header.php"; ?>
<body <?php if($pc->bodyClass != null) { echo "class=\"" . $pc->bodyClass . "\""; }?> <?php if($pc->bodyId != null) { echo "id=\"" . $pc->bodyId . "\""; } ?>>
<?php if($pc->noSiteContainer == false) { ?>
<div class="container">
    <?php include $pc->pageTemplate; ?>
</div>
<?php } else { ?>
    <?php include $pc->pageTemplate; ?>
<?php } ?>
<?php include "templates/global/footer.php"; ?>
<?php include "templates/global/footer-refs.php"; ?>
</body>
</html>
<?php
}
?>