<?php namespace mt\Http;
/**
 * Shots Engine class
 *
 * @package     MyTailor
 * @since       1.0.0
 * @author      Jobizzness
 */


// Looks at the URL and what the user is asking for ? If the user has access to that information
// It sends a response Which could be the page or a redirect to another page..
// Loads the right page and the template..



class Requests {



/* -------------------------------------------------------------------------------- */
/* gets url path and break into a multi dimensional array
/* -------------------------------------------------------------------------------- */
   

public static function capture() {
 
    $path = [];
    if (isset($_SERVER['REQUEST_URI'])) {

        $request_path = explode('?', $_SERVER['REQUEST_URI']);
        $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
        $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
        $path['call'] = utf8_decode($path['call_utf8']);

        if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
            $path['call'] = '';
        }

        $path['call_parts'] = explode('/', $path['call']);

        $path['query_utf8'] = urldecode($request_path[1]);
        $path['query'] = utf8_decode(urldecode($request_path[1]));
        $vars = explode('&', $path['query']);

        foreach ($vars as $var) {
            $t = explode('=', $var);
            $path['query_vars'][$t[0]] = $t[1];
        }
    }
    return $path;
    }

    
}