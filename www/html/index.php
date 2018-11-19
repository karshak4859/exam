<?php
/*function pre($mixObj, $sTitle = "")
{
    list($aCall) = debug_backtrace();

    static $sIdCode;

    $sIdCode++;
    echo "<pre title=\"Line: " . $aCall['line'] . " File: " . $aCall['file'] . "\"><code style='
		-moz-border-radius: 4px; -khtml-border-radius: 4px; -webkit-border-radius: 4px; border-radius:4px; position:relative;
		opacity:0.75;filter: alpha(opacity=95);-moz-opacity: 0.95;z-index:800;display: block;margin:10px;padding:4px;border:1px solid #ddd;
		background:#f5f5f5;font:12px Courier, monospace;text-align:left;'>";

    echo '<span style="font-weight: bold; font-size: 12px; cursor: pointer; margin-right: 10px;"><span onClick="document.getElementById(\'pre_' . $sIdCode . '\').style.display = \'block\';">+</span></span>';
    if(strlen($sTitle) > 0)
    {
        print "<span style=\"margin:0px;background-color:red;color:yellow;font-weight:bold;font-family:Verdana,Trebuchet MS, Sans-serif;\">" . $sTitle . "</span>";
    }
    echo '<span style="font-weight: bold; font-size: 12px; cursor: pointer; margin-left: 10px;"><span onClick="document.getElementById(\'pre_' . $sIdCode . '\').style.display = \'none\';">-</span></span>';
    echo '<br/><span id="pre_' . $sIdCode . '" style="display: auto;">';

    print_r($mixObj);
    echo "</span></code></pre>";
}
var_dump($_GET);
exit;*/

require 'application/lib/Dev.php';



use application\core\Router;

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});



$router = new Router;

$router->run();
