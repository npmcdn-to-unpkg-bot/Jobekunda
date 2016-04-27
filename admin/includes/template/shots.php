<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 4/24/2016
 * Time: 6:30 AM
 */
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
                          	<form type="post" action="#">
                          		<div class="form-body">
	              					<div class="mt-form-group">
	                                    <input type="text" class="" readonly="" value="http://mytailor.me">
	                                    <label class="top-label">URL</label>
	                                </div>
	                                <div class="mt-form-group">
	                                    <input type="text" class="" value="test">
	                                    <label class="top-label">Title</label>
	                                    <!-- <span class="help-block">Some help goes here...</span> -->
	                                </div>
	                                <div class="mt-form-group">
	                                    <select>
	                                        <option value="1" selected="">Men</option>
	                                        <option value="2">Female</option>
	                                        <option value="3">Kids</option>
	                                        <option value="4">Accessories</option>
	                                    </select>
	                                    <label class="top-label">Category</label>
	                                </div>
	                                <div class="mt-form-group">
	                                    <textarea class="" rows="3"></textarea>
	                                    <label class="top-label">Description</label>
	                                </div>

	                            </div>

	                            <div class="mt-form-actions noborder">
	                                <button type="button" class="btn btn-blue">Submit</button>
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
                <div class="call-admin-head clearfix"></div>

                	<!-- Dumps all images -->
                <div class="single-column mt-shots-card clearfix">
                		<div class="mt-row clearfix --scroll">

                			             <?php

                       /***** Load shots !! */

                    $image_path = 'images/shots/large/';
                    load_shots($dbc, $image_path, $path, $slug);

          
                     

             ?>

                		</div>
                	</div>



                </div>

            </main>

        </div>


</div>