<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 4/24/2016
 * Time: 6:30 AM
 */
$image_path = 'images/shots/large/';
$shotUrl = '';
$shotTitle = '';
$sourceURL = '';
$category = '';
$description = '';

if( $path['query_vars']['id'] ){
    $shotid = $path['query_vars']['id'];

    $data = getShot_Data($dbc, $shotid);

    $shotUrl = $data['shotFileName'];
    $shotTitle = $data['shotName'];
    $sourceURL = $data['url'];
    $category = $data['categoryID'];
    $description = $data['shotDescription'];
}

?>

<div class="pageContainer">
        <div class="two-colums clearfix">

            <aside class="action-feed">
                <section class="feed-header clearfix">
                    <div class="feed-left">
                        <h3 class="grey-text">Shot Details</h3>
                    </div>
                    <div class="feed-right">
                        <a href="#" title="more insights"><img src="images/icons/top03/bars42.svg" width="20px"></a>
                    </div>
                </section>
                 <div class="insights-container p-10">
                      <div class="single-card clearfix p-10">

                          <div class="pb-5 clearfix mt-header-shotEdit">
                          		<div class="shotEdit--title">
                          			<span>Edit Shot</span>
                          		</div>

                          		<div class="btn--group">
                          			<a href="#" class="btn btn-default --actions">
                          				ACTIONS
                          				<i class="fa fa-angle-down"></i>
                          			</a>
                          			<ul class="dropdown-menu pull-right" style="display:none;">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-pencil"></i> Edit </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-trash-o"></i> Delete </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-ban"></i> Ban </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;"> Make admin </a>
                                    </li>
                                </ul>
              				</div>
                          </div>

                          <section class="mt-pad-wrap">
                          	<form type="post" action="updateshot.php">
                          		<div class="form-body">
	              					<div class="mt-form-group">
	                                    <input type="text" class="" readonly="" disabled value="<?=$shotUrl?>">
	                                    <label class="top-label">URL</label>
	                                </div>
	                                <div class="mt-form-group">
	                                    <input type="text" class="" value="<?=$shotTitle?>">
	                                    <label class="top-label">Title</label>
	                                </div>
                                  <div class="mt-form-group">
                                      <input type="text" class="" value="<?=$shotTitle?>">
                                      <label class="top-label">Source URL</label>
                                  </div>
	                                <div class="mt-form-group">
	                                    <select>
                                        <option value="" selected></option>
	                                        <option value="ma">Men</option>
	                                        <option value="fm">Female</option>
	                                        <option value="ki">Kids</option>
	                                        <option value="ac">Accessories</option>
	                                    </select>
	                                    <label class="top-label">Category</label>
	                                </div>
                                  <div class="md-checkbox">
                                      <input type="checkbox" id="checkbox113" class="md-check">
                                      <label>
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span>
                                      Feature</label>
                                 </div>
	                                <div class="mt-form-group">
	                                    <textarea class="" rows="3" value="<?=$description?>"></textarea>
	                                    <label class="top-label">Description</label>
	                                </div>

	                            </div>

	                            <div class="mt-form-actions noborder">
	                                <button type="submit" class="btn btn-blue" >Submit</button>
	                                <button type="button" class="btn default">Cancel</button>
	                            </div>
                          	</form>
                          </section>

                      </div>

                    </div>

                    <div class="p-20">



                    </div>
            </aside>
            <main class="admin-main-wrapper">
               <section class="main-feed-header">
                <div>
                   <ul class="breadcrump">
                       <li><a href="#">Mytailor</a></li>
                       <li>Shots</li>
                   </ul>
               </div>
               </section>

               <!-- May need this later -->
                <div class="call-admin-head clearfix">

                </div>

                	<!-- Dumps all images -->
                <div class="single-column mt-shots-card clearfix">
                		<div class="mt-row clearfix --scroll">

                			             <?php

                       /***** Load shots !! */

                       $shots = mt\shots::get($slug);

                        foreach ($shots as $shot) :
        ?>
        <div class="mt-shot-card">
            <div class="mt-shot-image">
                <a href="?id=<?=$shot->shotid;?>" style="margin:0;">
                <img src="<?=base($path).'../../'.'/'.$image_path . $shot->shotfilename . '.' . $shot->shotfiletype ?>">
                </a>
            </div>
        </div>

                     
      <?php endforeach; ?>
        

                		</div>
                	</div>



                </div>

            </main>

        </div>


</div>
