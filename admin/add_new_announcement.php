<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_five();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Create New Announcement</h2>
						<div class="box-icon">
							<a href="users.php" class="btn-close"><i class="halflings-icon white remove"></i></a><!--replace users.php with announcement view-->
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="save_announcement.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Title/Header:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txttitle" id="focusedInput" type="text" placeholder="Title" required>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Subject:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtsubject" id="focusedInput" type="text" placeholder="Subject" required>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Set announcement date:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtdate" id="focusedInput" type="date" required>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Set announcement time:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txttime" id="focusedInput" type="time" required>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Message:</label>
								<div class="controls">
									<textarea class="input-xlarge focused" style="min-width: 90%" name="txtmessage" id="focusedInput" type="text" placeholder="Enter announcement message" rows="6" required></textarea>								
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Type:</label>
								<div class="controls">
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="advisory" checked>
										Advisory
									</label>
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="event">
										Event
									</label>
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios3" value="reminder">
										Reminder
									</label>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">From:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtupload" id="focusedInput" type="text" placeholder="Name of sender/office">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Send to:</label>
								<div class="controls">
									<div class="row-fluid">
										<div class="span5">
											<p  style="text-align: center">Role:</p>
											<label class="checkbox">
												<input type="checkbox" name="checkboxRole[]" value="student">
												Student
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxRole[]" value="staff">
												Staff
											</label>
										</div>
										<div class="span5">
											<p style="text-align: center">Grade:</p>
											<label class="checkbox">
												<input type="checkbox" name="checkboxGrade[]" value="7">
												Grade 7
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxGrade[]" value="8">
												Grade 8
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxGrade[]" value="9">
												Grade 9
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxGrade[]" value="10">
												Grade 10
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxGrade[]" value="11">
												Grade 11
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxGrade[]" value="12">
												Grade 12
											</label>
										</div>
										<div class="span10">
											<p style="text-align: center">Section:</p>
										</div>
										<div class="span2">
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Diamond">
												Diamond
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Emerald">
												Emerald
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Garnet">
												Garnet
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Jade">
												Jade
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Opal">
												Opal
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Ruby">
												Ruby
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Sapphire">
												Sapphire
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Topaz">
												Topaz
											</label>
										</div>
										<div class="span2">
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Adelfa">
												Adelfa
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Camia">
												Camia
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Champaca">
												Champaca
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Dahlia">
												Dahlia
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Ilang-Ilang">
												Ilang-Ilang
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Jasmin">
												Jasmin
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Rosal">
												Rosal
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Sampaguita">
												Sampaguita
											</label>
										</div>
										<div class="span2">
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Beryllium">
												Beryllium
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Cesium">
												Cesium
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Lithium">
												Lithium
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Magnesium">
												Magnesium
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Potassium">
												Potassium
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Rubidium">
												Rubidium
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Sodium">
												Sodium
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Strontium">
												Strontium
											</label>
										</div>
										<div class="span2">
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Charm">
												Charm
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Electron">
												Electron
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Gluon">
												Gluon
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Graviton">
												Graviton
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Muon">
												Muon
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Photon">
												Photon
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Tau">
												Tau
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Truth">
												Truth
											</label>
										</div>
										<div class="span2">
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-A">
												Block-A
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-B">
												Block-B
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-C">
												Block-C
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-D">
												Block-D
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-E">
												Block-E
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-F">
												Block-F
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-G">
												Block-G
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-H">
												Block-H
											</label>
										</div>
									</div>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Save New Announcement</button>
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->