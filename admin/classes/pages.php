<?php namespace mt;
/**
 * Shots Engine class
 *
 * @package     MyTailor
 * @subpackage  SMOF
 * @since       1.0.0
 * @author      Jobizzness
 */




class pages {

    public function __construct() {

//
    }

    //Does the user have privallages to to the page

    // If no send to a page he can access else

    // Load the page requested

    // Get data the page needs to function


    //#page Setup

//
//}
//
//

//}
//

    public static function loadPage($path, $group) {


        if (!isset($path['call_parts'][0]) || $path['call_parts'][0] == '') {
            $path['call_parts'][0] = 'home';

        } 
            $slug = $path['call_parts'][0];
        

        $page = \page::find(array('conditions' => array('slug = ? AND mt_group = ?', $slug, $group) ));

        //If no we dont know what page we send them to the home page by default
//
//        if (!$page) {
//            $page = page::find('all',
//
//
//
//
//        }
        //, mt_group = $group"

        return $page;
    }

}