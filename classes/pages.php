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

    public static function loadPage($path, $group = 'public') {


        if (!isset($path['call_parts'][0]) || $path['call_parts'][0] == '') {
            $path['call_parts'][0] = 'home';

        }
            $slug = $path['call_parts'][0];
        

        $page = \page::find(array('conditions' => array('slug = ? AND mt_group = ?', $slug, $group) ));

        return $page;
    }

}