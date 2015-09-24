<style>  
                /* Autocomplete 
                ----------------------------------*/  
                .ui-autocomplete { position: absolute; cursor: default;z-index: 1511;}     
                .ui-autocomplete-loading { background: white url('http://jquery-ui.googlecode.com/svn/tags/1.8.2/themes/flick/images/ui-anim_basic_16x16.gif') right center no-repeat; }*/  
       
                /* workarounds */  
                * html .ui-autocomplete { width:1px; } /* without this, the menu expands to 100% in IE6 */  
       
                /* Menu 
                ----------------------------------*/  
                .ui-menu {  
                    list-style:none;  
                    padding: 2px;  
                    margin: 0;  
                    display:block;  
                }  
                .ui-menu .ui-menu {  
                    margin-top: -3px;  
                }  
                .ui-menu .ui-menu-item {  
                    margin:0;  
                    padding: 0;  
                    zoom: 1;  
                    float: left;  
                    clear: left;  
                    width: 100%;  
                    font-size:80%;  
                }  
                .ui-menu .ui-menu-item a {  
                    text-decoration:none;  
                    display:block;  
                    padding:.2em .4em;  
                    line-height:1.5;  
                    zoom:1;  
                }  
                .ui-menu .ui-menu-item a.ui-state-hover,  
                .ui-menu .ui-menu-item a.ui-state-active {  
                    font-weight: normal;  
                    margin: -1px;  
                }  
            </style>  
               
            <script type="text/javascript">  
            $(this).ready( function() {  
                $("#id").autocomplete({  
                    minLength: 1,  
                    source:   
                    function(req, add){  
                        $.ajax({  
                            url: "<?php echo base_url(); ?>index.php/admin/crud/searchCourse2",  
                            dataType: 'json',  
                            type: 'POST',  
                            data: req,  
                            success:      
                            function(data){  
                                if(data.response =="true"){  
                                    add(data.message);  
                                }  
                            },  
                        });  
                    },  
                     
                });  
            });  
            </script>  


<div id="wrapper">
	<?php echo $this->load->view('auth/pages/admin/dashboard'); ?>
<div class="page-wrapper">		
	
    
		

<div class="container-fluid bg-success text-center">
	<h2 class="text-success">Course Name 2 Schedules</h2>
</div>

<br>
<?php echo $this->session->flashdata('msg'); ?>

<table class="table table-striped table-hover text-center">
		  <tr class="lead">
		  		  <td>Student</td>
				  <td>Course</td>
				  <td>Date</td>
				  <td>Time</td>
				  <td>Comment</td>
				  <td>Teacher</td>
				  <td>Status</td>
				  
				 
				
				  <?php foreach ($schedules as $schedule){?>
								
						
							
						
								<tr>
									<td><?php echo $schedule->username; ?></td>
									<td><?php echo $schedule->course; ?></td>
									<td><?php echo $schedule->date; ?></td>
									<td><?php echo $schedule->time_start; ?></td>
									<td><?php echo $schedule->comment;?>
									<span class="glyphicon glyphicon-pencil btn btn-link btn-xs" data-toggle="modal" data-target=".comment-modal-<?php echo $schedule->id;?>"></span> 
									</td>
									<td><?php echo $schedule->teacher;?>
									<span class="glyphicon glyphicon-pencil btn btn-link btn-xs" data-toggle="modal" data-target=".teacher-modal-<?php echo $schedule->id;?>"></span> 
									</td>
									<td><?php echo $schedule->status;?>
									<span class="glyphicon glyphicon-pencil btn btn-link btn-xs" data-toggle="modal" data-target=".status-modal-<?php echo $schedule->id;?>"></span> 
									</td>
									
								</tr>
								
								
							
								
								
								<!-- start comment modal -->
		   						
		   						<div class="modal fade comment-modal-<?php echo $schedule->id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								  <div class="modal-dialog modal-lg">
									  <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Edit Comment</h4>
									      </div>
								      <div class="modal-body">
								      
								        	<?php echo form_open("admin/crud/course2_editComment");?>
								        	<div class="form-group">
											    	<label>Comment</label>
											    	<textarea class="form-control" id="comment" type="text" name="comment"><?php echo $schedule->comment; ?></textarea>
											  		
											</div>
											
								      </div>
									      <div class="modal-footer">
									      <input type="hidden" name="id" value="<?php echo $schedule->id;?>" />
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									        <button class="btn btn-success" type="submit">Save changes</button>
									        <?php echo form_close(); ?>
									      </div>
								      </div>
								  </div>
								</div>
								
								<!-- end comment modal-->
								
								
								
								<!-- start teacher modal -->
		   						
		   						<div class="modal fade teacher-modal-<?php echo $schedule->id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								  <div class="modal-dialog modal-lg">
									  <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Edit Teacher</h4>
									      </div>
								      <div class="modal-body">
								      
								        	<?php echo form_open("admin/crud/course2_editTeacher");?>
								        	<div class="form-group">
											    	<label>Teacher</label>									    	
													 <?php
														$attributes = array (
														'name' => 'teacher',	
														'username'=>'',
														'id'=> 'id',
														);
													 echo form_input($attributes);
													  ?>  
										            <ul>  
										                <div id="result"></div>  
										            </ul>
											</div>
											
								      </div>
									      <div class="modal-footer">
									      <input type="hidden" name="id" value="<?php echo $schedule->id;?>" />
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									        <button class="btn btn-success" type="submit">Save changes</button>
									        <?php echo form_close(); ?>
									      </div>
								      </div>
								  </div>
								</div>
								
								<!-- end teacher modal-->
								
								<!-- start status modal -->
		   						
		   						<div class="modal fade status-modal-<?php echo $schedule->id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								  <div class="modal-dialog modal-lg">
									  <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Edit Comment</h4>
									      </div>
								      <div class="modal-body">
								      
								        	<?php echo form_open("admin/crud/course2_editStatus");?>
								        	<div class="form-group">
											    	<label>Status</label>
											    	<select class="form-control" name="status">
									                	<option <?php echo ($schedule->status === "Waiting for confirmation")?"selected":""; ?>>Waiting for confirmation</option>
									                	<option <?php echo ($schedule->status === "Aprroved")?"selected":""; ?>>Aprroved</option>
									                	<option <?php echo ($schedule->status === "Cancel")?"selected":""; ?>>Cancel</option>
									                	<option <?php echo ($schedule->status === "Reject")?"selected":""; ?>>Reject</option>
									                	<option <?php echo ($schedule->status === "Enrolled")?"selected":""; ?>>Enrolled</option>
									                </select>
											    	
											    	
											</div>
											
								      </div>
									      <div class="modal-footer">
									      <input type="hidden" name="id" value="<?php echo $schedule->id;?>" />
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									        <button class="btn btn-success" type="submit">Save changes</button>
									        <?php echo form_close(); ?>
									      </div>
								      </div>
								  </div>
								</div>
								
								<!-- end status modal-->
								
								
								
		   					
							<?php } ?>
		  					
		  					
		  					
		  					
		  					
							
							
		  					
				</table>
				
				
				
				
				
	<br>
	<div class="row">
        <div class="col-md-12 text-center">
            <?php echo $pagination; ?>
        </div>
    </div>
</div>
</div>