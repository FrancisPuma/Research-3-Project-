<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_three();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Add New Record</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="save_data.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Firstname:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtfirstname" id="focusedInput" type="text" placeholder="Firstname">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Lastname:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtlastname" id="focusedInput" type="text" placeholder="Lastname">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Contact Number:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtcontact" id="focusedInput" type="text" placeholder="11-digits no space (e.g. 09853452441)">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Position/Role:</label>
								<div class="controls">
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="student" checked>
										Student
									</label>
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="staff">
										Staff
									</label>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Grade:</label>
								<div class="controls">
									<select name='txtgrade'>
										<option value="N/A">N/A</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Section:</label>
								<div class="controls">
									<select name='txtsection'>
										<option value="N/A">N/A</option>
										<option value="Diamond">Diamond</option>
										<option value="Emerald">Emerald</option>
										<option value="Garnet">Garnet</option>
										<option value="Jade">Jade</option>
										<option value="Opal">Opal</option>
										<option value="Ruby">Ruby</option>
										<option value="Sapphire">Sapphire</option>
										<option value="Topaz">Topaz</option>
										<option value="Adelfa">Adelfa</option>
										<option value="Camia">Camia</option>
										<option value="Champaca">Champaca</option>
										<option value="Dahlia">Dahlia</option>
										<option value="Ilang-Ilang">Ilang-Ilang</option>
										<option value="Jasmin">Jasmin</option>
										<option value="Rosal">Rosal</option>
										<option value="Sampaguita">Sampaguita</option>
										<option value="Beryllium">Beryllium</option>
										<option value="Cesium">Cesium</option>
										<option value="Lithium">Lithium</option>
										<option value="Magnesium">Magnesium</option>
										<option value="Potassium">Potassium</option>
										<option value="Rubidium">Rubidium</option>
										<option value="Sodium">Sodium</option>
										<option value="Strontium">Strontium</option>
										<option value="Charm">Charm</option>
										<option value="Electron">Electron</option>
										<option value="Gluon">Gluon</option>
										<option value="Graviton">Graviton</option>
										<option value="Muon">Muon</option>
										<option value="Photon">Photon</option>
										<option value="Tau">Tau</option>
										<option value="Truth">Truth</option>
										<option value="Block-A">Block-A</option>
										<option value="Block-B">Block-B</option>
										<option value="Block-C">Block-C</option>
										<option value="Block-D">Block-D</option>
										<option value="Block-E">Block-E</option>
										<option value="Block-F">Block-F</option>
										<option value="Block-G">Block-G</option>
										<option value="Block-H">Block-H</option>
									</select>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Add New Record</button>
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