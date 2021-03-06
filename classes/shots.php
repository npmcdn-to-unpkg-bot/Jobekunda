<?php namespace mt;
/**
 * Shots Engine class
 *
 * @package     MyTailor
 * @subpackage  SMOF
 * @since       1.0.0
 * @author      Jobizzness
 */

class shots extends \ActiveRecord\Model {


        // Gets the shots based on the query stated
        public static function get($slug, $category = null, $limit = 20, $offset = 0){

			$whereClause = '';
			if($category){

					$whereClause = "category = '$category' ";
			}
        	switch ($slug) {

        		case 'trending': 
        		    $shots = \shot::find('all',
					array('select'=>'AVG(views/DATEDIFF(NOW(), uploadDate)) as Popularity, shots.*',
							'conditions'=> $whereClause,
							'group'=>'shotID',
							'order' => 'Popularity desc',
							'limit'=> $limit,
							'offset'=>$offset));

        			break;

        		case 'featured':
					if(!empty($category) AND $category != '') {

						$whereClause = " AND category = '$category'";
					}else{
						$whereClause = '';
						}

        			$shots = \shot::find('all',
						array('conditions'=>'featured = 1 ' . $whereClause,
							'order' => 'views desc, shotID desc',
							'limit'=> $limit,
							'offset'=>$offset));
        			break;
        		
        		default:

        		#Then show latest shots
        			$shots = \shot::find('all',
						array('conditions'=> $whereClause,
								'order' => 'uploadDate desc, views desc, shotID desc',
								'limit'=> $limit,
								'offset'=>$offset));
        	}       			

        			return $shots;
        }

}
