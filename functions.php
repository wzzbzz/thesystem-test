<?php

spl_autoload_register(
    function($classname) {
		
        if(strpos($classname,"thesystem") ===false || strpos($classname, "thesystem" ) > 0  ){
			return;
		}

		$include = WEB_ROOT . str_replace( "\\","/",$classname).".php";
        
		if(file_exists($include))
			include_once($include);
		else{
            debug($classname);
            diebug(debug_backtrace());
            diebug($include);
		}
    }
);

//debugging functions
if(!function_exists('debug')) {

    function debug($obj, $suppress = false)
    {

        echo '<pre><font size=2>';
        var_dump($obj);
        echo '</font></pre>';

        if(!$suppress) {
            $trace = debug_backtrace();
            echo "<font size=2>" . $trace[0]['file'];
            echo ':' . $trace[0]['line'] . '</font>';
        }

    }
}

if(!function_exists('diebug')) {

    function diebug($obj, $suppress = false)
    {

        echo '<pre><font size=2>';
        var_dump($obj);
        echo '</font></pre>';

        if(!$suppress) {
            $trace = debug_backtrace();
            echo "<font size=2>" . $trace[0]['file'];
            echo ': ' . $trace[0]['line'] . '</font>';
        }

        die();
    }
}


function removeDirectory($path) {
    $files = glob($path . '/*');
   foreach ($files as $file) {
       is_dir($file) ? removeDirectory($file) : unlink($file);
   }
   rmdir($path);
    return;
}



function sanitize_title( $title ) {
   $title = preg_replace( '/[^a-z0-9]+/', '-', strtolower( $title ) );
   return $title;
}


define('WEB_ROOT',getcwd()."/");
$path = trim(file_get_contents(WEB_ROOT."/config.ini"));
$sys = new \thesystem\Users\UserSystem($path);