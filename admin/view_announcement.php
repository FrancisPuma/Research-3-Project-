<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_six();
?>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Announcements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Title/Header</th>
								  <th>Subject</th>
                                  <th>Uploaded Date</th>
                                  <th>Announcement Date</th>
								  <th>Announcement Type</th>
                                  <th>Sent By</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
						  <tbody>
							<?php
								include("includes/connection.php");

								$sql = "SELECT * FROM tblannouncement ORDER BY upload_date";
								$result=mysqli_query($connection_mysql, $sql); //rs.open sql,con

							while ($row=mysqli_fetch_array($result))
							{ ?><!--open of while -->
							<tr>
								<td><?php echo $row['announcement_id']; ?></td>
								<td><?php echo $row['header']; ?></td>
								<td><?php echo $row['subject']; ?></td>
								<td><?php echo $row['upload_date']; ?></td>
                                <td><?php echo $row['send_date']; ?></td>
                                <td><?php echo $row['announcement_type']; ?></td>
                                <td><?php echo $row['upload_name']; ?></td>
								<td class="center">
									<a class="btn btn-info" href="edit_announcement.php?aID=<?php echo $row['announcement_id']; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" onclick="return confirmDel()" href="delete_announcement.php?delID=<?php echo $row['announcement_id'];?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php
							   } //close of while
							?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>