<?php namespace mt;
/**
 * Shots Engine class
 *
 * @package     MyTailor
 * @subpackage  SMOF
 * @since       1.0.0
 * @author      Jobizzness
 */


class shots {
        
        // Gets the shots based on the query stated
        public static function get($slug, $category = null, $limit = 20, $offset = 0){

        	switch ($slug) {

        		case 'trending': 
        		    $shots = \shot::find('all',
					array('select'=>'AVG(views/DATEDIFF(NOW(), uploadDate)) as Popularity, shots.*',
						'group'=>'shotID',
						'order' => 'Popularity desc',
						'limit'=> $limit,
						'offset'=>$offset));

        			break;

        		case 'featured':
        			$shots = \shot::find('all',
						array('conditions'=>'featured = 1',
							'order' => 'views desc, shotID desc',
							'limit'=> $limit,
							'offset'=>$offset));
        			break;
        		
        		default:

        		#Then show latest shots
        			$shots = \shot::find('all',
						array('order' => 'uploadDate desc, views desc, shotID desc',
								'limit'=> $limit,
								'offset'=>$offset));
        			break;
        	}       			

        			return $shots;
        }

}
