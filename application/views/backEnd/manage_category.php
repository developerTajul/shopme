<?php echo $header; ?>
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
<?php echo $main_menu; ?>
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Category Information</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Id</th>
								  <th>Name</th>
								  <th>Description</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>

					

						  	<?php foreach($category_info as $value): ?>
							<tr>
								<td><?php echo $value->id; ?></td>
								<td class="center"><?php echo $value->cat_name; ?></td>
								<td class="center"><?php echo $value->cat_desc; ?></td>
								<?php 
								$status = $value->cat_status; 
								if($status == 1){ ?>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<?php }else{ ?>
								<td class="center">
									<span class="label label-important">Inactive</span>
								</td>
							   <?php	}	?>

								<td class="center">
								<?php 
								 
								if($status == 1){ ?>
								<a class="btn btn-danger" href="<?php echo base_url(); ?>Product_Controller/unpublish_category/<?php echo $value->id; ?>">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
								<?php }else{ ?>
									<a class="btn btn-success" href="<?php echo base_url(); ?>Product_Controller/publish_category/<?php echo $value->id; ?>">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
							   <?php }	?>

									
									<a class="btn btn-info" href="<?php echo base_url(); ?>Product_Controller/edit_category/<?php echo $value->id; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="<?php echo base_url(); ?>Product_Controller/delete_category/<?php echo $value->id; ?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
							
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
				

			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<?php echo $footer; ?>