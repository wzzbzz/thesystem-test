<?php

spl_autoload_register(
    function($classname) {
		
        if(strpos($classname,"thesystem") ===false || strpos($classname, "thesystem" ) > 0  ){
			return;
		}
        
		$include = $_SERVER['DOCUMENT_ROOT'] . str_replace( "\\","/",$classname).".php";
        
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

// gotten from internet;  recursive remove directory fun ction

function removeDirectory($path) {
    $files = glob($path . '/*');
   foreach ($files as $file) {
       is_dir($file) ? removeDirectory($file) : unlink($file);
   }
   rmdir($path);
    return;
}


// wordpressy slug creation
function sanitize_title( $title ) {
   $title = preg_replace( '/[^a-z0-9]+/', '-', strtolower( $title ) );
   return $title;
}


