<?php namespace mt;
/**
 * Shots Engine class
 *
 * @package     MyTailor
 * @subpackage  SMOF
 * @since       1.0.0
 * @author      Jobizzness
 */


//I shoulld be able to load the pages data and also load the right template for the page.. If the page is not available
//I should redirect the user to another page dou.. I should be smart enough to know wassup inna the universea

class pages {

	/*
	*
	*
	*/
	public $slug;

    public static function getPage($path, $group = 'public', $__default) {


        if (!isset($path['call_parts'][0]) || empty($path['call_parts'][0])) {
            $path['call_parts'][0] = $__default;

        }
            $slug = $path['call_parts'][0];
        

        $page = \page::find(array('conditions' => array('slug = ? AND mt_group = ?', $slug, $group) ));

        return $page;
    }


}